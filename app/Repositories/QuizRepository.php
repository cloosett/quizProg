<?php

namespace App\Repositories;

use App\Models\Quiz;
use Illuminate\Support\Facades\Storage;

class QuizRepository
{
    public function createQuiz($data)
    {
        $quiz = Quiz::create([
            'name' => $data['title'],
            'slug' => $data['slug'],
            'category_id' => $data['category'],
            'level' => $data['level'],
            'description' => $data['description'],
            'date' => $data['date'],
            'time' => $data['time'],
            'tags' => $data['tags'],
            'is_active' => $data['status'] === 'on' ? 1 : 0
        ]);

        if (isset($data['image']) && $data['image']->isValid()) {
            $photoPath = $data['image']->store('photos', 'public');
            $quiz->image = $photoPath;
            $quiz->save();
        }

        return $quiz;
    }

    public function updateQuiz($quizId, $data)
    {
        $quiz = Quiz::findOrFail($quizId);
        $quiz->update([
            'name' => $data['title'] ?? $quiz->name,
            'slug' => $data['slug'] ?? $quiz->slug,
            'category_id' => $data['category'] ?? $quiz->category_id,
            'level' => $data['level'] ?? $quiz->level,
            'description' => $data['description'] ?? $quiz->description,
            'date' => $data['date'] ?? $quiz->date,
            'time' => $data['time'] ?? $quiz->time,
            'tags' => $data['tags'] ?? $quiz->tags,
            'is_active' => isset($data['status']) ? 1 : 0
        ]);

        if (isset($data['image']) && $data['image']->isValid()) {
            $photoPath = $data['image']->store('photos', 'public');
            $quiz->image = $photoPath;
            $quiz->save();
        }

        return $quiz;
    }


    public function deleteQuiz($quizId)
    {
        $quiz = Quiz::findOrFail($quizId);

        foreach ($quiz->questions as $question) {
            foreach ($question->answers as $answer) {
                $answer->delete();
            }
            $question->delete();
        }
        $quiz->delete();

        return true;
    }
}
