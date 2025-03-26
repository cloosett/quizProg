<?php

namespace App\Services;

use App\Repositories\QuizRepository;
use App\Repositories\QuestionRepository;
use App\Repositories\AnswerRepository;

class QuizService
{
    protected $quizRepository;
    protected $questionRepository;
    protected $answerRepository;

    public function __construct(
        QuizRepository $quizRepository,
        QuestionRepository $questionRepository,
        AnswerRepository $answerRepository
    ) {
        $this->quizRepository = $quizRepository;
        $this->questionRepository = $questionRepository;
        $this->answerRepository = $answerRepository;
    }

    public function storeQuiz($data)
    {
        $quiz = $this->quizRepository->createQuiz($data);

        $quizData = json_decode($data['quizData']);
        foreach ($quizData as $data) {
            $question = $this->questionRepository->createQuestion($quiz->id, $data->question);

            foreach ($data->answers as $answerText) {
                $isCorrect = $answerText === $data->correct_answer;
                $this->answerRepository->createAnswer($question->id, $answerText, $isCorrect);
            }
        }

        return $quiz;
    }

    public function updateQuiz($quizId, $data)
    {
        $quiz = $this->quizRepository->updateQuiz($quizId, $data);

        $quizData = json_decode($data['quizData']);

        foreach ($quizData as $data) {
            $question = $this->questionRepository->findQuestionByQuizAndText($quizId, $data->question);

            if ($question) {
                $this->questionRepository->updateQuestion($question->id, $data->question);
            } else {
                $question = $this->questionRepository->createQuestion($quizId, $data->question);
            }

            foreach ($data->answers as $answerText) {
                $answer = $this->answerRepository->findAnswerByQuestionAndText($question->id, $answerText);
                $isCorrect = $answerText === $data->correct_answer;

                if ($answer) {
                    $this->answerRepository->updateAnswer($answer->id, $answerText, $isCorrect);
                } else {
                    $this->answerRepository->createAnswer($question->id, $answerText, $isCorrect);
                }
            }
        }

        return $quiz;
    }

    public function deleteQuiz($quizId)
    {
        return $this->quizRepository->deleteQuiz($quizId);
    }

}
