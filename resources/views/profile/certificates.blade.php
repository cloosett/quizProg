@extends('layouts.app')

@section('content')
    @include('components.profile-sidebar')

    <div class="db-content">
        <div class="container mb-4">
            <div class="row mb-5">
                <div class="col-12">
                    <div class="d-flex flex-row align-items-center justify-content-between">
                        <h1 class="h2 mb-0">My Certificate</h1>

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
            <div class="row mb-7 gy-4 gy-lg-0">
                <div class="col-xl-8 col-12">
                    <div class="d-flex flex-column gap-3">
                        <div>
                            <h2 class="mb-0 h3">Certifications Earned</h2>
                        </div>
                        <div class="d-flex flex-column gap-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center gap-3 gap-xl-0">
                                        <div class="col-xl-7 col-12">
                                            <div class="d-flex flex-row gap-3 align-items-center">
                                                <div>
                                                    <img src="../assets/images/svg/certificate-1.svg" alt="certificate">
                                                </div>
                                                <div class="d-flex flex-column gap-1 gap-xxl-0">
                                                    <h4 class="mb-0">HTML Basics - Certificate</h4>
                                                    <div class="fs-6">
                              <span>
                                <span>Completion Date:</span>
                                <span class="fw-medium">10 Dec, 2024</span>
                              </span>
                                                        <span>
                                <span>Issued on:</span>
                                <span class="fw-medium">12 Dec, 2024</span>
                              </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-5 col-12">
                                            <div class="d-flex flex-row gap-2 justify-content-xl-end">
                                                <a href="#!" class="btn btn-outline-secondary">View</a>
                                                <a href="#!" class="btn btn-outline-primary">Download Certificate</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center gap-3 gap-xl-0">
                                        <div class="col-xl-7 col-12">
                                            <div class="d-flex flex-row gap-3 align-items-center">
                                                <div>
                                                    <img src="../assets/images/svg/certificate-2.svg" alt="certificate">
                                                </div>
                                                <div class="d-flex flex-column gap-1 gap-xxl-0">
                                                    <h4 class="mb-0">Advanced Javascript</h4>
                                                    <div class="fs-6">
                              <span>
                                <span>Completion Date:</span>
                                <span class="fw-medium">10 Dec, 2024</span>
                              </span>
                                                        <span>
                                <span>Issued on:</span>
                                <span class="fw-medium">12 Dec, 2024</span>
                              </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-5 col-12">
                                            <div class="d-flex flex-row gap-2 justify-content-xl-end">
                                                <a href="#!" class="btn btn-outline-secondary">View</a>
                                                <a href="#!" class="btn btn-outline-primary">Download Certificate</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center gap-3 gap-xl-0">
                                        <div class="col-xl-7 col-12">
                                            <div class="d-flex flex-row gap-3 align-items-center">
                                                <div>
                                                    <img src="../assets/images/svg/certificate-3.svg" alt="certificate">
                                                </div>
                                                <div class="d-flex flex-column gap-1 gap-xxl-0">
                                                    <h4 class="mb-0">Advanced React</h4>
                                                    <div class="fs-6">
                              <span>
                                <span>Completion Date:</span>
                                <span class="fw-medium">10 Dec, 2024</span>
                              </span>
                                                        <span>
                                <span>Issued on:</span>
                                <span class="fw-medium">12 Dec, 2024</span>
                              </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-5 col-12">
                                            <div class="d-flex flex-row gap-2 justify-content-xl-end">
                                                <a href="#!" class="btn btn-outline-secondary">View</a>
                                                <a href="#!" class="btn btn-outline-primary">Download Certificate</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-12">
                    <div class="d-flex flex-column gap-3">
                        <div>
                            <h3 class="mb-0">Skills Achieved</h3>
                        </div>
                        <div class="card">
                            <div class="card-body d-flex flex-row gap-2 flex-wrap">
                                <a href="#!" class="btn btn-tag btn-sm">Data Analysis</a>
                                <a href="#!" class="btn btn-tag btn-sm">Python Programming</a>
                                <a href="#!" class="btn btn-tag btn-sm">HTML/CSS</a>
                                <a href="#!" class="btn btn-tag btn-sm">JavaScript</a>
                                <a href="#!" class="btn btn-tag btn-sm">ReactJs</a>
                                <a href="#!" class="btn btn-tag btn-sm">Project Management</a>
                                <a href="#!" class="btn btn-tag btn-sm">Vuejs</a>
                                <a href="#!" class="btn btn-tag btn-sm">Python</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gy-4">
                <div class="col-12">
                    <h3 class="mb-0">Earn the New Certification</h3>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card card-lift">
                        <div class="card-body d-flex flex-column gap-4">
                            <div>
                                <img src="../assets/images/svg/certificate-4.svg" alt="certificate">
                            </div>
                            <div>
                                <h4 class="mb-0">Advanced Front End Development</h4>
                                <span>Associate Certification</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card card-lift">
                        <div class="card-body d-flex flex-column gap-4">
                            <div>
                                <img src="../assets/images/svg/certificate-5.svg" alt="certificate">
                            </div>
                            <div>
                                <h4 class="mb-0">Full Stack Development</h4>
                                <span>Expert Certification</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="card card-lift">
                        <div class="card-body d-flex flex-column gap-4">
                            <div>
                                <img src="../assets/images/svg/certificate-6.svg" alt="certificate">
                            </div>
                            <div>
                                <h4 class="mb-0">Advanced Python Programming</h4>
                                <span>Associate Certification</span>
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
