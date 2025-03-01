@extends('layouts.app')

@section('content')
    @include('components.profile-sidebar')

    <div class="db-content">
        <div class="container mb-4">
            <div class="row mb-5">
                <div class="col-12">
                    <div class="d-flex flex-row align-items-center justify-content-between">
                        <h1 class="h2 mb-0">My Learning</h1>

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
            <div class="row g-4 mb-5">
                <div class="col-12">
                    <div class="d-flex flex-row align-items-center gap-2 lh-1">
                        <div>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_8175_5628)">
                                    <path d="M8.211 2.0467C8.14491 2.01594 8.07289 2 8 2C7.9271 2 7.85508 2.01594 7.789 2.0467L0.288996 5.5467C0.200678 5.58793 0.126334 5.65406 0.0751066 5.73698C0.0238794 5.81989 -0.00199738 5.91597 0.000658795 6.0134C0.00331497 6.11083 0.0343882 6.20536 0.0900571 6.28536C0.145726 6.36536 0.223563 6.42735 0.313996 6.4637L7.814 9.4637C7.93338 9.51155 8.06661 9.51155 8.186 9.4637L14 7.1397V12.9997C13.7348 12.9997 13.4804 13.1051 13.2929 13.2926C13.1054 13.4801 13 13.7345 13 13.9997V15.9997H16V13.9997C16 13.7345 15.8946 13.4801 15.7071 13.2926C15.5196 13.1051 15.2652 12.9997 15 12.9997V6.7387L15.686 6.4637C15.7764 6.42735 15.8543 6.36536 15.9099 6.28536C15.9656 6.20536 15.9967 6.11083 15.9993 6.0134C16.002 5.91597 15.9761 5.81989 15.9249 5.73698C15.8737 5.65406 15.7993 5.58793 15.711 5.5467L8.211 2.0467ZM8 8.4597L1.758 5.9647L8 3.0517L14.242 5.9647L8 8.4597Z" fill="#64748B"></path>
                                    <path d="M4.176 9.0321C4.11162 9.00784 4.04292 8.99714 3.97421 9.00065C3.9055 9.00416 3.83825 9.02182 3.77668 9.05251C3.7151 9.08321 3.66053 9.12628 3.61636 9.17903C3.57219 9.23179 3.53939 9.29309 3.52 9.3591L3.02 11.0591C2.98498 11.1784 2.9957 11.3066 3.05006 11.4184C3.10442 11.5303 3.19853 11.6179 3.314 11.6641L7.814 13.4641C7.93339 13.5119 8.06662 13.5119 8.186 13.4641L12.686 11.6641C12.8015 11.6179 12.8956 11.5303 12.9499 11.4184C13.0043 11.3066 13.015 11.1784 12.98 11.0591L12.48 9.3591C12.4606 9.29309 12.4278 9.23179 12.3836 9.17903C12.3395 9.12628 12.2849 9.08321 12.2233 9.05251C12.1618 9.02182 12.0945 9.00416 12.0258 9.00065C11.9571 8.99714 11.8884 9.00784 11.824 9.0321L8 10.4661L4.176 9.0321ZM4.108 10.9051L4.328 10.1571L7.824 11.4681C7.93746 11.5108 8.06255 11.5108 8.176 11.4681L11.672 10.1571L11.892 10.9051L8 12.4601L4.108 10.9051Z" fill="#64748B"></path>
                                </g>
                                <defs>
                                    <clipPath id="clip0_8175_5628">
                                        <rect width="16" height="16" fill="white"></rect>
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <h2 class="mb-0">Learning</h2>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-12">
                    <!-- Card -->
                    <div class="card">
                        <a href="../pages/learning-single.html"><img src="../assets/images/course/course-html.jpg" alt="course" class="card-img-top"></a>
                        <!-- Card body -->
                        <div class="card-body d-flex flex-column gap-3">
                            <h3 class="h4 mb-0"><a href="../pages/learning-single.html" class="text-inherit">HTML Courses</a></h3>

                            <div class="d-flex flex-column gap-2">
                                <div class="d-flex flex-row justify-content-between align-items-center">
                                    <span class="text-truncate">12 of 12 lessons completed...</span>
                                    <span class="fw-bold">100%</span>
                                </div>
                                <div class="progress" style="height: 6px">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div>
                                <span class="badge bg-success-subtle border border-success rounded-pill text-success">Completed</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-12">
                    <!-- Card -->
                    <div class="card">
                        <a href="#"><img src="../assets/images/course/course-javascript.jpg" alt="course" class="card-img-top"></a>
                        <!-- Card body -->
                        <div class="card-body d-flex flex-column gap-3">
                            <h3 class="h4 mb-0"><a href="#" class="text-inherit">Javascript Courses</a></h3>

                            <div class="d-flex flex-column gap-2">
                                <div class="d-flex flex-row justify-content-between align-items-center">
                                    <span class="text-truncate">1 of 12 lessons completed...</span>
                                    <span class="fw-bold">20%</span>
                                </div>
                                <div class="progress" style="height: 6px">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 35%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div>
                                <span class="badge bg-warning-subtle border border-warning rounded-pill text-warning">In Process</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-12">
                    <!-- Card -->
                    <div class="card">
                        <a href="#"><img src="../assets/images/course/course-python.jpg" alt="course" class="card-img-top"></a>
                        <!-- Card body -->
                        <div class="card-body d-flex flex-column gap-3">
                            <h3 class="h4 mb-0"><a href="#" class="text-inherit">Learn Python</a></h3>

                            <div class="d-flex flex-column gap-2">
                                <div class="d-flex flex-row justify-content-between align-items-center">
                                    <span class="text-truncate">0 of 15 lessons completed...</span>
                                    <span class="fw-bold">0%</span>
                                </div>
                                <div class="progress" style="height: 6px">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div>
                                <span class="badge bg-light-subtle border rounded-pill text-secondary">Not Started</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-12">
                    <!-- Card -->
                    <div class="card">
                        <a href="#"><img src="../assets/images/course/course-react.jpg" alt="course" class="card-img-top"></a>
                        <!-- Card body -->
                        <div class="card-body d-flex flex-column gap-3">
                            <h3 class="h4 mb-0"><a href="#" class="text-inherit">React Fundamental</a></h3>

                            <div class="d-flex flex-column gap-2">
                                <div class="d-flex flex-row justify-content-between align-items-center">
                                    <span class="text-truncate">0 of 10 lessons completed...</span>
                                    <span class="fw-bold">0%</span>
                                </div>
                                <div class="progress" style="height: 6px">
                                    <div class="progress-bar bg-success" role="progressbar" style="width: 35%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <div>
                                <span class="badge bg-light-subtle border rounded-pill text-secondary">Not Started</span>
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
