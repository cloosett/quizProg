@extends('layouts.admin')

@section('content')
    <section class="container-fluid p-4">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Page Header -->
                <div class="border-bottom pb-3 mb-3 d-flex flex-column flex-md-row gap-3 align-items-md-center justify-content-between">
                    <div class="d-flex flex-column gap-1">
                        <h1 class="mb-0 h2 fw-bold">Quizzes</h1>
                        <!-- Breadcrumb -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="../dashboard/admin-dashboard.html">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="#">Quizzes</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">All</li>
                            </ol>
                        </nav>
                    </div>
                    <div>
                        <a href="{{ route('admin.quizzes.create') }}" class="btn btn-primary">Add New Quiz</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Card -->
                <div class="card rounded-3">
                    <!-- Card header -->
                    <div class="card-header p-0">
                        <div>
                            <!-- Nav -->
                            <ul class="nav nav-lb-tab border-bottom-0" id="tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link active" id="courses-tab" data-bs-toggle="pill" href="#courses" role="tab" aria-controls="courses" aria-selected="true">All</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="approved-tab" data-bs-toggle="pill" href="#approved" role="tab" aria-controls="approved" aria-selected="false" tabindex="-1">Approved</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" id="pending-tab" data-bs-toggle="pill" href="#pending" role="tab" aria-controls="pending" aria-selected="false" tabindex="-1">Pending</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="p-4 row">
                        <!-- Form -->
                        <form class="d-flex align-items-center col-12 col-md-12 col-lg-12">
                            <span class="position-absolute ps-3 search-icon"><i class="fa fa-search"></i></span>
                            <input type="search" class="form-control ps-6" placeholder="Search Quiz">
                        </form>
                    </div>
                    <div>
                        <!-- Table -->
                        <div class="tab-content" id="tabContent">
                            <!--Tab pane -->
                            <div class="tab-pane fade show active" id="courses" role="tabpanel" aria-labelledby="courses-tab">
                                <div class="table-responsive border-0 overflow-y-hidden">
                                    <table class="table mb-0 text-nowrap table-centered table-hover">
                                        <thead class="table-light">
                                        <tr>
                                            <th>Quiz</th>
                                            <th>Instructor</th>
                                            <th>STATUS</th>
                                            <th>ACTION</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-inherit">
                                                    <div class="d-flex align-items-center gap-3">
                                                        <div>
                                                            <img src="../../assets/images/course/course-gatsby.jpg" alt="" class="img-4by3-lg rounded">
                                                        </div>
                                                        <div class="d-flex flex-column gap-1">
                                                            <h4 class="mb-0 text-primary-hover">Revolutionize how you build the web...</h4>
                                                            <span>Added on 7 July, 2023</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center flex-row gap-2">
                                                    <img src="../../assets/images/avatar/avatar-7.jpg" alt="" class="rounded-circle avatar-xs">
                                                    <h5 class="mb-0">Reva Yokk</h5>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge-dot bg-warning me-1 d-inline-block align-middle"></span>
                                                Pending
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-outline-secondary btn-sm">Reject</a>
                                                <a href="#" class="btn btn-success btn-sm">Approved</a>
                                            </td>
                                            <td>
                                <span class="dropdown dropstart">
                                  <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#" role="button" id="courseDropdown1" data-bs-toggle="dropdown" data-bs-offset="-20,20" aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                  </a>
                                  <span class="dropdown-menu" aria-labelledby="courseDropdown1">
                                    <span class="dropdown-header">Settings</span>
                                    <a class="dropdown-item" href="#">
                                      <i class="fe fe-x-circle dropdown-item-icon"></i>
                                      Reject with Feedback
                                    </a>
                                  </span>
                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-inherit">
                                                    <div class="d-flex align-items-center flex-row gap-3">
                                                        <div>
                                                            <img src="../../assets/images/course/course-graphql.jpg" alt="" class="img-4by3-lg rounded">
                                                        </div>
                                                        <div class="d-flex flex-column gap-1">
                                                            <h4 class="mb-0 text-primary-hover">Guide to Static Sites with Gatsby...</h4>
                                                            <span>Added on 6 July, 2023</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center flex-row gap-2">
                                                    <img src="../../assets/images/avatar/avatar-6.jpg" alt="" class="rounded-circle avatar-xs">
                                                    <h5 class="mb-0">Brooklyn Simmons</h5>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge-dot bg-warning me-1 d-inline-block align-middle"></span>
                                                Pending
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-outline-secondary btn-sm">Reject</a>
                                                <a href="#" class="btn btn-success btn-sm">Approved</a>
                                            </td>
                                            <td>
                                <span class="dropdown dropstart">
                                  <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#" role="button" id="courseDropdown2" data-bs-toggle="dropdown" data-bs-offset="-20,20" aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                  </a>
                                  <span class="dropdown-menu" aria-labelledby="courseDropdown2">
                                    <span class="dropdown-header">Settings</span>
                                    <a class="dropdown-item" href="#">
                                      <i class="fe fe-x-circle dropdown-item-icon"></i>
                                      Reject with Feedback
                                    </a>
                                  </span>
                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-inherit">
                                                    <div class="d-flex align-items-center flex-row gap-3">
                                                        <div>
                                                            <img src="../../assets/images/course/course-html.jpg" alt="" class="img-4by3-lg rounded">
                                                        </div>
                                                        <div class="d-flex flex-column gap-1">
                                                            <h4 class="mb-0 text-primary-hover">The Modern JavaScript Courses ...</h4>
                                                            <span>Added on 5 July, 2023</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2 flex-row">
                                                    <img src="../../assets/images/avatar/avatar-5.jpg" alt="" class="rounded-circle avatar-xs">
                                                    <h5 class="mb-0">Miston Wilson</h5>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge-dot bg-warning me-1 d-inline-block align-middle"></span>
                                                Pending
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-outline-secondary btn-sm">Reject</a>
                                                <a href="#" class="btn btn-success btn-sm">Approved</a>
                                            </td>
                                            <td>
                                <span class="dropdown dropstart">
                                  <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#" role="button" id="courseDropdown3" data-bs-toggle="dropdown" data-bs-offset="-20,20" aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                  </a>
                                  <span class="dropdown-menu" aria-labelledby="courseDropdown3">
                                    <span class="dropdown-header">Settings</span>
                                    <a class="dropdown-item" href="#">
                                      <i class="fe fe-x-circle dropdown-item-icon"></i>
                                      Reject with Feedback
                                    </a>
                                  </span>
                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-inherit">
                                                    <div class="d-flex align-items-center flex-row gap-3">
                                                        <div>
                                                            <img src="../../assets/images/course/course-javascript.jpg" alt="" class="img-4by3-lg rounded">
                                                        </div>
                                                        <div class="d-flex flex-column gap-1">
                                                            <h4 class="mb-0 text-primary-hover">Courses JavaScript Heading Title ...</h4>
                                                            <span>Added on 5 July, 2023</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center flex-row gap-2">
                                                    <img src="../../assets/images/avatar/avatar-10.jpg" alt="" class="rounded-circle avatar-xs">
                                                    <h5 class="mb-0">Guy Hawkins</h5>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge-dot bg-success me-1 d-inline-block align-middle"></span>
                                                Live
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-secondary btn-sm">Change Status</a>
                                            </td>
                                            <td>
                                <span class="dropdown dropstart">
                                  <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#" role="button" id="courseDropdown4" data-bs-toggle="dropdown" data-bs-offset="-20,20" aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                  </a>
                                  <span class="dropdown-menu" aria-labelledby="courseDropdown4">
                                    <span class="dropdown-header">Settings</span>
                                    <a class="dropdown-item" href="#">
                                      <i class="fe fe-x-circle dropdown-item-icon"></i>
                                      Reject with Feedback
                                    </a>
                                  </span>
                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-inherit">
                                                    <div class="d-flex align-items-center flex-row gap-3">
                                                        <div>
                                                            <img src="../../assets/images/course/course-node.jpg" alt="" class="img-4by3-lg rounded">
                                                        </div>
                                                        <div class="d-flex flex-column gap-1">
                                                            <h4 class="mb-0 text-primary-hover">Get Start with Node Heading Title ...</h4>
                                                            <span>Added on 5 July, 2023</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center gap-2 flex-row">
                                                    <img src="../../assets/images/avatar/avatar-3.jpg" alt="" class="rounded-circle avatar-xs">
                                                    <h5 class="mb-0">Sina Ray</h5>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge-dot bg-success me-1 d-inline-block align-middle"></span>
                                                Live
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-secondary btn-sm">Change Status</a>
                                            </td>
                                            <td>
                                <span class="dropdown dropstart">
                                  <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#" role="button" id="courseDropdown5" data-bs-toggle="dropdown" data-bs-offset="-20,20" aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                  </a>
                                  <span class="dropdown-menu" aria-labelledby="courseDropdown5">
                                    <span class="dropdown-header">Settings</span>
                                    <a class="dropdown-item" href="#">
                                      <i class="fe fe-x-circle dropdown-item-icon"></i>
                                      Reject with Feedback
                                    </a>
                                  </span>
                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-inherit">
                                                    <div class="d-flex align-items-center flex-row gap-3">
                                                        <div>
                                                            <img src="../../assets/images/course/course-laravel.jpg" alt="" class="img-4by3-lg rounded">
                                                        </div>
                                                        <div class="d-flex flex-column gap-1">
                                                            <h4 class="mb-0 text-primary-hover">Get Start with Laravel...</h4>
                                                            <span>Added on 5 July, 2023</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center flex-row gap-2">
                                                    <img src="../../assets/images/avatar/avatar-9.jpg" alt="" class="rounded-circle avatar-xs">
                                                    <h5 class="mb-0">Sobo Rikhan</h5>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge-dot bg-success me-1 d-inline-block align-middle"></span>
                                                Live
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-secondary btn-sm">Change Status</a>
                                            </td>
                                            <td>
                                <span class="dropdown dropstart">
                                  <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#" role="button" id="courseDropdown6" data-bs-toggle="dropdown" data-bs-offset="-20,20" aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                  </a>
                                  <span class="dropdown-menu" aria-labelledby="courseDropdown6">
                                    <span class="dropdown-header">Settings</span>
                                    <a class="dropdown-item" href="#">
                                      <i class="fe fe-x-circle dropdown-item-icon"></i>
                                      Reject with Feedback
                                    </a>
                                  </span>
                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-inherit">
                                                    <div class="d-flex align-items-center flex-row gap-3">
                                                        <div>
                                                            <img src="../../assets/images/course/course-react.jpg" alt="" class="img-4by3-lg rounded">
                                                        </div>
                                                        <div class="d-flex flex-column gap-1">
                                                            <h4 class="mb-0 text-primary-hover">Get Start with React...</h4>
                                                            <span>Added on 4 July, 2023</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center flex-row gap-2">
                                                    <img src="../../assets/images/avatar/avatar-2.jpg" alt="" class="rounded-circle avatar-xs">
                                                    <h5 class="mb-0">April Noms</h5>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge-dot bg-success me-1 d-inline-block align-middle"></span>
                                                Live
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-secondary btn-sm">Change Status</a>
                                            </td>
                                            <td>
                                <span class="dropdown dropstart">
                                  <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#" role="button" id="courseDropdown7" data-bs-toggle="dropdown" data-bs-offset="-20,20" aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                  </a>
                                  <span class="dropdown-menu" aria-labelledby="courseDropdown7">
                                    <span class="dropdown-header">Settings</span>
                                    <a class="dropdown-item" href="#">
                                      <i class="fe fe-x-circle dropdown-item-icon"></i>
                                      Reject with Feedback
                                    </a>
                                  </span>
                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-inherit">
                                                    <div class="d-flex align-items-center flex-row gap-3">
                                                        <div>
                                                            <img src="../../assets/images/course/course-angular.jpg" alt="" class="img-4by3-lg rounded">
                                                        </div>
                                                        <div class="d-flex flex-column gap-1">
                                                            <h4 class="mb-0 text-primary-hover">Get Start with Angular...</h4>
                                                            <span>Added on 3 July, 2023</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center flex-row gap-2">
                                                    <img src="../../assets/images/avatar/avatar-4.jpg" alt="" class="rounded-circle avatar-xs">
                                                    <h5 class="mb-0">Jacob Jones</h5>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge-dot bg-warning me-1 d-inline-block align-middle"></span>
                                                Pending
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-outline-secondary btn-sm">Reject</a>
                                                <a href="#" class="btn btn-success btn-sm">Approved</a>
                                            </td>
                                            <td>
                                <span class="dropdown dropstart">
                                  <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#" role="button" id="courseDropdown8" data-bs-toggle="dropdown" data-bs-offset="-20,20" aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                  </a>
                                  <span class="dropdown-menu" aria-labelledby="courseDropdown8">
                                    <span class="dropdown-header">Settings</span>
                                    <a class="dropdown-item" href="#">
                                      <i class="fe fe-x-circle dropdown-item-icon"></i>
                                      Reject with Feedback
                                    </a>
                                  </span>
                                </span>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!--Tab pane -->
                            <div class="tab-pane fade" id="approved" role="tabpanel" aria-labelledby="approved-tab">
                                <div class="table-responsive border-0 overflow-y-hidden">
                                    <table class="table mb-0 text-nowrap table-centered table-hover">
                                        <thead class="table-light">
                                        <tr>
                                            <th>Quiz</th>
                                            <th>Instructor</th>
                                            <th>STATUS</th>
                                            <th>ACTION</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-inherit">
                                                    <div class="d-flex align-items-center flex-row gap-3">
                                                        <div>
                                                            <img src="../../assets/images/course/course-javascript.jpg" alt="" class="img-4by3-lg rounded">
                                                        </div>
                                                        <div class="d-flex flex-column gap-1">
                                                            <h4 class="mb-0 text-primary-hover">Courses JavaScript Heading Title ...</h4>
                                                            <span>Added on 5 July, 2023</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center flex-row gap-2">
                                                    <img src="../../assets/images/avatar/avatar-10.jpg" alt="" class="rounded-circle avatar-xs">
                                                    <h5 class="mb-0">Guy Hawkins</h5>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge-dot bg-success me-1 d-inline-block align-middle"></span>
                                                Live
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-secondary btn-sm">Change Status</a>
                                            </td>
                                            <td>
                                <span class="dropdown dropstart">
                                  <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#" role="button" id="courseDropdown9" data-bs-toggle="dropdown" data-bs-offset="-20,20" aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                  </a>
                                  <span class="dropdown-menu" aria-labelledby="courseDropdown9">
                                    <span class="dropdown-header">Settings</span>
                                    <a class="dropdown-item" href="#">
                                      <i class="fe fe-x-circle dropdown-item-icon"></i>
                                      Reject with Feedback
                                    </a>
                                  </span>
                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-inherit">
                                                    <div class="d-flex align-items-center flex-row gap-3">
                                                        <div>
                                                            <img src="../../assets/images/course/course-node.jpg" alt="" class="img-4by3-lg rounded">
                                                        </div>
                                                        <div class="d-flex flex-column gap-1">
                                                            <h4 class="mb-0 text-primary-hover">Get Start with Node Heading Title ...</h4>
                                                            <span>Added on 5 July, 2023</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center flex-row gap-2">
                                                    <img src="../../assets/images/avatar/avatar-1.jpg" alt="" class="rounded-circle avatar-xs">
                                                    <h5 class="mb-0">Liston Zebon</h5>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge-dot bg-success me-1 d-inline-block align-middle"></span>
                                                Live
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-secondary btn-sm">Change Status</a>
                                            </td>
                                            <td>
                                <span class="dropdown dropstart">
                                  <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#" role="button" id="courseDropdown10" data-bs-toggle="dropdown" data-bs-offset="-20,20" aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                  </a>
                                  <span class="dropdown-menu" aria-labelledby="courseDropdown10">
                                    <span class="dropdown-header">Settings</span>
                                    <a class="dropdown-item" href="#">
                                      <i class="fe fe-x-circle dropdown-item-icon"></i>
                                      Reject with Feedback
                                    </a>
                                  </span>
                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-inherit">
                                                    <div class="d-flex align-items-center flex-row gap-3">
                                                        <div>
                                                            <img src="../../assets/images/course/course-laravel.jpg" alt="" class="img-4by3-lg rounded">
                                                        </div>
                                                        <div class="d-flex flex-column gap-1">
                                                            <h4 class="mb-0 text-primary-hover">Get Start with Laravel...</h4>
                                                            <span>Added on 5 July, 2023</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center flex-row gap-2">
                                                    <img src="../../assets/images/avatar/avatar-4.jpg" alt="" class="rounded-circle avatar-xs">
                                                    <h5 class="mb-0">Jacob Jones</h5>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge-dot bg-success me-1 d-inline-block align-middle"></span>
                                                Live
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-secondary btn-sm">Change Status</a>
                                            </td>
                                            <td>
                                <span class="dropdown dropstart">
                                  <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#" role="button" id="courseDropdown11" data-bs-toggle="dropdown" data-bs-offset="-20,20" aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                  </a>
                                  <span class="dropdown-menu" aria-labelledby="courseDropdown11">
                                    <span class="dropdown-header">Settings</span>
                                    <a class="dropdown-item" href="#">
                                      <i class="fe fe-x-circle dropdown-item-icon"></i>
                                      Reject with Feedback
                                    </a>
                                  </span>
                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-inherit">
                                                    <div class="d-flex align-items-center flex-row gap-3">
                                                        <div>
                                                            <img src="../../assets/images/course/course-react.jpg" alt="" class="img-4by3-lg rounded">
                                                        </div>
                                                        <div class="d-flex flex-column gap-1">
                                                            <h4 class="mb-0 text-primary-hover">Get Start with React...</h4>
                                                            <span>Added on 4 July, 2023</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center flex-row gap-2">
                                                    <img src="../../assets/images/avatar/avatar-6.jpg" alt="" class="rounded-circle avatar-xs">
                                                    <h5 class="mb-0">Reema Messlemn</h5>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge-dot bg-success me-1 d-inline-block align-middle"></span>
                                                Live
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-secondary btn-sm">Change Status</a>
                                            </td>
                                            <td>
                                <span class="dropdown dropstart">
                                  <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#" role="button" id="courseDropdown12" data-bs-toggle="dropdown" data-bs-offset="-20,20" aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                  </a>
                                  <span class="dropdown-menu" aria-labelledby="courseDropdown12">
                                    <span class="dropdown-header">Settings</span>
                                    <a class="dropdown-item" href="#">
                                      <i class="fe fe-x-circle dropdown-item-icon"></i>
                                      Reject with Feedback
                                    </a>
                                  </span>
                                </span>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!--Tab pane -->
                            <div class="tab-pane fade" id="pending" role="tabpanel" aria-labelledby="pending-tab">
                                <div class="table-responsive border-0 overflow-y-hidden">
                                    <table class="table mb-0 text-nowrap table-centered table-hover">
                                        <thead class="table-light">
                                        <tr>
                                            <th>Quiz</th>
                                            <th>Instructor</th>
                                            <th>STATUS</th>
                                            <th>ACTION</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-inherit">
                                                    <div class="d-flex align-items-center flex-row gap-3">
                                                        <div>
                                                            <img src="../../assets/images/course/course-gatsby.jpg" alt="" class="img-4by3-lg rounded">
                                                        </div>
                                                        <div class="d-flex flex-column gap-1">
                                                            <h4 class="mb-0 text-primary-hover">Revolutionize how you build the web...</h4>
                                                            <span>Added on 7 July, 2023</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center flex-row gap-2">
                                                    <img src="../../assets/images/avatar/avatar-7.jpg" alt="" class="rounded-circle avatar-xs">
                                                    <h5 class="mb-0">Reva Yokk</h5>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge-dot bg-warning me-1 d-inline-block align-middle"></span>
                                                Pending
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-outline-secondary btn-sm">Reject</a>
                                                <a href="#" class="btn btn-success btn-sm">Approved</a>
                                            </td>
                                            <td>
                                <span class="dropdown dropstart">
                                  <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#" role="button" id="courseDropdown13" data-bs-toggle="dropdown" data-bs-offset="-20,20" aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                  </a>
                                  <span class="dropdown-menu" aria-labelledby="courseDropdown13">
                                    <span class="dropdown-header">Settings</span>
                                    <a class="dropdown-item" href="#">
                                      <i class="fe fe-x-circle dropdown-item-icon"></i>
                                      Reject with Feedback
                                    </a>
                                  </span>
                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-inherit">
                                                    <div class="d-flex align-items-center flex-row gap-3">
                                                        <div>
                                                            <img src="../../assets/images/course/course-graphql.jpg" alt="" class="img-4by3-lg rounded">
                                                        </div>
                                                        <div class="d-flex flex-column gap-1">
                                                            <h4 class="mb-0 text-primary-hover">Guide to Static Sites with Gatsby...</h4>
                                                            <span>Added on 6 July, 2023</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center flex-row gap-2">
                                                    <img src="../../assets/images/avatar/avatar-6.jpg" alt="" class="rounded-circle avatar-xs">
                                                    <h5 class="mb-0">Brooklyn Simmons</h5>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge-dot bg-warning me-1 d-inline-block align-middle"></span>
                                                Pending
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-outline-secondary btn-sm">Reject</a>
                                                <a href="#" class="btn btn-success btn-sm">Approved</a>
                                            </td>
                                            <td>
                                <span class="dropdown dropstart">
                                  <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#" role="button" id="courseDropdown14" data-bs-toggle="dropdown" data-bs-offset="-20,20" aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                  </a>
                                  <span class="dropdown-menu" aria-labelledby="courseDropdown14">
                                    <span class="dropdown-header">Settings</span>
                                    <a class="dropdown-item" href="#">
                                      <i class="fe fe-x-circle dropdown-item-icon"></i>
                                      Reject with Feedback
                                    </a>
                                  </span>
                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-inherit">
                                                    <div class="d-flex align-items-center flex-row gap-3">
                                                        <div>
                                                            <img src="../../assets/images/course/course-html.jpg" alt="" class="img-4by3-lg rounded">
                                                        </div>
                                                        <div class="d-flex flex-column gap-1">
                                                            <h4 class="mb-0 text-primary-hover">The Modern JavaScript Courses ...</h4>
                                                            <span>Added on 5 July, 2023</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center flex-row gap-2">
                                                    <img src="../../assets/images/avatar/avatar-3.jpg" alt="" class="rounded-circle avatar-xs">
                                                    <h5 class="mb-0">Jenny Wilson</h5>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge-dot bg-warning me-1 d-inline-block align-middle"></span>
                                                Pending
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-outline-secondary btn-sm">Reject</a>
                                                <a href="#" class="btn btn-success btn-sm">Approved</a>
                                            </td>
                                            <td>
                                <span class="dropdown dropstart">
                                  <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#" role="button" id="courseDropdown15" data-bs-toggle="dropdown" data-bs-offset="-20,20" aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                  </a>
                                  <span class="dropdown-menu" aria-labelledby="courseDropdown15">
                                    <span class="dropdown-header">Settings</span>
                                    <a class="dropdown-item" href="#">
                                      <i class="fe fe-x-circle dropdown-item-icon"></i>
                                      Reject with Feedback
                                    </a>
                                  </span>
                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#" class="text-inherit">
                                                    <div class="d-flex align-items-center flex-row gap-3">
                                                        <div>
                                                            <img src="../../assets/images/course/course-angular.jpg" alt="" class="img-4by3-lg rounded">
                                                        </div>
                                                        <div class="d-flex flex-column gap-1">
                                                            <h4 class="mb-0 text-primary-hover">Get Start with Angular...</h4>
                                                            <span>Added on 3 July, 2023</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center flex-row gap-2">
                                                    <img src="../../assets/images/avatar/avatar-4.jpg" alt="" class="rounded-circle avatar-xs">
                                                    <h5 class="mb-0">Jacob Jones</h5>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge-dot bg-warning me-1 d-inline-block align-middle"></span>
                                                Pending
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-outline-secondary btn-sm">Reject</a>
                                                <a href="#" class="btn btn-success btn-sm">Approved</a>
                                            </td>
                                            <td>
                                <span class="dropdown dropstart">
                                  <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#" role="button" id="courseDropdown16" data-bs-toggle="dropdown" data-bs-offset="-20,20" aria-expanded="false">
                                    <i class="fe fe-more-vertical"></i>
                                  </a>
                                  <span class="dropdown-menu" aria-labelledby="courseDropdown16">
                                    <span class="dropdown-header">Settings</span>
                                    <a class="dropdown-item" href="#">
                                      <i class="fe fe-x-circle dropdown-item-icon"></i>
                                      Reject with Feedback
                                    </a>
                                  </span>
                                </span>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card Footer -->
                    <div class="card-footer">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination justify-content-center mb-0">
                                <li class="page-item">
                                    <a class="page-link disabled" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"></path>
                                        </svg>
                                    </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
