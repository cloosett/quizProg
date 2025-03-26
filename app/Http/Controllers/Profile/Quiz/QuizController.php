<?php

namespace App\Http\Controllers\Profile\Quiz;

use App\Http\Controllers\Controller;
use App\Models\Quiz;
use App\Services\PassingQuizService;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    protected $quizService;

    public function __construct(PassingQuizService $quizService)
    {
        $this->quizService = $quizService;
    }



    public function start($slug)
    {
        $quiz = $this->quizService->getQuizBySlug($slug);
        $nextQuestion = $this->quizService->startQuiz($slug);
        $quiz_id = Quiz::where('slug', $slug)->first()->id;

        if (!$nextQuestion) {
            return redirect()->back()->with('error', 'Quiz not found!');
        }

        return view('profile.quiz.start', compact('nextQuestion', 'quiz', 'quiz_id'));
    }

    public function nextQuestion(Request $request)
    {
        $userAnswerId = $request->input('selectedAnswer');
        $questionId = $request->input('question_id');
        $quizId = $request->input('quiz_id');

        $nextQuestion = $this->quizService->handleNextQuestion($userAnswerId, $questionId, $quizId);

        if (!$nextQuestion) {
            return redirect()->route('quiz.end', ['quiz_id' => $quizId]);
        }

        return view('profile.quiz.start', compact('nextQuestion', 'quizId'));
    }

    public function resultQuiz($quizId)
    {
        $result = $this->quizService->getQuizResult($quizId);

        return view('profile.quiz.end', $result);
    }

    public function exitQuiz($quizId)
    {
        $this->quizService->clearSession();

        return redirect()->route('profile.quizzes');
    }
}
