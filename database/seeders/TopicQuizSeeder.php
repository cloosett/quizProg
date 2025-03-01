<?php

namespace Database\Seeders;

use App\Models\TopicQuiz;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TopicQuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $topics = ['PHP', 'JavaScript', 'Python', 'Java', 'C++'];

        foreach ($topics as $topic) {
            TopicQuiz::create(['name' => $topic]);
        }
    }
}
