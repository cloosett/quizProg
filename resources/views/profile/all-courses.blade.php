@extends('layouts.app')

@section('content')
    @include('components.profile-sidebar')

    <div class="db-content">
        <div class="container mb-4">
            <div class="row mb-5">
                <div class="col-12">
                    <div class="d-flex flex-row align-items-center justify-content-between">
                        <h1 class="h2 mb-0">Projects</h1>

                        <a href="#!" class="btn btn-primary d-flex flex-row gap-2">
                <span>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-stars" viewBox="0 0 16 16">
                    <path d="M7.657 6.247c.11-.33.576-.33.686 0l.645 1.937a2.89 2.89 0 0 0 1.829 1.828l1.936.645c.33.11.33.576 0 .686l-1.937.645a2.89 2.89 0 0 0-1.828 1.829l-.645 1.936a.361.361 0 0 1-.686 0l-.645-1.937a2.89 2.89 0 0 0-1.828-1.828l-1.937-.645a.361.361 0 0 1 0-.686l1.937-.645a2.89 2.89 0 0 0 1.828-1.828zM3.794 1.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387A1.73 1.73 0 0 0 4.593 5.69l-.387 1.162a.217.217 0 0 1-.412 0L3.407 5.69A1.73 1.73 0 0 0 2.31 4.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387A1.73 1.73 0 0 0 3.407 2.31zM10.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.16 1.16 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.16 1.16 0 0 0-.732-.732L9.1 2.137a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732z"></path>
                  </svg>
                </span>
                            <span>Upgrade</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card mb-5">
                        <div class="card-body p-lg-6">
                            <div class="row align-items-center gy-5 gy-lg-0">
                                <div class="col-xl-9 col-lg-6">
                                    <div class="d-flex flex-column gap-5 py-xl-3">
                                        <div class="pe-xl-8">
                                            <h2 class="mb-0">Browse the ever-growing list of projects ideas and solutions.</h2>
                                            <p class="mb-0">
                                                Building projects is the best way to learn. Engage with real-world challenges using applications. Apply your knowledge to real scenarios in a practical environment.
                                            </p>
                                        </div>
                                        <div>
                                            <a href="#!" class="btn btn-dark">Get Started</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-6">
                                    <div class="text-center">
                                        <img src="../assets/images/svg/projects.svg" alt="project">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gy-4">
                <div class="col-12">
                    <div class="row gy-3 gy-lg-0 align-items-center">
                        <div class="col-lg-7 col-md-6">
                            <span class="fw-bold">{{ $learning->count() }}</span>
                            <span>Projects</span>
                        </div>
                        <div class="col-lg-5 col-md-6">
                            <div class="row g-3">
                                <div class="col-6">
                                    <label class="form-label visually-hidden" for="projectTopics">Topics</label>
                                    <div class="choices" data-type="select-one" tabindex="0" role="listbox" aria-haspopup="true" aria-expanded="false"><div class="choices__inner"><select class="form-select choices__input" data-choices="" id="projectTopics" name="projectTopics" hidden="" tabindex="-1" data-choice="active"><option value="" data-custom-properties="[object Object]">Topics</option></select><div class="choices__list choices__list--single"><div class="choices__item choices__placeholder choices__item--selectable" data-item="" data-id="1" data-value="" data-custom-properties="[object Object]" aria-selected="true">Topics</div></div></div><div class="choices__list choices__list--dropdown" aria-expanded="false"><div class="choices__list" role="listbox"><div id="choices--projectTopics-item-choice-1" class="choices__item choices__item--choice is-selected choices__placeholder choices__item--selectable is-highlighted" role="option" data-choice="" data-id="1" data-value="" data-select-text="" data-choice-selectable="" aria-selected="true">Topics</div><div id="choices--projectTopics-item-choice-2" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="2" data-value="topics1" data-select-text="" data-choice-selectable="">topics1</div><div id="choices--projectTopics-item-choice-3" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="3" data-value="topics2" data-select-text="" data-choice-selectable="">topics2</div><div id="choices--projectTopics-item-choice-4" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="4" data-value="topics3" data-select-text="" data-choice-selectable="">topics3</div></div></div></div>
                                </div>
                                <div class="col-6">
                                    <label class="form-label visually-hidden" for="projectIndustries">Industries</label>
                                    <div class="choices" data-type="select-one" tabindex="0" role="listbox" aria-haspopup="true" aria-expanded="false"><div class="choices__inner"><select class="form-select choices__input" data-choices="" id="projectIndustries" name="projectIndustries" hidden="" tabindex="-1" data-choice="active"><option value="" data-custom-properties="[object Object]">Industries</option></select><div class="choices__list choices__list--single"><div class="choices__item choices__placeholder choices__item--selectable" data-item="" data-id="1" data-value="" data-custom-properties="[object Object]" aria-selected="true">Industries</div></div></div><div class="choices__list choices__list--dropdown" aria-expanded="false"><div class="choices__list" role="listbox"><div id="choices--projectIndustries-item-choice-1" class="choices__item choices__item--choice is-selected choices__placeholder choices__item--selectable is-highlighted" role="option" data-choice="" data-id="1" data-value="" data-select-text="" data-choice-selectable="" aria-selected="true">Industries</div><div id="choices--projectIndustries-item-choice-2" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="2" data-value="industries1" data-select-text="" data-choice-selectable="">industries1</div><div id="choices--projectIndustries-item-choice-3" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="3" data-value="industries2" data-select-text="" data-choice-selectable="">industries2</div><div id="choices--projectIndustries-item-choice-4" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="4" data-value="industries3" data-select-text="" data-choice-selectable="">industries3</div></div></div></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @foreach($learning as $learn)
                    <div class="col-xl-4 col-md-6 col-12">
                        <div class="card h-100">
                            <div class="card-body d-flex flex-column gap-3">
                                <div>
                                    <span class="badge {{ $learn->level == 'junior' ? 'bg-success-subtle text-success' : ($learn->level == 'middle' ? 'bg-warning-subtle text-warning' : ($learn->level == 'senior' ? 'bg-danger-subtle text-danger' : 'bg-secondary-subtle text-secondary')) }} rounded-pill">{{ ucfirst($learn->level) }}</span>
                                </div>
                                <h3 class="mb-0">{{ $learn->title }}</h3>
                                <p class="mb-0">{{ $learn->description }}</p>
                                <div class="d-flex flex-row gap-2">
                                    @foreach(explode(',', $learn->tags) as $tag)
                                        <span class="badge bg-light-subtle border rounded-pill text-secondary">{{ $tag }}</span>
                                    @endforeach
                                </div>

