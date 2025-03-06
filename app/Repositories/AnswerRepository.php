<?php

namespace App\Repositories;

use App\Models\Answer;

class AnswerRepository
{
    public function createAnswer($questionId, $answerText, $isCorrect)
    {
        return Answer::create([
            'question_id' => $questionId,
            'answer_text' => $answerText,
            'is_correct' => $isCorrect ? 1 : 0,
        ]);
    }
    public function findAnswerByQuestionAndText($questionId, $answerText)
    {
        return Answer::where('question_id', $questionId)
            ->where('answer_text', $answerText)
            ->first();
    }

    public function updateAnswer($answerId, $newText, $isCorrect)
    {
        $answer = Answer::findOrFail($answerId);
        $answer->update([
            'answer_text' => $newText,
            'is_correct' => $isCorrect,
        ]);

        return $answer;
    }
}
