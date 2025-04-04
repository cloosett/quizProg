@extends('layouts.admin')

@section('content')
    <section class="container-fluid p-4">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div
                    class="border-bottom pb-3 mb-3 d-flex flex-column flex-lg-row gap-3 justify-content-between align-items-lg-center">
                    <div>
                        <h1 class="mb-0 h2 fw-bold">Dashboard</h1>
                    </div>
                    <div class="d-flex gap-3">
                        <div class="input-group">
                            <input class="form-control flatpickr flatpickr-input" type="text"
                                   placeholder="Select Date" aria-describedby="basic-addon2" readonly="readonly">

                            <span class="input-group-text" id="basic-addon2"><i class="fe fe-calendar"></i></span>
                        </div>
                        <a href="#" class="btn btn-primary">Setting</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row gy-4 mb-4">
            <div class="col-xl-3 col-lg-6 col-md-12 col-12">
                <!-- Card -->
                <div class="card">
                    <!-- Card body -->
                    <div class="card-body d-flex flex-column gap-3">
                        <div class="d-flex align-items-center justify-content-between lh-1">
                            <div>
                                <span class="fs-6 text-uppercase fw-semibold ls-md">Sales</span>
                            </div>
                            <div>
                                <span class="fe fe-shopping-bag fs-3 text-primary"></span>
                            </div>
                        </div>
                        <div class="d-flex flex-column gap-1">
                            <h2 class="fw-bold mb-0">$10,800</h2>
                            <div class="d-flex flex-row gap-2">
                      <span class="text-success fw-semibold">
                        <i class="fe fe-trending-up me-1"></i>
                        +20.9$
                      </span>

                                <span class="fw-medium">Number of sales</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-12 col-12">
                <!-- Card -->
                <div class="card">
                    <!-- Card body -->
                    <div class="card-body d-flex flex-column gap-3">
                        <div class="d-flex align-items-center justify-content-between lh-1">
                            <div>
                                <span class="fs-6 text-uppercase fw-semibold ls-md">Courses</span>
                            </div>
                            <div>
                                <span class="fe fe-book-open fs-3 text-primary"></span>
                            </div>
                        </div>
                        <div class="d-flex flex-column gap-1">
                            <h2 class="fw-bold mb-0">2,456</h2>
                            <div class="d-flex flex-row gap-2">
                                <span class="text-danger fw-semibold">120+</span>
                                <span class="fw-medium">Number of pending</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-12 col-12">
                <!-- Card -->
                <div class="card">
                    <!-- Card body -->
                    <div class="card-body d-flex flex-column gap-3">
                        <div class="d-flex align-items-center justify-content-between lh-1">
                            <div>
                                <span class="fs-6 text-uppercase fw-semibold ls-md">Students</span>
                            </div>
                            <div>
                                <span class="fe fe-users fs-3 text-primary"></span>
                            </div>
                        </div>
                        <div class="d-flex flex-column gap-1">
                            <h2 class="fw-bold mb-0">1,22,456</h2>
                            <div class="d-flex flex-row gap-2">
                      <span class="text-success fw-semibold">
                        <i class="fe fe-trending-up me-1"></i>
                        +1200
                      </span>
                                <span class="fw-medium">Students</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-12 col-12">
                <!-- Card -->
                <div class="card">
                    <!-- Card body -->
                    <div class="card-body d-flex flex-column gap-3">
                        <div class="d-flex align-items-center justify-content-between lh-1">
                            <div>
                                <span class="fs-6 text-uppercase fw-semibold ls-md">Instructor</span>
                            </div>
                            <div>
                                <span class="fe fe-user-check fs-3 text-primary"></span>
                            </div>
                        </div>
                        <div class="d-flex flex-column gap-1">
                            <h2 class="fw-bold mb-0">22,786</h2>
                            <div class="d-flex flex-row gap-1">
                      <span class="text-success fw-semibold">
                        <i class="fe fe-trending-up me-1"></i>
                        +200
                      </span>
                                <span class="ms-1 fw-medium">Instructor</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row gy-4">
            <div class="col-xl-4 col-lg-12 col-md-12 col-12">
                <!-- Card -->
                <div class="card h-100">
                    <!-- Card header -->
                    <div class="card-header d-flex align-items-center justify-content-between card-header-height">
                        <h4 class="mb-0">Popular Instructor</h4>
                        <a href="#" class="btn btn-outline-secondary btn-sm">View all</a>
                    </div>
                    <!-- Card body -->
                    <div class="card-body">
                        <!-- List group -->
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item px-0 pt-0">
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="avatar avatar-md avatar-indicators avatar-offline">
                                            <img alt="avatar"
                                                 src="Dashboard%20Geeks%20-%20Bootstrap%205%20Admin%20Dashboard%20Template_files/avatar-1.jpg"
                                                 class="rounded-circle">
                                        </div>
                                    </div>
                                    <div class="col ms-n3">
                                        <h4 class="mb-0 h5">Rob Percival</h4>
                                        <span class="me-2 fs-6">
                            <span class="text-dark me-1 fw-semibold">42</span>
                            Courses
                          </span>
                                        <span class="me-2 fs-6">
                            <span class="text-dark me-1 fw-semibold">1,10,124</span>
                            Students
                          </span>
                                        <span class="fs-6">
                            <span class="text-dark me-1 fw-semibold">32,000</span>
                            Reviews
                          </span>
                                    </div>
                                    <div class="col-auto">
                          <span class="dropdown dropstart">
                            <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#" role="button"
                               id="courseDropdown7" data-bs-toggle="dropdown" data-bs-offset="-20,20"
                               aria-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown7">
                              <span class="dropdown-header">Settings</span>
                              <a class="dropdown-item" href="#">
                                <i class="fe fe-edit dropdown-item-icon"></i>
                                Edit
                              </a>
                              <a class="dropdown-item" href="#">
                                <i class="fe fe-trash dropdown-item-icon"></i>
                                Remove
                              </a>
                            </span>
                          </span>
                                    </div>
                                </div>
                            </li>
                            <!-- List group -->
                            <li class="list-group-item px-0">
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="avatar avatar-md avatar-indicators avatar-online">
                                            <img alt="avatar"
                                                 src="Dashboard%20Geeks%20-%20Bootstrap%205%20Admin%20Dashboard%20Template_files/avatar-2.jpg"
                                                 class="rounded-circle">
                                        </div>
                                    </div>
                                    <div class="col ms-n3">
                                        <h4 class="mb-0 h5">Jose Portilla</h4>
                                        <span class="me-2 fs-6">
                            <span class="text-dark me-1 fw-semibold">12</span>
                            Courses
                          </span>
                                        <span class="me-2 fs-6">
                            <span class="text-dark me-1 fw-semibold">21,567</span>
                            Students
                          </span>
                                        <span class="fs-6">
                            <span class="text-dark me-1 fw-semibold">22,000</span>
                            Reviews
                          </span>
                                    </div>
                                    <div class="col-auto">
                          <span class="dropdown dropstart">
                            <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#" role="button"
                               id="courseDropdown8" data-bs-toggle="dropdown" data-bs-offset="-20,20"
                               aria-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown8">
                              <span class="dropdown-header">Settings</span>
                              <a class="dropdown-item" href="#">
                                <i class="fe fe-edit dropdown-item-icon"></i>
                                Edit
                              </a>
                              <a class="dropdown-item" href="#">
                                <i class="fe fe-trash dropdown-item-icon"></i>
                                Remove
                              </a>
                            </span>
                          </span>
                                    </div>
                                </div>
                            </li>
                            <!-- List group -->
                            <li class="list-group-item px-0">
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="avatar avatar-md avatar-indicators avatar-away">
                                            <img alt="avatar"
                                                 src="Dashboard%20Geeks%20-%20Bootstrap%205%20Admin%20Dashboard%20Template_files/avatar-3.jpg"
                                                 class="rounded-circle">
                                        </div>
                                    </div>
                                    <div class="col ms-n3">
                                        <h4 class="mb-0 h5">Eleanor Pena</h4>
                                        <span class="me-2 fs-6">
                            <span class="text-dark me-1 fw-semibold">32</span>
                            Courses
                          </span>
                                        <span class="me-2 fs-6">
                            <span class="text-dark me-1 fw-semibold">11,604</span>
                            Students
                          </span>
                                        <span class="fs-6">
                            <span class="text-dark me-1 fw-semibold">12,230</span>
                            Reviews
                          </span>
                                    </div>
                                    <div class="col-auto">
                          <span class="dropdown dropstart">
                            <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#" role="button"
                               id="courseDropdown9" data-bs-toggle="dropdown" data-bs-offset="-20,20"
                               aria-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown9">
                              <span class="dropdown-header">Settings</span>
                              <a class="dropdown-item" href="#">
                                <i class="fe fe-edit dropdown-item-icon"></i>
                                Edit
                              </a>
                              <a class="dropdown-item" href="#">
                                <i class="fe fe-trash dropdown-item-icon"></i>
                                Remove
                              </a>
                            </span>
                          </span>
                                    </div>
                                </div>
                            </li>
                            <!-- List group -->
                            <li class="list-group-item px-0">
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="avatar avatar-md avatar-indicators avatar-info">
                                            <img alt="avatar"
                                                 src="Dashboard%20Geeks%20-%20Bootstrap%205%20Admin%20Dashboard%20Template_files/avatar-6.jpg"
                                                 class="rounded-circle">
                                        </div>
                                    </div>
                                    <div class="col ms-n3">
                                        <h4 class="mb-0 h5">March Delson</h4>
                                        <span class="me-2 fs-6">
                            <span class="text-dark me-1 fw-semibold">23</span>
                            Courses
                          </span>
                                        <span class="me-2 fs-6">
                            <span class="text-dark me-1 fw-semibold">6,304</span>
                            Students
                          </span>
                                        <span class="fs-6">
                            <span class="text-dark me-1 fw-semibold">56,000</span>
                            Reviews
                          </span>
                                    </div>
                                    <div class="col-auto">
                          <span class="dropdown dropstart">
                            <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#" role="button"
                               id="courseDropdown10" data-bs-toggle="dropdown" data-bs-offset="-20,20"
                               aria-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown10">
                              <span class="dropdown-header">Settings</span>
                              <a class="dropdown-item" href="#">
                                <i class="fe fe-edit dropdown-item-icon"></i>
                                Edit
                              </a>
                              <a class="dropdown-item" href="#">
                                <i class="fe fe-trash dropdown-item-icon"></i>
                                Remove
                              </a>
                            </span>
                          </span>
                                    </div>
                                </div>
                            </li>
                            <!-- List group -->
                            <li class="list-group-item px-0">
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="avatar avatar-md avatar-indicators avatar-busy">
                                            <img alt="avatar"
                                                 src="Dashboard%20Geeks%20-%20Bootstrap%205%20Admin%20Dashboard%20Template_files/avatar-7.jpg"
                                                 class="rounded-circle">
                                        </div>
                                    </div>
                                    <div class="col ms-n3">
                                        <h4 class="mb-0 h5">Sina Ray</h4>
                                        <span class="me-2 fs-6">
                            <span class="text-dark me-1 fw-semibold">14</span>
                            Courses
                          </span>
                                        <span class="me-2 fs-6">
                            <span class="text-dark me-1 fw-semibold">8,000</span>
                            Students
                          </span>
                                        <span class="fs-6">
                            <span class="text-dark me-1 fw-semibold">33,000</span>
                            Reviews
                          </span>
                                    </div>
                                    <div class="col-auto">
                          <span class="dropdown dropstart">
                            <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#" role="button"
                               id="courseDropdown11" data-bs-toggle="dropdown" data-bs-offset="-20,20"
                               aria-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown11">
                              <span class="dropdown-header">Settings</span>
                              <a class="dropdown-item" href="#">
                                <i class="fe fe-edit dropdown-item-icon"></i>
                                Edit
                              </a>
                              <a class="dropdown-item" href="#">
                                <i class="fe fe-trash dropdown-item-icon"></i>
                                Remove
                              </a>
                            </span>
                          </span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-12 col-md-12 col-12">
                <!-- Card -->
                <div class="card h-100">
                    <!-- Card header -->
                    <div class="card-header d-flex align-items-center justify-content-between card-header-height">
                        <h4 class="mb-0">Recent Courses</h4>
                        <a href="#" class="btn btn-outline-secondary btn-sm">View all</a>
                    </div>
                    <!-- Card body -->
                    <div class="card-body">
                        <!-- List group flush -->
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item px-0 pt-0">
                                <div class="row flex-column flex-md-row gap-3 gap-md-0">
                                    <!-- Col -->
                                    <div class="col-md-3 col-12">
                                        <a href="#">
                                            <img
                                                src="Dashboard%20Geeks%20-%20Bootstrap%205%20Admin%20Dashboard%20Template_files/course-laravel.jpg"
                                                alt="" class="img-fluid rounded">
                                        </a>
                                    </div>
                                    <!-- Col -->
                                    <div class="col-md-8 col-10">
                                        <div class="d-flex flex-column gap-2">
                                            <a href="#">
                                                <h5 class="text-primary-hover mb-0">Revolutionize how you build the
                                                    web...</h5>
                                            </a>
                                            <div class="d-flex align-items-center gap-2">
                                                <img
                                                    src="Dashboard%20Geeks%20-%20Bootstrap%205%20Admin%20Dashboard%20Template_files/avatar-7.jpg"
                                                    alt="" class="rounded-circle avatar-xs">
                                                <span class="fs-6">Brooklyn Simmons</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Col auto -->
                                    <div class="col-1 col-auto d-flex justify-content-center">
                          <span class="dropdown dropstart">
                            <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#" role="button"
                               id="courseDropdown3" data-bs-toggle="dropdown" data-bs-offset="-20,20"
                               aria-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown3">
                              <span class="dropdown-header">Settings</span>
                              <a class="dropdown-item" href="#">
                                <i class="fe fe-edit dropdown-item-icon"></i>
                                Edit
                              </a>
                              <a class="dropdown-item" href="#">
                                <i class="fe fe-trash dropdown-item-icon"></i>
                                Remove
                              </a>
                            </span>
                          </span>
                                    </div>
                                </div>
                            </li>
                            <!-- List group -->
                            <li class="list-group-item px-0">
                                <div class="row flex-column flex-md-row gap-3 gap-md-0">
                                    <div class="col-md-3 col-12">
                                        <a href="#"><img
                                                src="Dashboard%20Geeks%20-%20Bootstrap%205%20Admin%20Dashboard%20Template_files/course-gatsby.jpg"
                                                alt="" class="img-fluid rounded"></a>
                                    </div>
                                    <div class="col-md-8 col-10">
                                        <div class="d-flex flex-column gap-2">
                                            <a href="#">
                                                <h5 class="text-primary-hover mb-0">Guide to Static Sites with
                                                    Gatsby.js</h5>
                                            </a>
                                            <div class="d-flex align-items-center gap-2">
                                                <img
                                                    src="Dashboard%20Geeks%20-%20Bootstrap%205%20Admin%20Dashboard%20Template_files/avatar-8.jpg"
                                                    alt="" class="rounded-circle avatar-xs">
                                                <span class="fs-6">Jenny Wilson</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-1 col-auto d-flex justify-content-center">
                          <span class="dropdown dropstart">
                            <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#" role="button"
                               id="courseDropdown4" data-bs-toggle="dropdown" data-bs-offset="-20,20"
                               aria-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown4">
                              <span class="dropdown-header">Settings</span>
                              <a class="dropdown-item" href="#">
                                <i class="fe fe-edit dropdown-item-icon"></i>
                                Edit
                              </a>
                              <a class="dropdown-item" href="#">
                                <i class="fe fe-trash dropdown-item-icon"></i>
                                Remove
                              </a>
                            </span>
                          </span>
                                    </div>
                                </div>
                            </li>
                            <!-- List group -->
                            <li class="list-group-item px-0">
                                <div class="row flex-column flex-md-row gap-3 gap-md-0">
                                    <div class="col-md-3 col-12">
                                        <a href="#">
                                            <img
                                                src="Dashboard%20Geeks%20-%20Bootstrap%205%20Admin%20Dashboard%20Template_files/course-javascript.jpg"
                                                alt="" class="img-fluid rounded">
                                        </a>
                                    </div>
                                    <div class="col-md-8 col-10">
                                        <div class="d-flex flex-column gap-2">
                                            <a href="#">
                                                <h5 class="text-primary-hover mb-0">The Modern JavaScript
                                                    Courses</h5>
                                            </a>
                                            <div class="d-flex align-items-center gap-2">
                                                <img
                                                    src="Dashboard%20Geeks%20-%20Bootstrap%205%20Admin%20Dashboard%20Template_files/avatar-1.jpg"
                                                    alt="" class="rounded-circle avatar-xs">
                                                <span class="fs-6">Guy Hawkins</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-1 col-auto d-flex justify-content-center">
                          <span class="dropdown dropstart">
                            <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#" role="button"
                               id="courseDropdown5" data-bs-toggle="dropdown" data-bs-offset="-20,20"
                               aria-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown5">
                              <span class="dropdown-header">Settings</span>
                              <a class="dropdown-item" href="#">
                                <i class="fe fe-edit dropdown-item-icon"></i>
                                Edit
                              </a>
                              <a class="dropdown-item" href="#">
                                <i class="fe fe-trash dropdown-item-icon"></i>
                                Remove
                              </a>
                            </span>
                          </span>
                                    </div>
                                </div>
                            </li>
                            <!-- List group -->
                            <li class="list-group-item px-0">
                                <div class="row flex-column flex-md-row gap-3 gap-md-0">
                                    <div class="col-md-3 col-12">
                                        <a href="#">
                                            <img
                                                src="Dashboard%20Geeks%20-%20Bootstrap%205%20Admin%20Dashboard%20Template_files/course-wordpress.jpg"
                                                alt="" class="img-fluid rounded">
                                        </a>
                                    </div>
                                    <div class="col-md-8 col-10">
                                        <div class="d-flex flex-column gap-2">
                                            <a href="#">
                                                <h5 class="text-primary-hover mb-0">Online WordPress Courses Become
                                                    an Expert Today‎</h5>
                                            </a>
                                            <div class="d-flex align-items-center gap-2">
                                                <img
                                                    src="Dashboard%20Geeks%20-%20Bootstrap%205%20Admin%20Dashboard%20Template_files/avatar-5.jpg"
                                                    alt="" class="rounded-circle avatar-xs">
                                                <span class="fs-6">Robert Fox</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-1 col-auto d-flex justify-content-center">
                          <span class="dropdown dropstart">
                            <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#" role="button"
                               id="courseDropdown6" data-bs-toggle="dropdown" data-bs-offset="-20,20"
                               aria-expanded="false">
                              <i class="fe fe-more-vertical"></i>
                            </a>
                            <span class="dropdown-menu" aria-labelledby="courseDropdown6">
                              <span class="dropdown-header">Settings</span>
                              <a class="dropdown-item" href="#">
                                <i class="fe fe-edit dropdown-item-icon"></i>
                                Edit
                              </a>
                              <a class="dropdown-item" href="#">
                                <i class="fe fe-trash dropdown-item-icon"></i>
                                Remove
                              </a>
                            </span>
                          </span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-12 col-md-12 col-12">
                <!-- Card -->
                <div class="card h-100">
                    <!-- Card header -->
                    <div class="card-header card-header-height d-flex align-items-center">
                        <h4 class="mb-0">Activity</h4>
                    </div>
                    <!-- Card body -->
                    <div class="card-body">
                        <!-- List group -->
                        <ul class="list-group list-group-flush list-timeline-activity">
                            <li class="list-group-item px-0 pt-0 border-0 mb-2">
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="avatar avatar-md avatar-indicators avatar-online">
                                            <img alt="avatar"
                                                 src="Dashboard%20Geeks%20-%20Bootstrap%205%20Admin%20Dashboard%20Template_files/avatar-6.jpg"
                                                 class="rounded-circle">
                                        </div>
                                    </div>
                                    <div class="col ms-n2">
                                        <div class="d-flex flex-column gap-1">
                                            <div>
                                                <h4 class="mb-0 h5">Dianna Smiley</h4>
                                                <p class="mb-0">Just buy the courses”Build React Application
                                                    Tutorial”</p>
                                            </div>
                                            <div>
                                                <span class="fs-6">2m ago</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- List group -->
                            <li class="list-group-item px-0 pt-0 border-0 mb-2">
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="avatar avatar-md avatar-indicators avatar-offline">
                                            <img alt="avatar"
                                                 src="Dashboard%20Geeks%20-%20Bootstrap%205%20Admin%20Dashboard%20Template_files/avatar-7.jpg"
                                                 class="rounded-circle">
                                        </div>
                                    </div>
                                    <div class="col ms-n2">
                                        <div class="d-flex flex-column gap-1">
                                            <div>
                                                <h4 class="mb-0 h5">Irene Hargrove</h4>
                                                <p class="mb-0">Comment on “Bootstrap Tutorial” Says “Hi,I m
                                                    irene...</p>
                                            </div>
                                            <div>
                                                <span class="fs-6">1 hour ago</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <!-- List group -->
                            <li class="list-group-item px-0 pt-0 border-0 mb-2">
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="avatar avatar-md avatar-indicators avatar-busy">
                                            <img alt="avatar"
                                                 src="Dashboard%20Geeks%20-%20Bootstrap%205%20Admin%20Dashboard%20Template_files/avatar-4.jpg"
                                                 class="rounded-circle">
                                        </div>
                                    </div>
                                    <div class="col ms-n2">
                                        <div class="d-flex flex-column gap-1">
                                            <div>
                                                <h4 class="mb-0 h5">Trevor Bradle</h4>
                                                <p class="mb-0">Just share your article on Social Media..</p>
                                            </div>
                                            <div>
                                                <span class="fs-6">2 month ago</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item px-0 pt-0 border-0">
                                <div class="row">
                                    <div class="col-auto">
                                        <div class="avatar avatar-md avatar-indicators avatar-away">
                                            <img alt="avatar"
                                                 src="Dashboard%20Geeks%20-%20Bootstrap%205%20Admin%20Dashboard%20Template_files/avatar-1.jpg"
                                                 class="rounded-circle">
                                        </div>
                                    </div>
                                    <div class="col ms-n2">
                                        <div class="d-flex flex-column gap-1">
                                            <div>
                                                <h4 class="mb-0 h5">John Deo</h4>
                                                <p class="mb-0">Just buy the courses”Build React Application
                                                    Tutorial”</p>
                                            </div>
                                            <div>
                                                <span class="fs-6">2m ago</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
