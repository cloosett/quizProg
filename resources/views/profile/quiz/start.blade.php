@extends('layouts.app')
@php
    $questionNumber = session('question_number', 1);
    $progress = session('progress', 0);
@endphp
@section('content')
    @include('components.profile-sidebar')
    <div class="db-content">
        <div class="container mb-4">
            <div class="row mb-6">
                <div class="col-12">
                    <div class="d-flex flex-row align-items-center justify-content-between">
                        <h1 class="h2 mb-0">Quizzes</h1>

                        <a href="#!" class="btn btn-primary d-flex flex-row gap-2">
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-stars"
                       viewBox="0 0 16 16">
                    <path
                        d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.73 1.73 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.73 1.73 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.73 1.73 0 0 0 3.407 2.31zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.16 1.16 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.16 1.16 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732z"></path>
                  </svg>
                </span>
                            <span>Upgrade</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="d-flex flex-row align-items-center justify-content-between mb-4">
                        <h2 class="mb-0">{{ $quiz->category->name }}</h2>

                        <a href="{{ route('quiz.exit', $quiz_id) }}" class="btn btn-dark">Stop Quiz</a>
                    </div>
                    <form class="card" method="POST" action="{{ route('quiz.next') }}">
                        @csrf
                        <!-- Card body -->
                        <div class="card-body d-flex flex-column gap-5">
                            <!-- quiz -->
                            <div
                                class="d-flex flex-md-row flex-column justify-content-between align-items-md-center gap-1 gap-md-0">
                                <h3 class="mb-0"><a href="#" class="text-inherit">{{ $quiz->name }}</a></h3>
                                <div>
                            <span class="text-danger">
                              <i class="fe fe-clock me-1 align-middle"></i>
                              00:05:55
                            </span>
                                </div>
                            </div>
                            <div class="d-flex flex-column gap-2">
                                <!-- text -->
                                <div class="d-flex justify-content-between">
                                    <span>Exam Progress:</span>
                                    <span>Question {{$questionNumber}} out of {{ session('total_questions') }}</span>
                                </div>
                                <!-- progress bar -->
                                <div class="">
                                    <div class="progress" style="height: 6px">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: {{ $progress }}%"
                                             aria-valuenow="{{ $progress }}" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- text -->
                            <div class="d-flex flex-column gap-4">
                                <div class="d-flex flex-column gap-1">
                                    <span class="fw-semibold text-secondary">Question {{$questionNumber}}</span>
                                    <h3 class="mb-0">{{ $nextQuestion->question_text }}</h3>
                                </div>
                                <div class="d-flex flex-column gap-4">
                                    <!-- list group -->
                                    <div class="list-group">
                                        @foreach($nextQuestion->answers as $answer)
                                            <div class="list-group-item list-group-item-action" aria-current="true">
                                                <!-- form check -->
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="selectedAnswer"
                                                           id="answer{{ $answer->id }}" value="{{ $answer->id }}">
                                                    <label class="form-check-label stretched-link"
                                                           for="answer{{ $answer->id }}">{{ $answer->answer_text }}</label>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <!-- Button -->
                                    <div class="d-flex justify-content-end">
                                        <input type="hidden" name="question_id" value="{{ $nextQuestion->id }}">
                                        <input type="hidden" name="quiz_id" value="{{ $quiz_id }}">
                                        <!-- Відправляємо вибрану відповідь через поле selectedAnswer -->
                                        <button type="submit" class="btn btn-primary">
                                            Next
                                            <i class="fa fa-arrow-right"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

<?php
$hideFooter = true;
?>
