<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable = ['question_text', 'quiz_id'];

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
    public function quizzes()
    {
        return $this->belongsTo(Quiz::class);
    }
}
