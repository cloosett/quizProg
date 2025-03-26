<div class="position-relative">
    <nav class="navbar navbar-expand-lg sidenav sidenav-navbar">
        <!-- Menu -->
        <a class="d-xl-none d-lg-none d-block text-inherit fw-bold" href="#">Menu</a>
        <!-- Button -->

        <button class="navbar-toggler d-lg-none icon-shape icon-sm rounded bg-primary text-light" type="button" data-bs-toggle="collapse" data-bs-target="#sidenavNavbar" aria-controls="sidenavNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fe fe-menu"></span>
        </button>

        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenavNavbar">
            <div class="navbar-nav flex-column mt-4 mt-lg-0 d-flex flex-column gap-3">
                <ul class="list-unstyled mb-0">
                    <!-- Nav item -->

                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('profile.dashboard') }}">
                            <i class="fa fa-home nav-icon"></i>
                            Dashboard
                        </a>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('profile.mylearning') }}">
                            <i class="fa fa-award nav-icon"></i>
                            My Learning
                        </a>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item nav-collapse">
                        <a class="nav-sub-link" data-bs-toggle="collapse" href="#collapseExample">
                            <i class="fa fa-question-circle nav-icon"></i>
                            My Quiz
                        </a>
                        <div class="collapse" id="collapseExample">
                            <ul class="list-unstyled py-2 px-4">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('profile.my-quiz')}}">My Quiz</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('profile.create-quiz')}}">Create Quiz</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- Nav item -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('profile.certificates') }}">
                            <i class="fa fa-file-text nav-icon"></i>
                            Certificate
                        </a>
                    </li>
                </ul>
                <!-- Navbar header -->
                <div class="d-flex flex-column gap-1">
                    <span class="navbar-header">Learn</span>
                    <ul class="list-unstyled mb-0">
                        <!-- Nav item -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('profile.allcourses') }}">
                                <i class="fa fa-video-camera nav-icon"></i>
                                All Courses
                            </a>
                        </li>
                        <!-- Nav item -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('profile.quizzes') }}">
                                <i class="fa fa-credit-card nav-icon"></i>
                                Quizzes
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Navbar header -->
                <div class="d-flex flex-column gap-1">
                    <span class="navbar-header">Account Settings</span>
                    <ul class="list-unstyled mb-0">
                        <!-- Nav item -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('setting.index') }}">
                                <i class="fa fa-shield nav-icon"></i>
                                Security
                            </a>
                        </li>
                        <!-- Nav item -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('profile.social-profiles') }}">
                                <i class="fa fa-user nav-icon"></i>
                                Social Profiles
                            </a>
                        </li>
                        <!-- Nav item -->
                        <li class="nav-item">
                            <a class="nav-link" href="https://geeksui.codescandy.com/geeks/pages/profile-privacy.html">
                                <i class="fa fa-lock nav-icon"></i>
                                Profile Privacy
                            </a>
                        </li>
                        <!-- Nav item -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('profile.index') }}">
                                <i class="fa fa-trash nav-icon"></i>
                                Delete Profile
                            </a>
                        </li>
                        <!-- Nav item -->
                        <li class="nav-item">
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="nav-link btn btn-link p-0 text-start">
                                    <i class="fa fa-power-off nav-icon"></i>
                                    Sign Out
                                </button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</div>
