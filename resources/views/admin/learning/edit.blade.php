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
                                <h1 class="text-white mb-1">Edit Quiz</h1>
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
                                <form id="quizForm" action="{{ route('admin.learning.update', $learning->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <!-- Content one -->
                                    <div id="test-l-1" role="tabpanel" class="bs-stepper-pane dstepper-block"
                                         aria-labelledby="courseFormtrigger1">
                                        <!-- Card -->
                                        <div class="card mb-3">
                                            <div class="card-header border-bottom px-4 py-3">
                                                <h4 class="mb-0">Basic Information</h4>
                                            </div>
                                            <div class="card-body">
                                                <div class="mb-3">
                                                    <label for="title" class="form-label">Learning Title</label>
                                                    <input id="title" name="title" value="{{ $learning->title }}" class="form-control @error('title') is-invalid @enderror" type="text" placeholder="Learning Title">
                                                    @error('title')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                                    <small>Write a 60 character learning title.</small>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="description" class="form-label">Learning Description</label>
                                                    <input id="description" name="description" value="{{ $learning->title }}" class="form-control @error('description') is-invalid @enderror" type="text" placeholder="Learning Description">
                                                    @error('description')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                                    <small>Write minimal learning description</small>
                                                </div>
                                                <div class="mb-3">
                                                    <label for="tags" class="form-label">Learning Tags</label>
                                                    <input id="tags" name="tags" value="{{ $learning->tags }}" class="form-control @error('tags') is-invalid @enderror" type="text" placeholder="PHP, Laravel">
                                                    @error('tags')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                                    <small>Write tags for learning</small>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="level">Learning level</label>
                                                    <div class="select-container">
                                                        <select class="form-select @error('level') is-invalid @enderror" id="level" name="level">
                                                            <option value="">Select Level</option>
                                                            <option value="junior" @if($learning->level == 'junior') selected @endif>Junior</option>
                                                            <option value="middle" @if($learning->level == 'middle') selected @endif>Middle</option>
                                                            <option value="senior" @if($learning->level == 'senior') selected @endif>Senior</option>
                                                        </select>
                                                    </div>
                                                    @error('level')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label for="slug" class="form-label">Learning Slug</label>
                                                    <input id="slug" name="slug" value="{{ $learning->slug }}" class="form-control @error('slug') is-invalid @enderror" type="text" placeholder="Please enter a unique slug">
                                                    @error('slug')<div class="invalid-feedback">{{ $message }}</div>@enderror
                                                    <small>Write a unique slug for learning</small>
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label" for="myeditorinstance">Text</label>
                                                    <textarea name="learning" id="myeditorinstance" class="form-control">{{ $learning->text }}</textarea>
                                                    @error('level')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="card-body">
                                                <label class="form-label">Status</label>
                                                <div class="form-check form-switch">
                                                    <input type="checkbox" class="form-check-input" name="status" id="status" {{ $learning->status ? 'checked' : '' }}>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary">Save</button>
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
