<?php

namespace App\Repositories;

use App\Models\Quiz;
use App\Models\Question;
use App\Models\Answer;

class PassingQuizRepository
{
    public function getQuizBySlug($slug)
    {
        return Quiz::where('slug', $slug)->first();
    }

    public function getQuestionsByQuizId($quizId)
    {
        return Question::where('quiz_id', $quizId)->get();
    }

    public function getFirstQuestion($quizId)
    {
        return Question::with('answers')->where('quiz_id', $quizId)->first();
    }

    public function getNextQuestion($quizId, $questionId)
    {
        return Question::where('id', '>', $questionId)
            ->where('quiz_id', $quizId)
            ->first();
    }

    public function getCorrectAnswers($userAnswerId)
    {
        return Answer::find($userAnswerId);
    }

    public function countQuestionsByQuizId($quizId)
    {
        return Question::where('quiz_id', $quizId)->count();
    }
}
