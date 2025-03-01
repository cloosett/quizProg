<nav class="navbar navbar-expand-lg">
    <div class="container-fluid px-0">
        <div class="d-flex">
            <a class="navbar-brand" href="{{route('welcome')}}"><img src="{{asset('images/brand/logo/logo.svg')}}" alt="Geeks" /></a>
            @if (Route::currentRouteName() == 'welcome')
                <div class="dropdown d-none d-md-block">
                <button class="btn btn-light-primary text-primary" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-list me-2 align-middle"></i>
                    Category
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li class="dropdown-submenu dropend">
                        <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="home-academy.html#">Web Development</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="https://geeksui.codescandy.com/geeks/pages/course-category.html">Bootstrap</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="https://geeksui.codescandy.com/geeks/pages/course-category.html">React</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="https://geeksui.codescandy.com/geeks/pages/course-category.html">GraphQl</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="https://geeksui.codescandy.com/geeks/pages/course-category.html">Gatsby</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="https://geeksui.codescandy.com/geeks/pages/course-category.html">Grunt</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="https://geeksui.codescandy.com/geeks/pages/course-category.html">Svelte</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="https://geeksui.codescandy.com/geeks/pages/course-category.html">Meteor</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="https://geeksui.codescandy.com/geeks/pages/course-category.html">HTML5</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="https://geeksui.codescandy.com/geeks/pages/course-category.html">Angular</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown-submenu dropend">
                        <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="home-academy.html#">Design</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="https://geeksui.codescandy.com/geeks/pages/course-category.html">Graphic Design</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="https://geeksui.codescandy.com/geeks/pages/course-category.html">Illustrator</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="https://geeksui.codescandy.com/geeks/pages/course-category.html">UX / UI Design</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="https://geeksui.codescandy.com/geeks/pages/course-category.html">Figma Design</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="https://geeksui.codescandy.com/geeks/pages/course-category.html">Adobe XD</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="https://geeksui.codescandy.com/geeks/pages/course-category.html">Sketch</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="https://geeksui.codescandy.com/geeks/pages/course-category.html">Icon Design</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="https://geeksui.codescandy.com/geeks/pages/course-category.html">Photoshop</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="https://geeksui.codescandy.com/geeks/pages/course-category.html" class="dropdown-item">Mobile App</a>
                    </li>
                    <li>
                        <a href="https://geeksui.codescandy.com/geeks/pages/course-category.html" class="dropdown-item">IT Software</a>
                    </li>
                    <li>
                        <a href="https://geeksui.codescandy.com/geeks/pages/course-category.html" class="dropdown-item">Marketing</a>
                    </li>
                    <li>
                        <a href="https://geeksui.codescandy.com/geeks/pages/course-category.html" class="dropdown-item">Music</a>
                    </li>
                    <li>
                        <a href="https://geeksui.codescandy.com/geeks/pages/course-category.html" class="dropdown-item">Life Style</a>
                    </li>
                    <li>
                        <a href="https://geeksui.codescandy.com/geeks/pages/course-category.html" class="dropdown-item">Business</a>
                    </li>
                    <li>
                        <a href="https://geeksui.codescandy.com/geeks/pages/course-category.html" class="dropdown-item">Photography</a>
                    </li>
                </ul>
            </div>
            @endif
        </div>
        <div class="order-lg-3">
            <div class="d-flex align-items-center">
                <div class="dropdown">
                    <button class="btn btn-light btn-icon rounded-circle d-flex align-items-center" type="button" aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
                        <i class="bi theme-icon-active"></i>
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
                            <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
                                <i class="bi theme-icon bi-moon-stars-fill"></i>
                                <span class="ms-2">Dark</span>
                            </button>
                        </li>
                        <li>
                            <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
                                <i class="bi theme-icon bi-circle-half"></i>
                                <span class="ms-2">Auto</span>
                            </button>
                        </li>
                    </ul>
                </div>
                <div>
                    @if(auth()->check())
                        <ul class="navbar-nav d-flex align-items-center">
                            <li class="dropdown ms-2 d-inline-block position-static">
                                <a class="rounded-circle" href="#" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                                    <div class="avatar avatar-md avatar-indicators avatar-online">
                                        <img alt="avatar" src="{{asset('images/avatar/default-avatar.png')}}" class="rounded-circle">
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end position-absolute mx-3 my-5">
                                    <div class="dropdown-item">
                                        <div class="d-flex">
                                            <div class="avatar avatar-md avatar-indicators avatar-online">
                                                <img alt="avatar" src="{{asset('images/avatar/default-avatar.png')}}" class="rounded-circle">
                                            </div>
                                            <div class="ms-3 lh-1">
                                                <h5 class="mb-1">{{auth()->user()->name}}</h5>
                                                <p class="mb-0">{{auth()->user()->email}}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <ul class="list-unstyled">
                                        <li class="dropdown-submenu dropstart-lg">
                                            <a class="dropdown-item dropdown-list-group-item dropdown-toggle" href="#">
                                                <i class="fe fe-circle me-2"></i>
                                                Status
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <span class="badge-dot bg-success me-2"></span>
                                                        Online
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <span class="badge-dot bg-secondary me-2"></span>
                                                        Offline
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <span class="badge-dot bg-warning me-2"></span>
                                                        Away
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="#">
                                                        <span class="badge-dot bg-danger me-2"></span>
                                                        Busy
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="{{route('profile.dashboard')}}">
                                                <i class="fe fe-user me-2"></i>
                                                Profile
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="../pages/student-subscriptions.html">
                                                <i class="fe fe-star me-2"></i>
                                                Subscription
                                            </a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="#">
                                                <i class="fe fe-settings me-2"></i>
                                                Settings
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="dropdown-divider"></div>
                                    <ul class="list-unstyled">
                                        <li>
                                            <form action="{{ route('logout') }}" method="POST" class="m-0">
                                                @csrf
                                                <button type="submit" class="dropdown-item w-100 text-start">
                                                    <i class="fe fe-power me-2"></i>
                                                    Sign Out
                                                </button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    @endif
                </div>
                @if(auth()->guest())
                    <a href="{{route('sign-in')}}" class="btn btn-outline-primary ms-2 d-none d-lg-block">Sign in</a>
                    <a href="{{route('sign-up')}}" class="btn btn-primary ms-2 d-none d-lg-block">Sign up</a>
                @endif
                    <!-- Button -->
                <button
                    class="navbar-toggler collapsed ms-2 ms-lg-0"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbar-default"
                    aria-controls="navbar-default"
                    aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="icon-bar top-bar mt-0"></span>
                    <span class="icon-bar middle-bar"></span>
                    <span class="icon-bar bottom-bar"></span>
                </button>
            </div>
        </div>

        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="navbar-default">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="home-academy.html#" id="navbarLanding" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Landings <i class="fa fa-chevron-down ms-2"></i></a>
                    <ul class="dropdown-menu" aria-labelledby="navbarLanding">
                        <li>
                            <h4 class="dropdown-header">Landings</h4>
                        </li>
                        <li>
                            <a href="https://geeksui.codescandy.com/geeks/index.html" class="dropdown-item">
                                <span>Home Default</span>

                            </a>
                        </li>
                        <li>
                            <a href="landing-abroad.html" class="dropdown-item">
                                <span>Home Abroad</span>

                            </a>
                        </li>
                        <li>
                            <a href="https://geeksui.codescandy.com/geeks/mentor/mentor.html" class="dropdown-item">
                                <span>Home Mentor</span>
                            </a>
                        </li>
                        <li>
                            <a href="landing-education.html" class="dropdown-item">Home Education</a>
                        </li>
                        <li>
                            <a href="home-academy.html" class="dropdown-item">Home Academy</a>
                        </li>
                        <li>
                            <a href="landing-courses.html" class="dropdown-item">Home Courses</a>
                        </li>
                        <li>
                            <a href="landing-sass.html" class="dropdown-item">Home Sass</a>
                        </li>
                        <li class="border-bottom my-2"></li>
                        <li>
                            <a href="course-lead.html" class="dropdown-item">Lead Course</a>
                        </li>
                        <li>
                            <a href="request-access.html" class="dropdown-item">Request Access</a>
                        </li>

                        <li>
                            <a href="landing-job.html" class="dropdown-item">Job Listing</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown dropdown-fullwidth">
                    <a class="nav-link dropdown-toggle" href="home-academy.html#" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mega Menu <i class="fa fa-chevron-down ms-2"></i></a>
                    <div class="dropdown-menu dropdown-menu-md">
                        <div class="px-4 pt-2 pb-2">
                            <div class="row">
                                <div class="col-12">
                                    <div class="lh-1 mb-5">
                                        <h3 class="mb-1">Earn a Degree</h3>
                                        <p>Breakthrough pricing on 100% online degrees designed to fit into your life.</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-12">
                                    <div class="border-bottom pb-2 mb-3">
                                        <h5 class="mb-0">Degrees</h5>
                                    </div>
                                    <div>
                                        <a href="home-academy.html#">
                                            <div class="d-flex mb-3">
                                                <img src="../../assets/images/png/degree-1.png" alt="" />
                                                <div class="ms-2">
                                                    <small class="text-body">University of Michigan</small>
                                                    <h6 class="mb-0">Master of Applied Data Science</h6>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="home-academy.html#">
                                            <div class="d-flex mb-3">
                                                <img src="../../assets/images/png/degree-2.png" alt="" />
                                                <div class="ms-2">
                                                    <small class="text-body">A&B College 1980</small>
                                                    <h6 class="mb-0">MBA in Business Analytics</h6>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="home-academy.html#">
                                            <div class="d-flex mb-3">
                                                <img src="../../assets/images/png/degree-3.png" alt="" />
                                                <div class="ms-2">
                                                    <small class="text-body">Imperial College London</small>
                                                    <h6 class="mb-0">Master of Science in Machine</h6>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="home-academy.html#">
                                            <div class="d-flex mb-3">
                                                <img src="../../assets/images/png/degree-4.png" alt="" />
                                                <div class="ms-2">
                                                    <small class="text-body">University of Colorado</small>
                                                    <h6 class="mb-0">Master of Computer Science</h6>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="mt-4">
                                            <a href="home-academy.html#" class="btn btn-outline-primary btn-sm">View all degree</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-12 mt-4 mt-lg-0">
                                    <div class="border-bottom pb-2 mb-3">
                                        <h5 class="mb-0">Certificate Programs</h5>
                                    </div>
                                    <div>
                                        <a href="home-academy.html#">
                                            <div class="d-flex mb-3">
                                                <img src="../../assets/images/png/google.png" alt="" />
                                                <div class="ms-2">
                                                    <small class="text-body">No Prerequisites</small>
                                                    <h6 class="mb-0">Google Data Analytics</h6>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="home-academy.html#">
                                            <div class="d-flex mb-3">
                                                <img src="../../assets/images/png/IBM.png" alt="" />
                                                <div class="ms-2">
                                                    <small class="text-body">No Prerequisites</small>
                                                    <h6 class="mb-0">IBM Data Science</h6>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="home-academy.html#">
                                            <div class="d-flex mb-3">
                                                <img src="../../assets/images/png/microsoft.png" alt="" />
                                                <div class="ms-2">
                                                    <small class="text-body">Expert Feedback</small>
                                                    <h6 class="mb-0">Machine Leaning for Analytics</h6>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="home-academy.html#">
                                            <div class="d-flex mb-3">
                                                <img src="../../assets/images/png/tensorflow.png" alt="" />
                                                <div class="ms-2">
                                                    <small class="text-body">Certification Prerequisites</small>
                                                    <h6 class="mb-0">TensorFlow Developer Certificate</h6>
                                                </div>
                                            </div>
                                        </a>
                                        <a href="home-academy.html#">
                                            <div class="d-flex mb-3">
                                                <img src="../../assets/images/png/meta.png" alt="" />
                                                <div class="ms-2">
                                                    <small class="text-body">University of Colorado</small>
                                                    <h6 class="mb-0">Meta Marketing Analytics</h6>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="mt-4">
                                            <a href="home-academy.html#" class="btn btn-outline-primary btn-sm">View all Certificates</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-12 mt-4 mt-lg-0">
                                    <div class="border-bottom pb-2 mb-3">
                                        <h5 class="mb-0">Popular Skills</h5>
                                    </div>
                                    <div>
                                        <ul class="nav flex-column">
                                            <li class="nav-item">
                                                <a href="home-academy.html#" class="nav-link">Python</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="home-academy.html#" class="nav-link">SQL</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="home-academy.html#" class="nav-link">Microsoft Excel</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="home-academy.html#" class="nav-link">Machine Learning</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="home-academy.html#" class="nav-link">Data Science</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="home-academy.html#" class="nav-link">Data Analytics</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="home-academy.html#" class="nav-link">Power BI</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="home-academy.html#" class="nav-link">Artificial Intelligence</a>
                                            </li>
                                        </ul>

                                        <div class="mt-4">
                                            <a href="home-academy.html#" class="btn btn-outline-primary btn-sm">View all Skills</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
