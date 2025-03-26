<?php

namespace App\Services;

use App\Repositories\PassingQuizRepository;

class PassingQuizService
{
    protected $quizRepository;

    public function __construct(PassingQuizRepository $quizRepository)
    {
        $this->quizRepository = $quizRepository;
    }

    public function clearSession()
    {
        session()->forget('question_number');
        session()->forget('total_questions');
        session()->forget('progress');
        session()->forget('correct_answers');
    }

    public function getQuizBySlug($slug)
    {
        $quiz = $this->quizRepository->getQuizBySlug($slug);
        return $quiz;
    }
    public function startQuiz($slug)
    {
        $this->clearSession();
        $quiz = $this->quizRepository->getQuizBySlug($slug);

        if (!$quiz) {
            return null; // Or handle it accordingly, maybe throw an exception
        }

        $quizId = $quiz->id;
        $nextQuestion = $this->quizRepository->getFirstQuestion($quizId);

        session(['total_questions' => $this->quizRepository->countQuestionsByQuizId($quizId)]);

        return $nextQuestion;
    }

    public function handleNextQuestion($userAnswerId, $questionId, $quizId)
    {
        $currentQuestionNumber = session('question_number', 1);
        $progress = ($currentQuestionNumber / session('total_questions')) * 100;
        session(['progress' => $progress]);

        $answer = $this->quizRepository->getCorrectAnswers($userAnswerId);

        if ($answer && $answer->is_correct) {
            $correctAnswers = session('correct_answers', 0);
            session(['correct_answers' => $correctAnswers + 1]);
        }

        // Get next question
        $nextQuestion = $this->quizRepository->getNextQuestion($quizId, $questionId);

        if (!$nextQuestion) {
            session(['progress' => 0]);
            session(['question_number' => 1]);
            session()->forget('total_questions');
            return null;
        }

        session(['question_number' => $currentQuestionNumber + 1]);
        return $nextQuestion;
    }

    public function getQuizResult($quizId)
    {
        $correctAnswers = session('correct_answers', 0);
        $totalQuestions = $this->quizRepository->countQuestionsByQuizId($quizId);
        $incorrectAnswers = $totalQuestions - $correctAnswers;
        $percentage = ($correctAnswers / $totalQuestions) * 100;

        return [
            'correctAnswers' => $correctAnswers,
            'percentage' => $percentage,
            'incorrectAnswers' => $incorrectAnswers
        ];
    }
}
