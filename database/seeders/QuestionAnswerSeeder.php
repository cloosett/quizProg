<?php

namespace Database\Seeders;

use App\Models\TopicQuiz;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Question;
use App\Models\Answer;
use Faker\Factory as Faker;

class QuestionAnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();

        // Отримуємо всі мови програмування
        $languages = TopicQuiz::all();

        // Створюємо 10 запитань для кожної мови програмування
        foreach ($languages as $language) {
            for ($i = 0; $i < 10; $i++) {
                $question = Question::create([
                    'question_text' => $faker->sentence(),
                    'topic_id' => $language->id,
                ]);

                // Створюємо 4 відповіді для кожного питання
                for ($j = 0; $j < 4; $j++) {
                    $isCorrect = ($j == 0);  // Перша відповідь правильна
                    Answer::create([
                        'question_id' => $question->id,
                        'answer_text' => $faker->sentence(),
                        'is_correct' => $isCorrect,
                    ]);
                }
            }
        }
    }
}
