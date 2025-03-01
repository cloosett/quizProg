<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Question;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function clearSession()
    {
        session()->forget('question_number');
        session()->forget('total_questions');
        session()->forget('progress');
        session()->forget('correct_answers');
    }
    public function start($topicID)
    {
        $this->clearSession();
        $nextQuestion = Question::with('answers')->where('topic_id', $topicID)->first();
        session(['total_questions' => Question::where('topic_id', $topicID)->count()]);
        if (!$nextQuestion) {
            return redirect()->back()->with('error', 'Питання для цієї мови не знайдено!');
        }

        return view('profile.quiz.start', compact('nextQuestion', 'topicID'));
    }

    public function nextQuestion(Request $request)
    {
        $userAnswerId = $request->input('selectedAnswer');
        $questionId = $request->input('question_id');
        $topicID = $request->input('topic_id');
        session(['correct_answers' => 0]);

        $currentQuestionNumber = session('question_number', 1);

        $progress = ($currentQuestionNumber / session('total_questions')) * 100;
        session(['progress' => $progress]);

        $question = Question::find($questionId);
        $answer = Answer::find($userAnswerId);

        if ($answer && $answer->is_correct) {
            $correctAnswers = session('correct_answers', 0);
            session(['correct_answers' => $correctAnswers + 1]);
        }

        // Отримуємо наступне питання
        $nextQuestion = Question::where('id', '>', $questionId)
            ->where('topic_id', $topicID)
            ->first();

        if (!$nextQuestion) {
            session(['progress' => 0]);
            session(['question_number' => 1]);
            session()->forget('total_questions');
            return redirect()->route('quiz.end', ['topic_id' => $topicID]);
        }

        // Інкрементуємо номер питання
        session(['question_number' => $currentQuestionNumber + 1]);
        return view('profile.quiz.start', compact('nextQuestion', 'topicID'));
    }


    public function resultQuiz($topic_id)
    {
        $correctAnswers = session('correct_answers', 0);
        $totalQuestions = Question::where('topic_id', $topic_id)->count();
        $incorrectAnswers = $totalQuestions - $correctAnswers;
        $percentage = ($correctAnswers / $totalQuestions) * 100;
        return view('profile.quiz.end', compact('correctAnswers', 'percentage', 'incorrectAnswers'));
    }

    public function exitQuiz($topic_id)
    {
        $this->clearSession();

        return redirect()->route('profile.quizzes');
    }
}
