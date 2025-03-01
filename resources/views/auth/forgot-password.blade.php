@extends('layouts.app')

@section('content')
    <section class="container d-flex flex-column vh-100">
        <div class="row align-items-center justify-content-center g-0 h-lg-100 py-8">
            <div class="col-lg-5 col-md-8 py-8 py-xl-0">
                <!-- Card -->
                <div class="card shadow">
                    <!-- Card body -->
                    <div class="card-body p-6 d-flex flex-column gap-4">
                        <div>
                            <a href="https://geeksui.codescandy.com/geeks/index.html"><img src="{{asset('images/svg/logo-icon.svg')}}" class="mb-4" alt="logo-icon"></a>
                            <div class="d-flex flex-column gap-1">
                                <h1 class="mb-0 fw-bold">Forgot Password</h1>
                                <p class="mb-0">Fill the form to reset your password.</p>
                            </div>
                        </div>
                        <!-- Form -->
                        <form class="needs-validation" method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <!-- Email -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" id="email" class="form-control" name="email" placeholder="Enter Your Email " required="">
                                <div class="invalid-feedback">Please enter valid email.</div>
                            </div>
                            <!-- Button -->
                            <div class="mb-3 d-grid">
                                <button type="submit" class="btn btn-primary">Send Resest Link</button>
                                @if (session('status'))
                                    <div class="alert alert-success mt-2">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                @if ($errors->any())
                                    <div class="alert alert-danger mt-2">
                                        @foreach ($errors->all() as $error)
                                            {{ $error }}<br>
                                        @endforeach
                                    </div>
                                @endif

                            </div>
                            <span>
                    Return to
                    <a href="{{route('sign-in')}}">sign in</a>
                  </span>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="position-absolute bottom-0 m-4">
        <div class="dropdown">
            <button class="btn btn-light btn-icon rounded-circle d-flex align-items-center" type="button" aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
                <i class="bi theme-icon-active"><i class="bi theme-icon bi-moon-stars-fill"></i></i>
                <span class="visually-hidden bs-theme-text">Toggle theme</span>
            </button>
            <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bs-theme-text">
                <li>
                    <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
                        <i class="bi theme-icon bi-sun-fill"></i>
                        <span class="ms-2">Light</span>
                    </button>
                </li>
                <li>
                    <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="dark" aria-pressed="true">
                        <i class="bi theme-icon bi-moon-stars-fill"></i>
                        <span class="ms-2">Dark</span>
                    </button>
                </li>
                <li>
                    <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="auto" aria-pressed="false">
                        <i class="bi theme-icon bi-circle-half"></i>
                        <span class="ms-2">Auto</span>
                    </button>
                </li>
            </ul>
        </div>
    </div>
@endsection

@php
    $hideHeader = true;
    $hideFooter = true;
@endphp
