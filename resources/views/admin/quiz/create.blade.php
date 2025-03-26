@extends('layouts.admin')

@section('content')
    <main>
        <section class="py-4 py-lg-6 bg-primary">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-1 col-lg-10 col-md-12 col-12">
                        <div class="d-lg-flex align-items-center justify-content-between">
                            <!-- Content -->
                            <div class="mb-4 mb-lg-0">
                                <h1 class="text-white mb-1">Add New Course</h1>
                                <p class="mb-0 text-white lead">Just fill the form and create your courses.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Page Content -->
        <section class="pb-8">
            <div class="container">
                <div id="courseForm" class="bs-stepper">
                    <div class="row">
                        <div class="offset-lg-1 col-lg-10 col-md-12 col-12">
                            <!-- Stepper Button -->
                            <div class="bs-stepper-header shadow-sm mt-4" role="tablist">
                                <div class="step" data-target="#test-l-1">
                                    <span class="bs-stepper-circle">1</span>
                                    <span class="bs-stepper-label">Basic Information</span>
                                </div>
                                <div class="bs-stepper-line"></div>
                                <div class="step" data-target="#test-l-2">
                                    <span class="bs-stepper-circle">2</span>
                                    <span class="bs-stepper-label">Quiz Media</span>
                                </div>
                                <div class="bs-stepper-line"></div>
                                <div class="step" data-target="#test-l-3">
                                    <span class="bs-stepper-circle">3</span>
                                    <span class="bs-stepper-label">Questions/Answers</span>
                                </div>
                                <div class="bs-stepper-line"></div>
                                <div class="step" data-target="#test-l-4">
                                    <span class="bs-stepper-circle">4</span>
                                    <span class="bs-stepper-label">Additionally</span>
                                </div>
                            </div>
                            <!-- Stepper content -->
                            <div class="bs-stepper-content mt-5">
                                <form id="quizForm" action="{{ route('admin.quizzes.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <!-- Content one -->
                                    <div id="test-l-1" role="tabpanel" class="bs-stepper-pane dstepper-block"
                                         aria-labelledby="courseFormtrigger1">
                                        <!-- Card -->
                                        <div class="card mb-3">
                                            <div class="card-header border-bottom px-4 py-3">
                                                <h4 class="mb-0">Basic Information</h4>
                                            </div>
                                            <!-- Card body -->
                                            <div class="card-body">
                                                <div class="mb-3">
                                                    <label for="title" class="form-label">Quiz Title</label>
                                                    <input id="title" name="title" class="form-control @error('title') is-invalid @enderror"
                                                           type="text" placeholder="Quiz Title">
                                                    @error('title')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                    <small>Write a 60 character quiz title.</small>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="slug" class="form-label">Slug</label>
                                                    <input id="slug" name="slug" class="form-control @error('slug') is-invalid @enderror"
                                                           type="text" placeholder="Quiz Slug">
                                                    @error('slug')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                    <small>Write a unique quiz slug.</small>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="category">Quiz Category</label>
                                                    <div class="select-container">
                                                        <select class="form-select @error('category') is-invalid @enderror" id="category" name="category">
                                                            <option value="">Select category</option>
                                                            @foreach ($categories as $category)
                                                                <option value="{{ $category->id }}" @if(old('category') == $category->id) selected @endif>{{ $category->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    @error('category')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                    <small>Help people find your courses by choosing categories that represent your quiz.</small>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="level">Quiz level</label>
                                                    <div class="select-container">
                                                        <select class="form-select @error('level') is-invalid @enderror" id="level" name="level">
                                                            <option value="">Select Level</option>
                                                            <option value="easy" @if(old('level') == 'easy') selected @endif>Easy</option>
                                                            <option value="medium" @if(old('level') == 'medium') selected @endif>Medium</option>
                                                            <option value="hard" @if(old('level') == 'hard') selected @endif>Hard</option>
                                                        </select>
                                                    </div>
                                                    @error('level')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Quiz Description</label>
                                                    <textarea class="form-control @error('description') is-invalid @enderror" id="description"
                                                              name="description" rows="4" placeholder="Description">{{ old('description') }}</textarea>
                                                    @error('description')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                    <small>A brief summary of your quiz.</small>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Due Date</label>
                                                    <input type="date" class="form-control @error('date') is-invalid @enderror" id="date"
                                                           name="date" placeholder="Due Date" value="{{ old('date') }}">
                                                    @error('date')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Time Limit</label>
                                                    <input type="time" class="form-control @error('time') is-invalid @enderror" id="time"
                                                           name="time" placeholder="Time" value="{{ old('time') }}">
                                                    @error('time')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Content two -->
                                    <div id="test-l-2" role="tabpanel" class="bs-stepper-pane dstepper-none"
                                         aria-labelledby="courseFormtrigger2">
                                        <!-- Card -->
                                        <div class="card mb-3 border-0">
                                            <div class="card-header border-bottom px-4 py-3">
                                                <h4 class="mb-0">Quiz Media</h4>
                                            </div>
                                            <!-- Card body -->
                                            <div class="card-body">
                                                <div class="mb-4">
                                                    <label for="image" class="form-label">Upload image</label>
                                                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" accept="image/*">
                                                    @error('image')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Content three -->
                                    <div id="test-l-3" role="tabpanel" class="bs-stepper-pane dstepper-none"
                                         aria-labelledby="courseFormtrigger3">
                                        <!-- Card -->
                                        <div class="card mb-3 border-0">
                                            <div class="card-header border-bottom px-4 py-3">
                                                <h4 class="mb-0">Questions/Answers</h4>
                                            </div>
                                            <!-- Card body -->
                                            <div class="card-body">
                                                <p>Create questions and add answers to them (Circle the correct answer)</p>
                                                <div class="accordion" id="accordionExample">
                                                </div>
                                                <button class="btn btn-outline-primary btn-s mt-2"
                                                        id="addSectionBtn" type="button">Add Question</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Content four -->
                                    <div id="test-l-4" role="tabpanel" class="bs-stepper-pane dstepper-none"
                                         aria-labelledby="courseFormtrigger4">
                                        <!-- Card -->
                                        <div class="card mb-3 border-0">
                                            <div class="card-header border-bottom px-4 py-3">
                                                <h4 class="mb-0">Additionally</h4>
                                            </div>
                                            <!-- Card body -->
                                            <div class="card-body pb-0">
                                                <label class="form-label">Tags</label>
                                                <input type="text" name="tags" class="form-control @error('tags') is-invalid @enderror w-100" value="jquery, bootstrap" placeholder="Tags">
                                                @error('tags')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="card-body">
                                                <label class="form-label">Status</label>
                                                <div class="form-check form-switch">
                                                    <input type="checkbox" class="form-check-input" name="status" id="status">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-between mb-8">
                                            <button type="submit" class="btn btn-danger">Submit For Review</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
