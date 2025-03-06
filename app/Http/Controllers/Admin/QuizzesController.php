<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreQuizRequest;
use App\Http\Requests\UpdateQuizRequest;
use App\Models\Answer;
use App\Models\Category;
use App\Models\Question;
use App\Models\Quiz;
use App\Models\TopicQuiz;
use App\Services\QuizService;
use Illuminate\Http\Request;

class QuizzesController extends Controller
{
    protected $quizService;

    public function __construct(QuizService $quizService)
    {
        $this->quizService = $quizService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $quizzes = Quiz::all();
        return view('admin.quiz.quizzes', compact('quizzes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.quiz.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreQuizRequest $request)
    {
        $data = $request->validated();
        $this->quizService->storeQuiz($data);
        return redirect()->route('admin.quizzes');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        $categories = Category::all();
        $quiz = Quiz::where('slug', $slug)->first();
        if (!$quiz) {
            return redirect()->route('admin.quizzes');
        }
        return view('admin.quiz.edit', compact('quiz','categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateQuizRequest $request, string $id)
    {
        $data = $request->validated();
        $this->quizService->updateQuiz($id, $data);
        return redirect()->route('admin.quizzes');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $quiz = $this->quizService->deleteQuiz($id);

        return redirect()->route('admin.quizzes');
    }
}
