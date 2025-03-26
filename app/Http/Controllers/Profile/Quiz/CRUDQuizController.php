<?php

namespace App\Http\Controllers\Profile\Quiz;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreQuizRequest;
use App\Http\Requests\UpdateQuizRequest;
use App\Models\Category;
use App\Models\Quiz;
use App\Services\QuizService;
use Illuminate\Http\Request;

class CRUDQuizController extends Controller
{
    protected $quizService;

    public function __construct(QuizService $quizService)
    {
        $this->quizService = $quizService;
    }

    public function index()
    {
        return view('profile.create-quiz');
    }

    public function create(){
        $categories = Category::all();

        return view('profile.quiz.create', compact('categories'));
    }

    public function store(StoreQuizRequest $request)
    {
        $data = $request->validated();
        $this->quizService->storeQuiz($data);
        return redirect()->route('profile.my-quiz');
    }

    public function edit(string $slug)
    {
        $categories = Category::all();
        $quiz = Quiz::where('slug', $slug)->first();
        if (!$quiz) {
            return redirect()->route('profile.my-quiz');
        }
        return view('profile.quiz.edit', compact('quiz','categories'));
    }

    public function update(UpdateQuizRequest $request, string $id)
    {
        $data = $request->validated();
        $this->quizService->updateQuiz($id, $data);
        return redirect()->route('profile.my-quiz');
    }

    public function destroy(string $id)
    {
        $quiz = $this->quizService->deleteQuiz($id);

        return redirect()->route('profile.my-quiz');
    }
}
