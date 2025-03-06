<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\QuizzesController;
use App\Http\Controllers\Profile\AccountDeleteController;
use App\Http\Controllers\Profile\AccountSettingsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuizController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::middleware(['auth', '2fa'])->prefix('profile')->group(function () {
    Route::get('dashboard', function () {
        return view('profile.dashboard');
    })->name('profile.dashboard');

    Route::get('social-profiles', function () {
        return view('profile.social-profiles');
    })->name('profile.social-profiles');

    Route::get('all-courses', function () {
        return view('profile.all-courses');
    })->name('profile.allcourses');

    Route::get('certificates', function () {
        return view('profile.certificates');
    })->name('profile.certificates');

    Route::get('/my-quiz', function () {
        return view('profile.my-quiz');
    })->name('profile.my-quiz');

    Route::get('/create-quiz', function () {
        return view('profile.create-quiz');
    })->name('profile.create-quiz');

    Route::get('/my-learning', function () {
        return view('profile.my-learning');
    })->name('profile.mylearning');

    Route::get('/quizzes', function () {
        $quizzes = \App\Models\Quiz::all();
        return view('profile.quizzes', compact('quizzes'));
    })->name('profile.quizzes');


    Route::get('/quiz/start/{slug}', [\App\Http\Controllers\QuizController::class, 'start'])->name('quiz.start');
    Route::post('/quiz/next', [\App\Http\Controllers\QuizController::class, 'nextQuestion'])->name('quiz.next');
    Route::get('/quiz/result/{quiz_id}', [\App\Http\Controllers\QuizController::class, 'resultQuiz'])->name('quiz.end');
    Route::get('/quiz/exit/{quiz_id}', [\App\Http\Controllers\QuizController::class, 'exitQuiz'])->name('quiz.exit');

    Route::get('/account-delete', [AccountDeleteController::class, 'index'])->name('profile.index');
    Route::post('/account-delete', [AccountDeleteController::class, 'destroy'])->name('profile.destroy');

    Route::get('/setting', [AccountSettingsController::class, 'index'])->name('setting.index');
    Route::post('/account/update-email', [AccountSettingsController::class, 'updateEmail'])->name('account.update.email');
    Route::post('/account/update-password', [AccountSettingsController::class, 'updatePassword'])->name('account.update.password');
});


Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');


    Route::get('quizzes', [QuizzesController::class, 'index'])->name('admin.quizzes');
    Route::get('quizzes/create', [QuizzesController::class, 'create'])->name('admin.quizzes.create');
    Route::post('quizzes/store', [QuizzesController::class, 'store'])->name('admin.quizzes.store');
    Route::get('quizzes/{quiz}/edit', [QuizzesController::class, 'edit'])->name('admin.quizzes.edit');
    Route::post('quizzes/{quiz}', [QuizzesController::class, 'update'])->name('admin.quizzes.update');
    Route::post('quizzes/{id}/delete', [QuizzesController::class, 'destroy'])->name('admin.quizzes.destroy');

    Route::get('categories', [CategoryController::class, 'index'])->name('admin.categories');
    Route::post('categories/store', [CategoryController::class, 'store'])->name('admin.categories.store');
    Route::get('categories/{category}/edit', [CategoryController::class, 'edit'])->name('admin.categories.edit');
    Route::post('categories/{category}', [CategoryController::class, 'update'])->name('admin.categories.update');
    Route::post('categories/{category}/delete', [CategoryController::class, 'destroy'])->name('admin.categories.destroy');


});
Route::view('/404', 'error.404')->name('404');
require __DIR__.'/auth.php';
