<?php

namespace App\Repositories;

use App\Models\Question;

class QuestionRepository
{
    public function createQuestion($quizId, $questionText)
    {
        return Question::create([
            'question_text' => $questionText,
            'quiz_id' => $quizId,
        ]);
    }
    public function findQuestionByQuizAndText($quizId, $questionText)
    {
        return Question::where('quiz_id', $quizId)
            ->where('question_text', $questionText)
            ->first();
    }

    public function updateQuestion($questionId, $newText)
    {
        $question = Question::findOrFail($questionId);
        $question->update([
            'question_text' => $newText,
        ]);

        return $question;
    }

}
