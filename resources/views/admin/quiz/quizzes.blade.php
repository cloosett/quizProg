@extends('layouts.admin')

@section('content')
    <section class="container-fluid p-4">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <!-- Page Header -->
                <div
                    class="border-bottom pb-3 mb-3 d-flex flex-column flex-md-row gap-3 align-items-md-center justify-content-between">
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
                                    <a class="nav-link" href="{{ route('admin.quizzes')}}"
                                       role="tab" aria-selected="false" tabindex="-1">All</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" href="{{ route('admin.quizzes', ['status' => 'approved']) }}"
                                       role="tab" aria-selected="false"
                                       tabindex="-1">Approved</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a class="nav-link" href="{{ route('admin.quizzes', ['status' => 'pending']) }}"
                                       role="tab" aria-selected="false"
                                       tabindex="-1">Pending</a>
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
                            <div class="tab-pane fade show active" id="courses" role="tabpanel"
                                 aria-labelledby="courses-tab">
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
                                        @foreach($quizzes as $quiz)
                                            <tr>
                                                <td>
                                                    <a href="#" class="text-inherit">
                                                        <div class="d-flex align-items-center gap-3">
                                                            <div>
                                                                <img src="{{ $quiz->image ? asset('storage/' . $quiz->image) : asset('images/quiz/default-quiz-image.png') }}"
                                                                     alt="" class="img-4by3-lg rounded">
                                                            </div>
                                                            <div class="d-flex flex-column gap-1">
                                                                <h4 class="mb-0 text-primary-hover">{{ $quiz->name }}</h4>
                                                                <span>Added on {{ $quiz->created_at }}</span>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center flex-row gap-2">
{{--                                                        <img src="../../assets/images/avatar/avatar-7.jpg" alt=""--}}
{{--                                                             class="rounded-circle avatar-xs">--}}
                                                        <h5 class="mb-0">{{ $quiz->user->hasRole('admin') ? 'Admin' : $quiz->user->name }}</h5>
                                                    </div>
                                                </td>
                                                <td>
                                                    <span
                                                        class="badge-dot @if($quiz->is_active) bg-success @else bg-warning @endif me-1 d-inline-block align-middle"></span>
                                                    {{ $quiz->is_active ? 'Approved' : 'Pending' }}
                                                </td>
                                                <td>
                                                    <a href="{{ route('admin.quizzes.edit', $quiz->slug) }}" class="btn btn-success btn-sm">Edit</a>
                                                    <form action="{{ route('admin.quizzes.destroy', $quiz->id) }}" method="POST" class="d-inline">
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                                <td>
                                                    <span class="dropdown dropstart">
                                                      <a class="btn-icon btn btn-ghost btn-sm rounded-circle" href="#" role="button"
                                                         id="courseDropdown1" data-bs-toggle="dropdown" data-bs-offset="-20,20"
                                                         aria-expanded="false">
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
                                        @endforeach
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
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                             fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                  d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"></path>
                                        </svg>
                                    </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12"
                                             fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                  d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
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
