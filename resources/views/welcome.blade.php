@extends('layouts.app')

@section('content')
    <main>
        <section class="py-lg-8 py-5">
            <!-- container -->
            <div class="container my-lg-8">
                <!-- row -->
                <div class="row align-items-center">
                    <!-- col -->
                    <div class="col-lg-6 mb-6 mb-lg-0">
                        <div>
                            <!-- heading -->
                            <h5 class="text-dark mb-4">
                                <i class="fa fa-check icon-shape bg-light-success text-success rounded-circle me-2 p-1"></i>
                                Most trusted education platform
                            </h5>
                            <!-- heading -->
                            <h1 class="display-3 fw-bold mb-3">Grow your skills and advance career</h1>
                            <!-- para -->
                            <p class="pe-lg-10 mb-5">
                                Start, switch, or advance your career with more than 5,000 courses, Professional Certificates, and degrees from world-class universities and companies.
                            </p>
                            <!-- btn -->
                            <a href="home-academy.html#" class="btn btn-primary">Join Free Now</a>
                            <a href="https://www.youtube.com/watch?v=Nfzi7034Kbg" class="glightbox fs-4 text-inherit ms-3">
                                <img src="{{asset('images/svg/play-btn.svg')}}" alt="play" class="me-2" />
                                Watch Demo
                            </a>
                        </div>
                    </div>
                    <!-- col -->
                    <div class="col-lg-6 d-flex justify-content-center">
                        <!-- images -->
                        <div class="position-relative">
                            <img src="{{ asset('images/background/acedamy-img/bg-thumb.svg') }}" alt="img" />
                            <img src="{{ asset('images/background/acedamy-img/girl-image.png') }}" alt="girl" class="w-100 w-md-auto position-absolute end-0 bottom-0" />
                            <img src="{{ asset('images/background/acedamy-img/frame-1.svg') }}" alt="frame" class="position-absolute top-0 ms-n8 d-none d-md-inline-block" />
                            <img src="{{ asset('images/background/acedamy-img/frame-2.svg') }}" alt="frame" class="position-absolute bottom-0 start-0 ms-lg-n8 ms-n6 mb-n7 d-none d-md-inline-block" />
                            <img src="{{ asset('images/background/acedamy-img/target.svg') }}" alt="target" class="position-absolute bottom-0 mb-8 ms-n8 ms-lg-n1 d-none d-md-inline-block" />
                            <img src="{{ asset('images/background/acedamy-img/sound.svg') }}" alt="sound" class="position-absolute top-50 mt-n8 ms-n8 d-none d-md-inline-block" style="left: -100px" />
                            <img src="{{ asset('images/background/acedamy-img/trophy.svg') }}" alt="trophy" class="position-absolute top-0 start-0 ms-n8 d-none d-md-inline-block" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- container -->
        <section class="pb-8">
            <div class="container mb-lg-8">
                <!-- row -->
                <div class="row">
                    <div class="col-md-6 col-lg-3 border-top-md border-bottom border-end-md">
                        <!-- text -->
                        <div class="py-7 text-center">
                            <div class="mb-3">
                                <i class="fa fa-award fs-2 text-info"></i>
                            </div>
                            <div class="lh-1">
                                <h2 class="mb-1">316,000+</h2>
                                <span>Qualified Instructor</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 border-top-md border-bottom border-end-lg">
                        <!-- icon -->
                        <div class="py-7 text-center">
                            <div class="mb-3">
                                <i class="fa fa-users fs-2 text-warning"></i>
                            </div>
                            <!-- text -->
                            <div class="lh-1">
                                <h2 class="mb-1">1.8 Billion+</h2>
                                <span>Course enrolments</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 border-top-lg border-bottom border-end-md">
                        <!-- icon -->
                        <div class="py-7 text-center">
                            <div class="mb-3">
                                <i class="fa fa-tv fs-2 text-primary"></i>
                            </div>
                            <!-- text -->
                            <div class="lh-1">
                                <h2 class="mb-1">41,000+</h2>
                                <span>Courses in 42 languages</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 border-top-lg border-bottom">
                        <!-- icon -->
                        <div class="py-7 text-center">
                            <div class="mb-3">
                                <i class="fa fa-film fs-2 text-success"></i>
                            </div>
                            <!-- text -->
                            <div class="lh-1">
                                <h2 class="mb-1">179,000+</h2>
                                <span>Online Videos</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <!-- row -->
            <div class="container mb-lg-8">
                <div class="row">
                    <!-- col -->
                    <div class="col-12">
                        <div class="mb-6">
                            <h2 class="mb-1 h1">Most Popular Courses</h2>
                            <p>These are the most popular courses among Geeks Courses learners worldwide in year 2022</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <!-- Nav tab -->
                        <ul class="nav nav-lb-tab mb-6 bg-gray-200 px-5 rounded-3" id="pills-tab" role="tablist">
                            <!-- nav item -->
                            <li class="nav-item ms-0" role="presentation">
                                <a
                                    class="nav-link active"
                                    id="pills-development-tab"
                                    data-bs-toggle="pill"
                                    href="home-academy.html#pills-development"
                                    role="tab"
                                    aria-controls="pills-development"
                                    aria-selected="true">
                                    Development
                                </a>
                            </li>
                            <!-- nav item -->
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-design-tab" data-bs-toggle="pill" href="home-academy.html#pills-design" role="tab" aria-controls="pills-design" aria-selected="false">Design</a>
                            </li>
                            <!-- nav item -->
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-marketing-tab" data-bs-toggle="pill" href="home-academy.html#pills-marketing" role="tab" aria-controls="pills-marketing" aria-selected="false">
                                    Marketing
                                </a>
                            </li>
                            <!-- nav item -->
                        </ul>
                        <!-- Tab content -->
                        <div class="tab-content" id="pills-tabContent">
                            <!-- tab content -->
                            <div class="tab-pane fade show active" id="pills-development" role="tabpanel" aria-labelledby="pills-development-tab">
                                <!-- row -->

                                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                                    <div class="col">
                                        <!-- Card -->
                                        <div class="card card-hover">
                                            <a href="https://geeksui.codescandy.com/geeks/pages/course-single.html"><img src="{{asset('images/course/course-python.jpg')}}" alt="card" class="card-img-top" /></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="badge bg-success-soft">Beginner</span>
                                                    <a href="home-academy.html#" class="fs-5"><i class="fa-regular fa-heart align-middle"></i></a>
                                                </div>
                                                <h4 class="mb-2 text-truncate-line-2"><a href="https://geeksui.codescandy.com/geeks/pages/course-single.html" class="text-inherit">The Python Course: build web application</a></h4>

                                                <small>By: Douglas Howell</small>
                                                <div class="lh-1 mt-3">
                                                        <span class="align-text-top">
                                                            <span class="fs-6">
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                            </span>
                                                        </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6">(13,245)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col">
                                                        <h5 class="mb-0">$19.00</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <a href="home-academy.html#" class="text-inherit">
                                                            <i class="fas fa-shopping-cart text-primary align-middle me-2"></i>
                                                            Get Enrolled
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <!-- Card -->
                                        <div class="card card-hover">
                                            <a href="https://geeksui.codescandy.com/geeks/pages/course-single.html"><img src="{{asset('images/course/course-python.jpg')}}" alt="card" class="card-img-top" /></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="badge bg-success-soft">Beginner</span>
                                                    <a href="home-academy.html#" class="fs-5"><i class="fa-regular fa-heart align-middle"></i></a>
                                                </div>
                                                <h4 class="mb-2 text-truncate-line-2"><a href="https://geeksui.codescandy.com/geeks/pages/course-single.html" class="text-inherit">The Python Course: build web application</a></h4>

                                                <small>By: Douglas Howell</small>
                                                <div class="lh-1 mt-3">
                                                        <span class="align-text-top">
                                                            <span class="fs-6">
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                            </span>
                                                        </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6">(13,245)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col">
                                                        <h5 class="mb-0">$19.00</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <a href="home-academy.html#" class="text-inherit">
                                                            <i class="fas fa-shopping-cart text-primary align-middle me-2"></i>
                                                            Get Enrolled
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <!-- Card -->
                                        <div class="card card-hover">
                                            <a href="https://geeksui.codescandy.com/geeks/pages/course-single.html"><img src="{{asset('images/course/course-python.jpg')}}" alt="card" class="card-img-top" /></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="badge bg-success-soft">Beginner</span>
                                                    <a href="home-academy.html#" class="fs-5"><i class="fa-regular fa-heart align-middle"></i></a>
                                                </div>
                                                <h4 class="mb-2 text-truncate-line-2"><a href="https://geeksui.codescandy.com/geeks/pages/course-single.html" class="text-inherit">The Python Course: build web application</a></h4>

                                                <small>By: Douglas Howell</small>
                                                <div class="lh-1 mt-3">
                                                        <span class="align-text-top">
                                                            <span class="fs-6">
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                            </span>
                                                        </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6">(13,245)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col">
                                                        <h5 class="mb-0">$19.00</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <a href="home-academy.html#" class="text-inherit">
                                                            <i class="fas fa-shopping-cart text-primary align-middle me-2"></i>
                                                            Get Enrolled
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <!-- Card -->
                                        <div class="card card-hover">
                                            <a href="https://geeksui.codescandy.com/geeks/pages/course-single.html"><img src="{{asset('images/course/course-python.jpg')}}" alt="card" class="card-img-top" /></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="badge bg-success-soft">Beginner</span>
                                                    <a href="home-academy.html#" class="fs-5"><i class="fa-regular fa-heart align-middle"></i></a>
                                                </div>
                                                <h4 class="mb-2 text-truncate-line-2"><a href="https://geeksui.codescandy.com/geeks/pages/course-single.html" class="text-inherit">The Python Course: build web application</a></h4>

                                                <small>By: Douglas Howell</small>
                                                <div class="lh-1 mt-3">
                                                        <span class="align-text-top">
                                                            <span class="fs-6">
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                            </span>
                                                        </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6">(13,245)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col">
                                                        <h5 class="mb-0">$19.00</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <a href="home-academy.html#" class="text-inherit">
                                                            <i class="fas fa-shopping-cart text-primary align-middle me-2"></i>
                                                            Get Enrolled
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- tab content -->
                            <div class="tab-pane fade" id="pills-design" role="tabpanel" aria-labelledby="pills-design-tab">
                                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                                    <div class="col">
                                        <!-- Card -->
                                        <div class="card card-hover">
                                            <a href="https://geeksui.codescandy.com/geeks/pages/course-single.html"><img src="../../assets/images/course/course-graphql.jpg" alt="course" class="card-img-top" /></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="badge bg-success-soft">Beginner</span>
                                                    <a href="home-academy.html#" class="fs-5"><i class="fa-regular fa-heart align-middle"></i></a>
                                                </div>
                                                <h4 class="mb-2 text-truncate-line-2"><a href="https://geeksui.codescandy.com/geeks/pages/course-single.html" class="text-inherit">GraphQL: introduction to graphQL for beginners</a></h4>

                                                <small>By: Michael Cundiff</small>
                                                <div class="lh-1 mt-3">
                                                        <span class="align-text-top">
                                                            <span class="fs-6">
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                            </span>
                                                        </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6">(9,300)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col">
                                                        <h5 class="mb-0">Free</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <a href="home-academy.html#" class="text-inherit">
                                                            <i class="fas fa-shopping-cart text-primary align-middle me-2"></i>
                                                            Get Enrolled
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Tab Pane -->
                            <div class="tab-pane fade" id="pills-marketing" role="tabpanel" aria-labelledby="pills-marketing-tab">
                                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                                    <div class="col">
                                        <!-- Card -->
                                        <div class="card card-hover">
                                            <a href="https://geeksui.codescandy.com/geeks/pages/course-single.html"><img src="../../assets/images/course/course-react.jpg" alt="course" class="card-img-top" /></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="badge bg-info-soft">Intermediate</span>
                                                    <a href="home-academy.html#" class="fs-5"><i class="fa-regular fa-heart align-middle"></i></a>
                                                </div>
                                                <h4 class="mb-2 text-truncate-line-2"><a href="https://geeksui.codescandy.com/geeks/pages/course-single.html" class="text-inherit">How to easily create a website with React</a></h4>
                                                <!-- List -->
                                                <small>By: Morris Mccoy</small>
                                                <div class="lh-1 mt-3">
                                                        <span class="align-text-top">
                                                            <span class="fs-6">
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                            </span>
                                                        </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6">(7,700)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col">
                                                        <h5 class="mb-0">$29.00</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <a href="home-academy.html#" class="text-inherit">
                                                            <i class="fas fa-shopping-cart text-primary align-middle me-2"></i>
                                                            Get Enrolled
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-business" role="tabpanel" aria-labelledby="pills-business-tab">
                                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                                    <div class="col">
                                        <!-- Card -->
                                        <div class="card card-hover">
                                            <a href="https://geeksui.codescandy.com/geeks/pages/course-single.html"><img src="../../assets/images/course/course-wordpress.jpg" alt="course" class="card-img-top" /></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="badge bg-danger-soft">Advance</span>
                                                    <a href="home-academy.html#" class="fs-5"><i class="fa-regular fa-heart align-middle"></i></a>
                                                </div>
                                                <h4 class="mb-2 text-truncate-line-2">
                                                    <a href="https://geeksui.codescandy.com/geeks/pages/course-single.html" class="text-inherit">WordPress: introduction to wordpress for beginners</a>
                                                </h4>

                                                <small>By: Victor Elliott</small>
                                                <div class="lh-1 mt-3">
                                                        <span class="align-text-top">
                                                            <span class="fs-6">
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                            </span>
                                                        </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6">(9,300)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col">
                                                        <h5 class="mb-0">$39.00</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <a href="home-academy.html#" class="text-inherit">
                                                            <i class="fas fa-shopping-cart text-primary align-middle me-2"></i>
                                                            Get Enrolled
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <!-- Card -->
                                        <div class="card card-hover">
                                            <a href="https://geeksui.codescandy.com/geeks/pages/course-single.html"><img src="../../assets/images/course/course-python.jpg" alt="course" class="card-img-top" /></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="badge bg-success-soft">Beginner</span>
                                                    <a href="home-academy.html#" class="fs-5"><i class="fa-regular fa-heart align-middle"></i></a>
                                                </div>
                                                <h4 class="mb-2 text-truncate-line-2"><a href="https://geeksui.codescandy.com/geeks/pages/course-single.html" class="text-inherit">The Python Course: build web application</a></h4>

                                                <small>By: Douglas Howell</small>
                                                <div class="lh-1 mt-3">
                                                        <span class="align-text-top">
                                                            <span class="fs-6">
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                            </span>
                                                        </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6">(13,245)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col">
                                                        <h5 class="mb-0">$19.00</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <a href="home-academy.html#" class="text-inherit">
                                                            <i class="fas fa-shopping-cart text-primary align-middle me-2"></i>
                                                            Get Enrolled
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <!-- Card -->
                                        <div class="card card-hover">
                                            <a href="https://geeksui.codescandy.com/geeks/pages/course-single.html"><img src="../../assets/images/course/course-react.jpg" alt="course" class="card-img-top" /></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="badge bg-info-soft">Intermediate</span>
                                                    <a href="home-academy.html#" class="fs-5"><i class="fa-regular fa-heart align-middle"></i></a>
                                                </div>
                                                <h4 class="mb-2 text-truncate-line-2"><a href="https://geeksui.codescandy.com/geeks/pages/course-single.html" class="text-inherit">How to easily create a website with React</a></h4>
                                                <!-- List -->
                                                <small>By: Morris Mccoy</small>
                                                <div class="lh-1 mt-3">
                                                        <span class="align-text-top">
                                                            <span class="fs-6">
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                            </span>
                                                        </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6">(7,700)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col">
                                                        <h5 class="mb-0">$29.00</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <a href="home-academy.html#" class="text-inherit">
                                                            <i class="fas fa-shopping-cart text-primary align-middle me-2"></i>
                                                            Get Enrolled
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <!-- Card -->
                                        <div class="card card-hover">
                                            <a href="https://geeksui.codescandy.com/geeks/pages/course-single.html"><img src="../../assets/images/course/course-graphql.jpg" alt="course" class="card-img-top" /></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="badge bg-success-soft">Beginner</span>
                                                    <a href="home-academy.html#" class="fs-5"><i class="fa-regular fa-heart align-middle"></i></a>
                                                </div>
                                                <h4 class="mb-2 text-truncate-line-2"><a href="https://geeksui.codescandy.com/geeks/pages/course-single.html" class="text-inherit">GraphQL: introduction to graphQL for beginners</a></h4>

                                                <small>By: Michael Cundiff</small>
                                                <div class="lh-1 mt-3">
                                                        <span class="align-text-top">
                                                            <span class="fs-6">
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                            </span>
                                                        </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6">(9,300)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col">
                                                        <h5 class="mb-0">Free</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <a href="home-academy.html#" class="text-inherit">
                                                            <i class="fas fa-shopping-cart text-primary align-middle me-2"></i>
                                                            Get Enrolled
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <!-- Card -->
                                        <div class="card card-hover">
                                            <a href="https://geeksui.codescandy.com/geeks/pages/course-single.html"><img src="../../assets/images/course/course-angular.jpg" alt="course" class="card-img-top" /></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="badge bg-danger-soft">Advance</span>
                                                    <a href="home-academy.html#" class="fs-5"><i class="fa-regular fa-heart align-middle"></i></a>
                                                </div>
                                                <h4 class="mb-2 text-truncate-line-2"><a href="https://geeksui.codescandy.com/geeks/pages/course-single.html" class="text-inherit">Angular - the complete guide for beginner</a></h4>

                                                <small>By: Jeffrey McCoy</small>
                                                <div class="lh-1 mt-3">
                                                        <span class="align-text-top">
                                                            <span class="fs-6">
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                            </span>
                                                        </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6">(8,890)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col">
                                                        <h5 class="mb-0">$49.00</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <a href="home-academy.html#" class="text-inherit">
                                                            <i class="fas fa-shopping-cart text-primary align-middle me-2"></i>
                                                            Get Enrolled
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <!-- Card -->
                                        <div class="card card-hover">
                                            <a href="https://geeksui.codescandy.com/geeks/pages/course-single.html"><img src="../../assets/images/course/course-javascript.jpg" alt="course" class="card-img-top" /></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="badge bg-info-soft">Intermediate</span>
                                                    <a href="home-academy.html#" class="fs-5"><i class="fa-regular fa-heart align-middle"></i></a>
                                                </div>
                                                <h4 class="mb-2 text-truncate-line-2"><a href="https://geeksui.codescandy.com/geeks/pages/course-single.html" class="text-inherit">How to easily create a website with JavaScript</a></h4>

                                                <small>By: Claire Evans</small>
                                                <div class="lh-1 mt-3">
                                                        <span class="align-text-top">
                                                            <span class="fs-6">
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                            </span>
                                                        </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6">(9,300)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col">
                                                        <h5 class="mb-0">$39.00</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <a href="home-academy.html#" class="text-inherit">
                                                            <i class="fas fa-shopping-cart text-primary align-middle me-2"></i>
                                                            Get Enrolled
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <!-- Card -->
                                        <div class="card card-hover">
                                            <a href="https://geeksui.codescandy.com/geeks/pages/course-single.html"><img src="../../assets/images/course/course-css.jpg" alt="course" class="card-img-top" /></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="badge bg-danger-soft">Beginner</span>
                                                    <a href="home-academy.html#" class="fs-5"><i class="fa-regular fa-heart align-middle"></i></a>
                                                </div>
                                                <h4 class="mb-2 text-truncate-line-2">
                                                    <a href="https://geeksui.codescandy.com/geeks/pages/course-single.html" class="text-inherit">CSS: ultimate CSS course from beginner to advanced</a>
                                                </h4>

                                                <small>By: Carolyn Welborn</small>
                                                <div class="lh-1 mt-3">
                                                        <span class="align-text-top">
                                                            <span class="fs-6">
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                            </span>
                                                        </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6">(8,890)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col">
                                                        <h5 class="mb-0">$30.00</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <a href="home-academy.html#" class="text-inherit">
                                                            <i class="fas fa-shopping-cart text-primary align-middle me-2"></i>
                                                            Get Enrolled
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <!-- Card -->
                                        <div class="card card-hover">
                                            <a href="https://geeksui.codescandy.com/geeks/pages/course-single.html"><img src="../../assets/images/course/course-gatsby.jpg" alt="course" class="card-img-top" /></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="badge bg-info-soft">Intermediate</span>
                                                    <a href="home-academy.html#" class="fs-5"><i class="fa-regular fa-heart align-middle"></i></a>
                                                </div>
                                                <h4 class="mb-2 text-truncate-line-2"><a href="https://geeksui.codescandy.com/geeks/pages/course-single.html" class="text-inherit">The Gatsby Course: build web application</a></h4>

                                                <small>By: Floyd Amall</small>
                                                <div class="lh-1 mt-3">
                                                        <span class="align-text-top">
                                                            <span class="fs-6">
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                            </span>
                                                        </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6">(13,245)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col">
                                                        <h5 class="mb-0">$34.00</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <a href="home-academy.html#" class="text-inherit">
                                                            <i class="fas fa-shopping-cart text-primary align-middle me-2"></i>
                                                            Get Enrolled
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-health" role="tabpanel" aria-labelledby="pills-health-tab">
                                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                                    <div class="col">
                                        <!-- Card -->
                                        <div class="card card-hover">
                                            <a href="https://geeksui.codescandy.com/geeks/pages/course-single.html"><img src="../../assets/images/course/course-python.jpg" alt="course" class="card-img-top" /></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="badge bg-success-soft">Beginner</span>
                                                    <a href="home-academy.html#" class="fs-5"><i class="fa-regular fa-heart align-middle"></i></a>
                                                </div>
                                                <h4 class="mb-2 text-truncate-line-2"><a href="https://geeksui.codescandy.com/geeks/pages/course-single.html" class="text-inherit">The Python Course: build web application</a></h4>

                                                <small>By: Douglas Howell</small>
                                                <div class="lh-1 mt-3">
                                                        <span class="align-text-top">
                                                            <span class="fs-6">
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                            </span>
                                                        </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6">(13,245)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col">
                                                        <h5 class="mb-0">$19.00</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <a href="home-academy.html#" class="text-inherit">
                                                            <i class="fas fa-shopping-cart text-primary align-middle me-2"></i>
                                                            Get Enrolled
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <!-- Card -->
                                        <div class="card card-hover">
                                            <a href="https://geeksui.codescandy.com/geeks/pages/course-single.html"><img src="../../assets/images/course/course-wordpress.jpg" alt="course" class="card-img-top" /></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="badge bg-danger-soft">Advance</span>
                                                    <a href="home-academy.html#" class="fs-5"><i class="fa-regular fa-heart align-middle"></i></a>
                                                </div>
                                                <h4 class="mb-2 text-truncate-line-2">
                                                    <a href="https://geeksui.codescandy.com/geeks/pages/course-single.html" class="text-inherit">WordPress: introduction to wordpress for beginners</a>
                                                </h4>

                                                <small>By: Victor Elliott</small>
                                                <div class="lh-1 mt-3">
                                                        <span class="align-text-top">
                                                            <span class="fs-6">
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                            </span>
                                                        </span>
                                                    <span class="text-warning">5</span>
                                                    <span class="fs-6">(9,300)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col">
                                                        <h5 class="mb-0">$39.00</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <a href="home-academy.html#" class="text-inherit">
                                                            <i class="fas fa-shopping-cart text-primary align-middle me-2"></i>
                                                            Get Enrolled
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <!-- Card -->
                                        <div class="card card-hover">
                                            <a href="https://geeksui.codescandy.com/geeks/pages/course-single.html"><img src="../../assets/images/course/course-react.jpg" alt="course" class="card-img-top" /></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="badge bg-info-soft">Intermediate</span>
                                                    <a href="home-academy.html#" class="fs-5"><i class="fa-regular fa-heart align-middle"></i></a>
                                                </div>
                                                <h4 class="mb-2 text-truncate-line-2"><a href="https://geeksui.codescandy.com/geeks/pages/course-single.html" class="text-inherit">How to easily create a website with React</a></h4>
                                                <!-- List -->
                                                <small>By: Morris Mccoy</small>
                                                <div class="lh-1 mt-3">
                                                        <span class="align-text-top">
                                                            <span class="fs-6">
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                            </span>
                                                        </span>
                                                    <span class="text-warning">3.5</span>
                                                    <span class="fs-6">(7,700)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col">
                                                        <h5 class="mb-0">$29.00</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <a href="home-academy.html#" class="text-inherit">
                                                            <i class="fas fa-shopping-cart text-primary align-middle me-2"></i>
                                                            Get Enrolled
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <!-- Card -->
                                        <div class="card card-hover">
                                            <a href="https://geeksui.codescandy.com/geeks/pages/course-single.html"><img src="../../assets/images/course/course-graphql.jpg" alt="course" class="card-img-top" /></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="badge bg-success-soft">Beginner</span>
                                                    <a href="home-academy.html#" class="fs-5"><i class="fa-regular fa-heart align-middle"></i></a>
                                                </div>
                                                <h4 class="mb-2 text-truncate-line-2"><a href="https://geeksui.codescandy.com/geeks/pages/course-single.html" class="text-inherit">GraphQL: introduction to graphQL for beginners</a></h4>

                                                <small>By: Michael Cundiff</small>
                                                <div class="d-flex align-text-top mt-3">
                                                        <span class="fs-6">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                            </svg>
                                                        </span>

                                                    <span class="text-warning">4</span>
                                                    <span class="fs-6">(9,300)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col">
                                                        <h5 class="mb-0">Free</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <a href="home-academy.html#" class="text-inherit">
                                                            <i class="fas fa-shopping-cart text-primary align-middle me-2"></i>
                                                            Get Enrolled
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <!-- Card -->
                                        <div class="card card-hover">
                                            <a href="https://geeksui.codescandy.com/geeks/pages/course-single.html"><img src="../../assets/images/course/course-javascript.jpg" alt="course" class="card-img-top" /></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="badge bg-info-soft">Intermediate</span>
                                                    <a href="home-academy.html#" class="fs-5"><i class="fa-regular fa-heart align-middle"></i></a>
                                                </div>
                                                <h4 class="mb-2 text-truncate-line-2"><a href="https://geeksui.codescandy.com/geeks/pages/course-single.html" class="text-inherit">How to easily create a website with JavaScript</a></h4>

                                                <small>By: Claire Evans</small>
                                                <div class="d-flex align-text-top mt-3">
                                                        <span class="fs-6">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                            </svg>
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-star-fill text-warning" viewBox="0 0 16 16">
                                                                <path
                                                                    d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                            </svg>
                                                        </span>
                                                    <span class="text-warning">3.5</span>
                                                    <span class="fs-6">(9,300)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col">
                                                        <h5 class="mb-0">$39.00</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <a href="home-academy.html#" class="text-inherit">
                                                            <i class="fas fa-shopping-cart text-primary align-middle me-2"></i>
                                                            Get Enrolled
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <!-- Card -->
                                        <div class="card card-hover">
                                            <a href="https://geeksui.codescandy.com/geeks/pages/course-single.html"><img src="../../assets/images/course/course-css.jpg" alt="course" class="card-img-top" /></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="badge bg-danger-soft">Beginner</span>
                                                    <a href="home-academy.html#" class="fs-5"><i class="fa-regular fa-heart align-middle"></i></a>
                                                </div>
                                                <h4 class="mb-2 text-truncate-line-2">
                                                    <a href="https://geeksui.codescandy.com/geeks/pages/course-single.html" class="text-inherit">CSS: ultimate CSS course from beginner to advanced</a>
                                                </h4>

                                                <small>By: Carolyn Welborn</small>
                                                <div class="lh-1 mt-3">
                                                        <span class="align-text-top">
                                                            <span class="fs-6">
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                            </span>
                                                        </span>
                                                    <span class="text-warning">5</span>
                                                    <span class="fs-6">(8,890)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col">
                                                        <h5 class="mb-0">$30.00</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <a href="home-academy.html#" class="text-inherit">
                                                            <i class="fas fa-shopping-cart text-primary align-middle me-2"></i>
                                                            Get Enrolled
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <!-- Card -->
                                        <div class="card card-hover">
                                            <a href="https://geeksui.codescandy.com/geeks/pages/course-single.html"><img src="../../assets/images/course/course-gatsby.jpg" alt="course" class="card-img-top" /></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="badge bg-info-soft">Intermediate</span>
                                                    <a href="home-academy.html#" class="fs-5"><i class="fa-regular fa-heart align-middle"></i></a>
                                                </div>
                                                <h4 class="mb-2 text-truncate-line-2"><a href="https://geeksui.codescandy.com/geeks/pages/course-single.html" class="text-inherit">The Gatsby Course: build web application</a></h4>

                                                <small>By: Floyd Amall</small>
                                                <div class="lh-1 mt-3">
                                                        <span class="align-text-top">
                                                            <span class="fs-6">
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                            </span>
                                                        </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6">(13,245)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col">
                                                        <h5 class="mb-0">$34.00</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <a href="home-academy.html#" class="text-inherit">
                                                            <i class="fas fa-shopping-cart text-primary align-middle me-2"></i>
                                                            Get Enrolled
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <!-- Card -->
                                        <div class="card card-hover">
                                            <a href="https://geeksui.codescandy.com/geeks/pages/course-single.html"><img src="../../assets/images/course/course-angular.jpg" alt="course" class="card-img-top" /></a>
                                            <!-- Card Body -->
                                            <div class="card-body">
                                                <div class="d-flex justify-content-between align-items-center mb-3">
                                                    <span class="badge bg-danger-soft">Advance</span>
                                                    <a href="home-academy.html#" class="fs-5"><i class="fa-regular fa-heart align-middle"></i></a>
                                                </div>
                                                <h4 class="mb-2 text-truncate-line-2"><a href="https://geeksui.codescandy.com/geeks/pages/course-single.html" class="text-inherit">Angular - the complete guide for beginner</a></h4>

                                                <small>By: Jeffrey McCoy</small>
                                                <div class="lh-1 mt-3">
                                                        <span class="align-text-top">
                                                            <span class="fs-6">
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                                <svg
                                                                    xmlns="http://www.w3.org/2000/svg"
                                                                    width="12"
                                                                    height="12"
                                                                    fill="currentColor"
                                                                    class="bi bi-star-fill text-warning"
                                                                    viewBox="0 0 16 16">
                                                                    <path
                                                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"></path>
                                                                </svg>
                                                            </span>
                                                        </span>
                                                    <span class="text-warning">4.5</span>
                                                    <span class="fs-6">(8,890)</span>
                                                </div>
                                            </div>
                                            <!-- Card Footer -->
                                            <div class="card-footer">
                                                <div class="row align-items-center g-0">
                                                    <div class="col">
                                                        <h5 class="mb-0">$49.00</h5>
                                                    </div>

                                                    <div class="col-auto">
                                                        <a href="home-academy.html#" class="text-inherit">
                                                            <i class="fas fa-shopping-cart text-primary align-middle me-2"></i>
                                                            Get Enrolled
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section -->
        <section class="my-8 py-lg-8">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row align-items-center bg-primary gx-0 rounded-3">
                    <!-- col -->
                    <div class="col-lg-6 col-12 d-none d-lg-block">
                        <div class="d-flex justify-content-center">
                            <!-- img -->
                            <div class="position-relative">
                                <img src="{{asset('images/png/cta-instructor-1.png')}}" alt="image" class="img-fluid mt-n8" />
                                <div class="ms-n8 position-absolute bottom-0 start-0 mb-6">
                                    <img src="{{asset('images/svg/dollor.svg')}}" alt="dollor" />
                                </div>
                                <!-- img -->
                                <div class="me-n4 position-absolute top-0 end-0">
                                    <img src="{{asset('images/svg/graph.svg')}}" alt="graph" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-12">
                        <div class="text-white p-5 p-lg-0">
                            <!-- text -->
                            <h2 class="h1 text-white">Become an instructor today</h2>
                            <p class="mb-0">Instructors from around the world teach millions of students on Geeks. We provide the tools and skills to teach what you love.</p>
                            <a href="home-academy.html#" class="btn btn-white mt-4">Start Teaching Today</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="pb-lg-8 pb-6">
            <div class="container mb-lg-8">
                <div class="row">
                    <div class="col-xl-6 offset-xl-3 col-md-12 col-12">
                        <div class="text-center mb-lg-8 mb-6">
                            <h2 class="h1 fw-bold">
                                Building strong
                                <u class="text-warning"><span class="text-primary">foundational skills</span></u>
                            </h2>
                            <p class="lead mb-0">Online courses certification section design for showcase your certificate program features.</p>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-xl-5 col-lg-6 col-md-12 col-12">
                        <div class="mb-6 mb-lg-0">
                            <div class="mb-2">
                                <img src="{{asset('images/education/certificate.jpg')}}" alt="certificate" class="img-fluid w-100">
                            </div>
                            <div class="d-flex">
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="var(--gk-primary)" class="bi bi-patch-check-fill" viewBox="0 0 16 16">
                                            <path d="M10.067.87a2.89 2.89 0 0 0-4.134 0l-.622.638-.89-.011a2.89 2.89 0 0 0-2.924 2.924l.01.89-.636.622a2.89 2.89 0 0 0 0 4.134l.637.622-.011.89a2.89 2.89 0 0 0 2.924 2.924l.89-.01.622.636a2.89 2.89 0 0 0 4.134 0l.622-.637.89.011a2.89 2.89 0 0 0 2.924-2.924l-.01-.89.636-.622a2.89 2.89 0 0 0 0-4.134l-.637-.622.011-.89a2.89 2.89 0 0 0-2.924-2.924l-.89.01-.622-.636zm.287 5.984-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708.708z"></path>
                                        </svg>
                                    </span>
                                <span class="ms-2">Completion certificate awarded on every course completion</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 offset-xl-1 col-lg-6 col-md-12 col-12">
                        <div class="row row-cols-2">
                            <div class="col">
                                <div class="mb-4 mb-xl-6">
                                    <div class="mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="var(--gk-primary)" class="bi bi-trophy" viewBox="0 0 16 16">
                                            <path d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5c0 .538-.012 1.05-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33.076 33.076 0 0 1 2.5.5zm.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935zm10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935zM3.504 1c.007.517.026 1.006.056 1.469.13 2.028.457 3.546.87 4.667C5.294 9.48 6.484 10 7 10a.5.5 0 0 1 .5.5v2.61a1 1 0 0 1-.757.97l-1.426.356a.5.5 0 0 0-.179.085L4.5 15h7l-.638-.479a.501.501 0 0 0-.18-.085l-1.425-.356a1 1 0 0 1-.757-.97V10.5A.5.5 0 0 1 9 10c.516 0 1.706-.52 2.57-2.864.413-1.12.74-2.64.87-4.667.03-.463.049-.952.056-1.469H3.504z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4>Learn from Industry Experts</h4>
                                        <p>Lorem ipsum dolor sit amet, conse ctetur adipisc amus ac iaculis arcu.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-lg-6 mb-4">
                                    <div class="mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="var(--gk-primary)" class="bi bi-star" viewBox="0 0 16 16">
                                            <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4>Free Resources</h4>
                                        <p>Pellentesque sagittis placerat mollii purus onvallis venenatis asapien.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="mb-4 mb-md-0">
                                    <div class="mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="var(--gk-primary)" class="bi bi-shield-lock" viewBox="0 0 16 16">
                                            <path d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z"></path>
                                            <path d="M9.5 6.5a1.5 1.5 0 0 1-1 1.415l.385 1.99a.5.5 0 0 1-.491.595h-.788a.5.5 0 0 1-.49-.595l.384-1.99a1.5 1.5 0 1 1 2-1.415z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4>Learn Anytime, Anywhere</h4>
                                        <p>Integer ultricies lorem nec erat fau euismod ipsum nislnec leo iaculis</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div>
                                    <div class="mb-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="var(--gk-primary)" class="bi bi-nut" viewBox="0 0 16 16">
                                            <path d="m11.42 2 3.428 6-3.428 6H4.58L1.152 8 4.58 2h6.84zM4.58 1a1 1 0 0 0-.868.504l-3.428 6a1 1 0 0 0 0 .992l3.428 6A1 1 0 0 0 4.58 15h6.84a1 1 0 0 0 .868-.504l3.429-6a1 1 0 0 0 0-.992l-3.429-6A1 1 0 0 0 11.42 1H4.58z"></path>
                                            <path d="M6.848 5.933a2.5 2.5 0 1 0 2.5 4.33 2.5 2.5 0 0 0-2.5-4.33zm-1.78 3.915a3.5 3.5 0 1 1 6.061-3.5 3.5 3.5 0 0 1-6.062 3.5z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h4>Skill-based Learning</h4>
                                        <p>Duis sed sollicitudin narcu mi, faucibus in sapien non, auctor placerat arcu.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-8 bg-gray-200" style="background: url({{asset('images/background/course-graphics.svg')}}) no-repeat; background-size: cover; background-position: top center">
            <div class="container my-lg-8">
                <!-- row -->
                <div class="row justify-content-center text-center">
                    <div class="col-md-9 col-12">
                        <!-- heading -->
                        <h2 class="display-4">Join more than 1 million learners worldwide</h2>
                        <p class="lead px-lg-8 mb-6">Effective learning starts with assessment. Learning a new skill is hard work—Signal makes it easier.</p>
                        <!-- button -->
                        <div class="d-grid d-md-block">
                            <a href="../sign-up.html" class="btn btn-primary mb-2 mb-md-0">Start Learning for Free</a>
                            <a href="../sign-up.html" class="btn btn-info">Geeks for Business</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section -->
    </main>
@endsection