{{--                                <div class="d-flex flex-row gap-1 align-items-center">--}}
{{--                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill text-gray-400" viewBox="0 0 16 16">--}}
{{--                                        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"></path>--}}
{{--                                    </svg>--}}
{{--                                    <span class="fw-bold">4529</span>--}}
{{--                                    <span>Students</span>--}}
{{--                                </div>--}}
{{--                                <div>--}}
                                    <a href="{{ route('profile.mycourses', ['slug' => $learn->slug]) }}" class="btn btn-success">Continue</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
{{--                <div class="col-12">--}}
{{--                    <!-- default pagination -->--}}
{{--                    <nav aria-label="Page navigation example">--}}
{{--                        <ul class="pagination mb-0">--}}
{{--                            <li class="page-item">--}}
{{--                                <a class="page-link disabled" href="#">--}}
{{--                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">--}}
{{--                                        <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"></path>--}}
{{--                                    </svg>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                            <li class="page-item active"><a class="page-link" href="#">1</a></li>--}}
{{--                            <li class="page-item"><a class="page-link" href="#">2</a></li>--}}
{{--                            <li class="page-item"><a class="page-link" href="#">3</a></li>--}}
{{--                            <li class="page-item">--}}
{{--                                <a class="page-link" href="#">--}}
{{--                                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">--}}
{{--                                        <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>--}}
{{--                                    </svg>--}}
{{--                                </a>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </nav>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
@endsection

<?php
    $hideFooter = true;
?>
