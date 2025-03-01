@extends('layouts.app')

@section('content')
    @include('components.profile-sidebar')
    <div class="db-content">
        <div class="container mb-4">
            <div class="row mb-5">
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-12">
                    <div>
                        <h1 class="mb-0 h2">Quiz - Sample results</h1>
                        <p class="mb-0">These sample results represent what you'll see for each candidate when they submit their test.</p>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1 col-12">
                    <div class="bg-white border rounded">
                        <div class="row">
                            <div class="col-md-4 col-12">
                                <div class="d-flex flex-column border-end-md border-bottom border-bottom-md-0 gap-1 p-3">
                                    <h3 class="mb-0">{{$correctAnswers}}</h3>
                                    <span class="fw-medium text-success">Correct Answers</span>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="d-flex flex-column border-end-md border-bottom border-bottom-md-0 gap-1 p-3">
                                    <h3 class="mb-0">{{$incorrectAnswers}}</h3>
                                    <span class="fw-medium text-danger">Incorrect Answers</span>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <div class="d-flex flex-column gap-1 p-3">
                                    <h3 class="mb-0 text-success">{{$percentage}}%</h3>
                                    <span class="fw-medium">Total score</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<?php
$hideFooter = true;
?>
