<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon"
          href="https://geeksui.codescandy.com/geeks/assets/images/favicon/favicon.ico">

    @include('components.styles')

    <link rel="canonical" href="https://geeksui.codescandy.com/geeks/pages/dashboard/admin-dashboard.html">
    <title>Dashboard | Geeks - Bootstrap 5 Admin Dashboard Template</title>
</head>

<body>
<!-- Wrapper -->
<div id="db-wrapper">
    <!-- navbar vertical -->
    <!-- Sidebar -->
    <nav class="navbar-vertical navbar">
        <div class="vh-100 simplebar-scrollable-y" data-simplebar="init">
            <div class="simplebar-wrapper" style="margin: 0px;">
                <div class="simplebar-height-auto-observer-wrapper">
                    <div class="simplebar-height-auto-observer"></div>
                </div>
                <div class="simplebar-mask">
                    <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                        <div class="simplebar-content-wrapper" tabindex="0" role="region"
                             aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;">
                            <div class="simplebar-content" style="padding: 0px;">
                                <!-- Brand logo -->
                                <a class="navbar-brand" href="https://geeksui.codescandy.com/geeks/index.html">
                                    <img
                                        src="Dashboard%20Geeks%20-%20Bootstrap%205%20Admin%20Dashboard%20Template_files/logo-inverse.svg"
                                        alt="Geeks">
                                </a>
                                <!-- Navbar nav -->
                                <ul class="navbar-nav flex-column" id="sideNavbar">
                                    <li class="nav-item">
                                        <a class="nav-link " href="#" data-bs-toggle="collapse"
                                           data-bs-target="#navDashboard" aria-expanded="false"
                                           aria-controls="navDashboard">
                                            <i class="nav-icon fe fe-home me-2"></i>
                                            Dashboard
                                        </a>
                                        <div id="navDashboard" class="collapse  show " data-bs-parent="#sideNavbar">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link  active "
                                                       href="https://geeksui.codescandy.com/geeks/pages/dashboard/admin-dashboard.html">Overview</a>
                                                </li>
                                                <!-- Nav item -->
                                                <li class="nav-item">
                                                    <a class="nav-link "
                                                       href="https://geeksui.codescandy.com/geeks/pages/dashboard/dashboard-analytics.html">Analytics</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link  collapsed " href="#" data-bs-toggle="collapse"
                                           data-bs-target="#navCourses" aria-expanded="false"
                                           aria-controls="navCourses">
                                            <i class="nav-icon fe fe-book me-2"></i>
                                            Quiz
                                        </a>
                                        <div id="navCourses" class="collapse " data-bs-parent="#sideNavbar">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link "
                                                       href="{{ route('admin.quizzes') }}">All
                                                        Quizzes</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link "
                                                       href="{{ route('admin.categories') }}">Quiz Category</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link "
                                                       href="https://geeksui.codescandy.com/geeks/pages/dashboard/admin-course-category-single.html">Category
                                                        Single</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <!-- Nav item -->
                                    <li class="nav-item">
                                        <a class="nav-link  collapsed " href="#" data-bs-toggle="collapse"
                                           data-bs-target="#navProfile" aria-expanded="false"
                                           aria-controls="navProfile">
                                            <i class="nav-icon fe fe-user me-2"></i>
                                            User
                                        </a>
                                        <div id="navProfile" class="collapse " data-bs-parent="#sideNavbar">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link "
                                                       href="https://geeksui.codescandy.com/geeks/pages/dashboard/admin-instructor.html">Instructor</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link "
                                                       href="https://geeksui.codescandy.com/geeks/pages/dashboard/admin-students.html">Students</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>

                                    <!-- Nav item -->
                                    <li class="nav-item">
                                        <a class="nav-link  collapsed " href="#" data-bs-toggle="collapse"
                                           data-bs-target="#navCMS" aria-expanded="false" aria-controls="navCMS">
                                            <i class="nav-icon fe fe-book-open me-2"></i>
                                            CMS
                                        </a>
                                        <div id="navCMS" class="collapse " data-bs-parent="#sideNavbar">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link  active "
                                                       href="https://geeksui.codescandy.com/geeks/pages/dashboard/admin-cms-overview.html">Overview</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link "
                                                       href="https://geeksui.codescandy.com/geeks/pages/dashboard/admin-cms-post.html">All
                                                        Post</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link "
                                                       href="https://geeksui.codescandy.com/geeks/pages/dashboard/admin-cms-post-new.html">New
                                                        Post</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link "
                                                       href="https://geeksui.codescandy.com/geeks/pages/dashboard/admin-cms-post-category.html">Category</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <!-- Nav item -->
                                    <li class="nav-item">
                                        <a class="nav-link  collapsed " href="#" data-bs-toggle="collapse"
                                           data-bs-target="#navProject" aria-expanded="false"
                                           aria-controls="navProject">
                                            <i class="nav-icon fe fe-file me-2"></i>
                                            Project
                                        </a>
                                        <div id="navProject" class="collapse " data-bs-parent="#sideNavbar">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link "
                                                       href="https://geeksui.codescandy.com/geeks/pages/dashboard/project-grid.html">Grid</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link "
                                                       href="https://geeksui.codescandy.com/geeks/pages/dashboard/project-list.html">List</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link  collapsed " href="#" data-bs-toggle="collapse"
                                                       data-bs-target="#navprojectSingle" aria-expanded="false"
                                                       aria-controls="navprojectSingle">
                                                        Single
                                                    </a>
                                                    <div id="navprojectSingle" class="collapse "
                                                         data-bs-parent="#navProject">
                                                        <ul class="nav flex-column">
                                                            <li class="nav-item">
                                                                <a class="nav-link  active "
                                                                   href="https://geeksui.codescandy.com/geeks/pages/dashboard/project-overview.html">Overview</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link "
                                                                   href="https://geeksui.codescandy.com/geeks/pages/dashboard/project-task.html">Task</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link "
                                                                   href="https://geeksui.codescandy.com/geeks/pages/dashboard/project-budget.html">Budget</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link "
                                                                   href="https://geeksui.codescandy.com/geeks/pages/dashboard/project-team.html">Team</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link "
                                                                   href="https://geeksui.codescandy.com/geeks/pages/dashboard/project-files.html">Files</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link "
                                                                   href="https://geeksui.codescandy.com/geeks/pages/dashboard/project-summary.html">Summary</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link "
                                                       href="https://geeksui.codescandy.com/geeks/pages/dashboard/add-project.html">Create
                                                        Project</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <!-- Nav item -->
                                    <li class="nav-item">
                                        <a class="nav-link  collapsed " href="#" data-bs-toggle="collapse"
                                           data-bs-target="#navAuthentication" aria-expanded="false"
                                           aria-controls="navAuthentication">
                                            <i class="nav-icon fe fe-lock me-2"></i>
                                            Authentication
                                        </a>
                                        <div id="navAuthentication" class="collapse " data-bs-parent="#sideNavbar">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link "
                                                       href="https://geeksui.codescandy.com/geeks/pages/sign-in.html">Sign
                                                        In</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link "
                                                       href="https://geeksui.codescandy.com/geeks/pages/sign-up.html">Sign
                                                        Up</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link "
                                                       href="https://geeksui.codescandy.com/geeks/pages/forget-password.html">Forget
                                                        Password</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link "
                                                       href="https://geeksui.codescandy.com/geeks/pages/dashboard/notification-history.html">Notifications</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link "
                                                       href="https://geeksui.codescandy.com/geeks/pages/404-error.html">404
                                                        Error</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <!-- Nav item -->
                                    <li class="nav-item">
                                        <a class="nav-link  collapsed " href="#" data-bs-toggle="collapse"
                                           data-bs-target="#navecommerce" aria-expanded="false"
                                           aria-controls="navecommerce">
                                            <i class="nav-icon fe fe-shopping-bag me-2"></i>
                                            Ecommerce
                                        </a>
                                        <div id="navecommerce" class="collapse " data-bs-parent="#sideNavbar">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link  collapsed " href="#" data-bs-toggle="collapse"
                                                       data-bs-target="#navproduct" aria-expanded="false"
                                                       aria-controls="navproduct">
                                                        Product
                                                    </a>
                                                    <div id="navproduct" class="collapse " data-bs-parent="#navProduct">
                                                        <ul class="nav flex-column">
                                                            <li class="nav-item">
                                                                <a class="nav-link "
                                                                   href="https://geeksui.codescandy.com/geeks/pages/dashboard/ecommerce/product-grid.html">Grid</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link "
                                                                   href="https://geeksui.codescandy.com/geeks/pages/dashboard/ecommerce/product-grid-with-sidebar.html">Grid
                                                                    Sidebar</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link "
                                                                   href="https://geeksui.codescandy.com/geeks/pages/dashboard/ecommerce/products.html">Products</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link "
                                                                   href="https://geeksui.codescandy.com/geeks/pages/dashboard/ecommerce/product-single.html">Product
                                                                    Single</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link "
                                                                   href="https://geeksui.codescandy.com/geeks/pages/dashboard/ecommerce/product-single-v2.html">Product
                                                                    Single v2</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link "
                                                                   href="https://geeksui.codescandy.com/geeks/pages/dashboard/ecommerce/add-product.html">Add
                                                                    Product</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link "
                                                       href="https://geeksui.codescandy.com/geeks/pages/dashboard/ecommerce/shopping-cart.html">Shopping
                                                        Cart</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link "
                                                       href="https://geeksui.codescandy.com/geeks/pages/dashboard/ecommerce/checkout.html">Checkout</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link "
                                                       href="https://geeksui.codescandy.com/geeks/pages/dashboard/ecommerce/order.html">Order</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link "
                                                       href="https://geeksui.codescandy.com/geeks/pages/dashboard/ecommerce/order-single.html">Order
                                                        Single</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link "
                                                       href="https://geeksui.codescandy.com/geeks/pages/dashboard/ecommerce/order-history.html">Order
                                                        History</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link "
                                                       href="https://geeksui.codescandy.com/geeks/pages/dashboard/ecommerce/order-summary.html">Order
                                                        Summary</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a class="nav-link "
                                                       href="https://geeksui.codescandy.com/geeks/pages/dashboard/ecommerce/customers.html">Customers</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link "
                                                       href="https://geeksui.codescandy.com/geeks/pages/dashboard/ecommerce/customer-single.html">Customer
                                                        Single</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link "
                                                       href="https://geeksui.codescandy.com/geeks/pages/dashboard/ecommerce/add-customer.html">Add
                                                        Customer</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <!-- Nav item -->
                                    <li class="nav-item">
                                        <a class="nav-link  collapsed " href="#" data-bs-toggle="collapse"
                                           data-bs-target="#navlayouts" aria-expanded="false"
                                           aria-controls="navlayouts">
                                            <i class="nav-icon fe fe-layout me-2"></i>
                                            Layouts
                                        </a>
                                        <div id="navlayouts" class="collapse " data-bs-parent="#sideNavbar">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link "
                                                       href="https://geeksui.codescandy.com/geeks/pages/dashboard/layouts/layout-horizontal.html">Top</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a class="nav-link "
                                                       href="https://geeksui.codescandy.com/geeks/pages/dashboard/layouts/layout-compact.html">Compact</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link "
                                                       href="https://geeksui.codescandy.com/geeks/pages/dashboard/layouts/layout-vertical.html">Vertical</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <!-- Nav item -->
                                    <li class="nav-item">
                                        <div class="nav-divider"></div>
                                    </li>
                                    <!-- Nav item -->
                                    <li class="nav-item">
                                        <div class="navbar-heading">Apps</div>
                                    </li>
                                    <!-- Nav item -->
                                    <li class="nav-item">
                                        <a class="nav-link "
                                           href="https://geeksui.codescandy.com/geeks/pages/dashboard/chat-app.html">
                                            <i class="nav-icon fe fe-message-square me-2"></i>
                                            Chat
                                        </a>
                                    </li>
                                    <!-- Nav item -->
                                    <li class="nav-item">
                                        <a class="nav-link "
                                           href="https://geeksui.codescandy.com/geeks/pages/dashboard/task-kanban.html">
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                 class="feather feather-trello">
              <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
              <rect x="7" y="7" width="3" height="9"></rect>
              <rect x="14" y="7" width="3" height="5"></rect>
            </svg>
          </span>
                                            <span class="ms-2">Task</span>
                                        </a>
                                    </li>
                                    <!-- Nav item -->
                                    <li class="nav-item">
                                        <a class="nav-link "
                                           href="https://geeksui.codescandy.com/geeks/pages/dashboard/mail.html">
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                 class="feather feather-mail">
              <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
              <polyline points="22,6 12,13 2,6"></polyline>
            </svg>
          </span>
                                            <span class="ms-2">Mail</span>
                                        </a>
                                    </li>
                                    <!-- Nav item -->
                                    <li class="nav-item">
                                        <a class="nav-link "
                                           href="https://geeksui.codescandy.com/geeks/pages/dashboard/calendar.html">
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                 stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                 class="feather feather-calendar">
              <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
              <line x1="16" y1="2" x2="16" y2="6"></line>
              <line x1="8" y1="2" x2="8" y2="6"></line>
              <line x1="3" y1="10" x2="21" y2="10"></line>
            </svg>
          </span>
                                            <span class="ms-2">Calendar</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <div class="nav-divider"></div>
                                    </li>
                                    <!-- Nav item -->
                                    <li class="nav-item">
                                        <div class="navbar-heading">Components</div>
                                    </li>
                                    <!-- Nav item -->
                                    <li class="nav-item">
                                        <a class="nav-link  collapsed " href="#" data-bs-toggle="collapse"
                                           data-bs-target="#navTables" aria-expanded="false" aria-controls="navTables">
                                            <i class="nav-icon fe fe-database me-2"></i>
                                            Tables
                                        </a>
                                        <div id="navTables" class="collapse " data-bs-parent="#sideNavbar">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link "
                                                       href="https://geeksui.codescandy.com/geeks/pages/dashboard/basic-table.html">Basic</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link "
                                                       href="https://geeksui.codescandy.com/geeks/pages/dashboard/datatables.html">Data
                                                        Tables</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <!-- Nav item -->
                                    <!-- Nav item -->
                                    <li class="nav-item">
                                        <a class="nav-link "
                                           href="https://geeksui.codescandy.com/geeks/pages/help-center.html">
                                            <i class="nav-icon fe fe-help-circle me-2"></i>
                                            Help Center
                                        </a>
                                    </li>
                                    <!-- Nav item -->
                                    <li class="nav-item">
                                        <a class="nav-link  collapsed " href="#" data-bs-toggle="collapse"
                                           data-bs-target="#navSiteSetting" aria-expanded="false"
                                           aria-controls="navSiteSetting">
                                            <i class="nav-icon fe fe-settings me-2"></i>
                                            Site Setting
                                        </a>
                                        <div id="navSiteSetting" class="collapse " data-bs-parent="#sideNavbar">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link "
                                                       href="https://geeksui.codescandy.com/geeks/pages/dashboard/setting-general.html">General</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link "
                                                       href="https://geeksui.codescandy.com/geeks/pages/dashboard/setting-google.html">Google</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link "
                                                       href="https://geeksui.codescandy.com/geeks/pages/dashboard/setting-social.html">Social</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link "
                                                       href="https://geeksui.codescandy.com/geeks/pages/dashboard/setting-social-login.html">Social
                                                        Login</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link "
                                                       href="https://geeksui.codescandy.com/geeks/pages/dashboard/setting-payment.html">Payment</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link "
                                                       href="https://geeksui.codescandy.com/geeks/pages/dashboard/setting-smpt.html">SMPT</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <!-- Nav item -->
                                    <li class="nav-item">
                                        <a class="nav-link  collapsed " href="#" data-bs-toggle="collapse"
                                           data-bs-target="#navMenuLevel" aria-expanded="false"
                                           aria-controls="navMenuLevel">
                                            <i class="nav-icon fe fe-corner-left-down me-2"></i>
                                            Menu Level
                                        </a>
                                        <div id="navMenuLevel" class="collapse " data-bs-parent="#sideNavbar">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link " href="#" data-bs-toggle="collapse"
                                                       data-bs-target="#navMenuLevelSecond" aria-expanded="false"
                                                       aria-controls="navMenuLevelSecond">
                                                        Two Level
                                                    </a>
                                                    <div id="navMenuLevelSecond" class="collapse"
                                                         data-bs-parent="#navMenuLevel">
                                                        <ul class="nav flex-column">
                                                            <li class="nav-item">
                                                                <a class="nav-link " href="#">NavItem 1</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link " href="#">NavItem 2</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link  collapsed " href="#" data-bs-toggle="collapse"
                                                       data-bs-target="#navMenuLevelThree" aria-expanded="false"
                                                       aria-controls="navMenuLevelThree">
                                                        Three Level
                                                    </a>
                                                    <div id="navMenuLevelThree" class="collapse "
                                                         data-bs-parent="#navMenuLevel">
                                                        <ul class="nav flex-column">
                                                            <li class="nav-item">
                                                                <a class="nav-link  collapsed " href="#"
                                                                   data-bs-toggle="collapse"
                                                                   data-bs-target="#navMenuLevelThreeOne"
                                                                   aria-expanded="false"
                                                                   aria-controls="navMenuLevelThreeOne">
                                                                    NavItem 1
                                                                </a>
                                                                <div id="navMenuLevelThreeOne"
                                                                     class="collapse collapse "
                                                                     data-bs-parent="#navMenuLevelThree">
                                                                    <ul class="nav flex-column">
                                                                        <li class="nav-item">
                                                                            <a class="nav-link " href="#">NavChild Item
                                                                                1</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link " href="#">Nav Item 2</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <!-- Nav item -->
                                    <li class="nav-item">
                                        <div class="nav-divider"></div>
                                    </li>
                                    <!-- Nav item -->
                                    <li class="nav-item">
                                        <div class="navbar-heading">Documentation</div>
                                    </li>
                                    <!-- Nav item -->
                                    <li class="nav-item">
                                        <a class="nav-link" href="https://geeksui.codescandy.com/geeks/docs/index.html">
                                            <i class="nav-icon fe fe-clipboard me-2"></i>
                                            Documentation
                                        </a>
                                    </li>
                                    <!-- Nav item -->
                                    <li class="nav-item">
                                        <a class="nav-link"
                                           href="https://geeksui.codescandy.com/geeks/docs/changelog.html">
                                            <i class="nav-icon fe fe-git-pull-request me-2"></i>
                                            Changelog
                                            <span class="text-primary ms-1" id="changelog">v3.3.2</span>
                                        </a>
                                    </li>
                                </ul>
                                <!-- Card -->
                                <div class="card bg-dark-primary shadow-none text-center mx-4 my-8 border-0">
                                    <div class="card-body py-6">
                                        <img
                                            src="Dashboard%20Geeks%20-%20Bootstrap%205%20Admin%20Dashboard%20Template_files/giftbox.png"
                                            alt="">
                                        <div class="mt-4">
                                            <h5 class="text-white">Unlimited Access</h5>
                                            <p class="text-white-50 fs-6">Upgrade your plan from a Free trial, to select
                                                ‘Business Plan’. Start Now</p>
                                            <a href="#" class="btn btn-white btn-sm mt-2">Upgrade Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="simplebar-placeholder" style="width: 250px; height: 1502px;"></div>
            </div>
            <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
            </div>
            <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                <div class="simplebar-scrollbar"
                     style="height: 557px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <main id="page-content">
        <div class="header">
            <!-- navbar -->
            <nav class="navbar-default navbar navbar-expand-lg">
                <a id="nav-toggle" href="#">
                    <i class="fe fe-menu"></i>
                </a>
                <div class="ms-lg-3 d-none d-md-none d-lg-block">
                    <!-- Form -->
                    <form class="d-flex align-items-center">
                <span class="position-absolute ps-3 search-icon">
                    <i class="fe fe-search"></i>
                </span>
                        <input type="search" class="form-control ps-6" placeholder="Search Entire Dashboard">
                    </form>
                </div>
                <!--Navbar nav -->
                <div class="ms-auto d-flex">
                    <div class="dropdown">
                        <button class="btn btn-light btn-icon rounded-circle d-flex align-items-center" type="button"
                                aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
                            <i class="bi theme-icon-active"><i class="bi theme-icon bi-moon-stars-fill"></i></i>
                            <span class="visually-hidden bs-theme-text">Toggle theme</span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bs-theme-text">
                            <li>
                                <button type="button" class="dropdown-item d-flex align-items-center"
                                        data-bs-theme-value="light" aria-pressed="false">
                                    <i class="bi theme-icon bi-sun-fill"></i>
                                    <span class="ms-2">Light</span>
                                </button>
                            </li>
                            <li>
                                <button type="button" class="dropdown-item d-flex align-items-center active"
                                        data-bs-theme-value="dark" aria-pressed="true">
                                    <i class="bi theme-icon bi-moon-stars-fill"></i>
                                    <span class="ms-2">Dark</span>
                                </button>
                            </li>
                            <li>
                                <button type="button" class="dropdown-item d-flex align-items-center"
                                        data-bs-theme-value="auto" aria-pressed="false">
                                    <i class="bi theme-icon bi-circle-half"></i>
                                    <span class="ms-2">Auto</span>
                                </button>
                            </li>
                        </ul>
                    </div>
                    <ul class="navbar-nav navbar-right-wrap ms-2 d-flex nav-top-wrap">
                        <li class="dropdown stopevent">
                            <a class="btn btn-light btn-icon rounded-circle indicator indicator-primary" href="#"
                               role="button" id="dropdownNotification" data-bs-toggle="dropdown" aria-haspopup="true"
                               aria-expanded="false">
                                <i class="fe fe-bell"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg"
                                 aria-labelledby="dropdownNotification">
                                <div>
                                    <div
                                        class="border-bottom px-3 pb-3 d-flex justify-content-between align-items-center">
                                        <span class="h4 mb-0">Notifications</span>
                                        <a href="# ">
                                    <span class="align-middle">
                                        <i class="fe fe-settings me-1"></i>
                                    </span>
                                        </a>
                                    </div>
                                    <!-- List group -->
                                    <ul class="list-group list-group-flush simplebar-scrollable-y" data-simplebar="init"
                                        style="max-height: 300px">
                                        <div class="simplebar-wrapper" style="margin: 0px;">
                                            <div class="simplebar-height-auto-observer-wrapper">
                                                <div class="simplebar-height-auto-observer"></div>
                                            </div>
                                            <div class="simplebar-mask">
                                                <div class="simplebar-offset" style="right: 0px; bottom: 0px;">
                                                    <div class="simplebar-content-wrapper" tabindex="0" role="region"
                                                         aria-label="scrollable content"
                                                         style="height: auto; overflow: hidden scroll;">
                                                        <div class="simplebar-content" style="padding: 0px;">
                                                            <li class="list-group-item bg-light">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <a class="text-body" href="#">
                                                                            <div class="d-flex">
                                                                                <img
                                                                                    src="Dashboard%20Geeks%20-%20Bootstrap%205%20Admin%20Dashboard%20Template_files/avatar-1.jpg"
                                                                                    alt=""
                                                                                    class="avatar-md rounded-circle">
                                                                                <div class="ms-3">
                                                                                    <h5 class="fw-bold mb-1">Kristin
                                                                                        Watson:</h5>
                                                                                    <p class="mb-3">Krisitn Watsan like
                                                                                        your comment on course
                                                                                        Javascript Introduction!</p>
                                                                                    <span class="fs-6">
                                                            <span>
                                                                <span class="fe fe-thumbs-up text-success me-1"></span>
                                                                2 hours ago,
                                                            </span>
                                                            <span class="ms-1">2:19 PM</span>
                                                        </span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-auto text-center me-2">
                                                                        <a href="#" class="badge-dot bg-info"
                                                                           data-bs-toggle="tooltip"
                                                                           data-bs-placement="top"
                                                                           aria-label="Mark as read"
                                                                           data-bs-original-title="Mark as read"></a>
                                                                        <div>
                                                                            <a href="#" class="bg-transparent"
                                                                               data-bs-toggle="tooltip"
                                                                               data-bs-placement="top"
                                                                               aria-label="Remove"
                                                                               data-bs-original-title="Remove">
                                                                                <i class="fe fe-x"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <a class="text-body" href="#">
                                                                            <div class="d-flex">
                                                                                <img
                                                                                    src="Dashboard%20Geeks%20-%20Bootstrap%205%20Admin%20Dashboard%20Template_files/avatar-2.jpg"
                                                                                    alt=""
                                                                                    class="avatar-md rounded-circle">
                                                                                <div class="ms-3">
                                                                                    <h5 class="fw-bold mb-1">Brooklyn
                                                                                        Simmons</h5>
                                                                                    <p class="mb-3">Just launched a new
                                                                                        Courses React for Beginner.</p>
                                                                                    <span class="fs-6">
                                                            <span>
                                                                <span class="fe fe-thumbs-up text-success me-1"></span>
                                                                Oct 9,
                                                            </span>
                                                            <span class="ms-1">1:20 PM</span>
                                                        </span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-auto text-center me-2">
                                                                        <a href="#" class="badge-dot bg-secondary"
                                                                           data-bs-toggle="tooltip"
                                                                           data-bs-placement="top"
                                                                           aria-label="Mark as unread"
                                                                           data-bs-original-title="Mark as unread"></a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <a class="text-body" href="#">
                                                                            <div class="d-flex">
                                                                                <img
                                                                                    src="Dashboard%20Geeks%20-%20Bootstrap%205%20Admin%20Dashboard%20Template_files/avatar-3.jpg"
                                                                                    alt=""
                                                                                    class="avatar-md rounded-circle">
                                                                                <div class="ms-3">
                                                                                    <h5 class="fw-bold mb-1">Jenny
                                                                                        Wilson</h5>
                                                                                    <p class="mb-3">Krisitn Watsan like
                                                                                        your comment on course
                                                                                        Javascript Introduction!</p>
                                                                                    <span class="fs-6">
                                                            <span>
                                                                <span class="fe fe-thumbs-up text-info me-1"></span>
                                                                Oct 9,
                                                            </span>
                                                            <span class="ms-1">1:56 PM</span>
                                                        </span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-auto text-center me-2">
                                                                        <a href="#" class="badge-dot bg-secondary"
                                                                           data-bs-toggle="tooltip"
                                                                           data-bs-placement="top"
                                                                           aria-label="Mark as unread"
                                                                           data-bs-original-title="Mark as unread"></a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="list-group-item">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <a class="text-body" href="#">
                                                                            <div class="d-flex">
                                                                                <img
                                                                                    src="Dashboard%20Geeks%20-%20Bootstrap%205%20Admin%20Dashboard%20Template_files/avatar-4.jpg"
                                                                                    alt=""
                                                                                    class="avatar-md rounded-circle">
                                                                                <div class="ms-3">
                                                                                    <h5 class="fw-bold mb-1">Sina
                                                                                        Ray</h5>
                                                                                    <p class="mb-3">You earn new
                                                                                        certificate for complete the
                                                                                        Javascript Beginner course.</p>
                                                                                    <span class="fs-6">
                                                            <span>
                                                                <span class="fe fe-award text-warning me-1"></span>
                                                                Oct 9,
                                                            </span>
                                                            <span class="ms-1">1:56 PM</span>
                                                        </span>
                                                                                </div>
                                                                            </div>
                                                                        </a>
                                                                    </div>
                                                                    <div class="col-auto text-center me-2">
                                                                        <a href="#" class="badge-dot bg-secondary"
                                                                           data-bs-toggle="tooltip"
                                                                           data-bs-placement="top"
                                                                           aria-label="Mark as unread"
                                                                           data-bs-original-title="Mark as unread"></a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="simplebar-placeholder"
                                                 style="width: 328px; height: 595px;"></div>
                                        </div>
                                        <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                            <div class="simplebar-scrollbar" style="width: 0px; display: none;"></div>
                                        </div>
                                        <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                            <div class="simplebar-scrollbar"
                                                 style="height: 151px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
                                        </div>
                                    </ul>
                                    <div class="border-top px-3 pt-3 pb-0">
                                        <a href="https://geeksui.codescandy.com/geeks/pages/notification-history.html"
                                           class="text-link fw-semibold">See all Notifications</a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- List -->
                        <li class="dropdown ms-2">
                            <a class="rounded-circle" href="#" role="button" id="dropdownUser" data-bs-toggle="dropdown"
                               aria-expanded="false">
                                <div class="avatar avatar-md avatar-indicators avatar-online">
                                    <img alt="avatar"
                                         src="Dashboard%20Geeks%20-%20Bootstrap%205%20Admin%20Dashboard%20Template_files/avatar-1.jpg"
                                         class="rounded-circle">
                                </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser">
                                <div class="dropdown-item">
                                    <div class="d-flex">
                                        <div class="avatar avatar-md avatar-indicators avatar-online">
                                            <img alt="avatar"
                                                 src="Dashboard%20Geeks%20-%20Bootstrap%205%20Admin%20Dashboard%20Template_files/avatar-1.jpg"
                                                 class="rounded-circle">
                                        </div>
                                        <div class="ms-3 lh-1">
                                            <h5 class="mb-1">Annette Black</h5>
                                            <p class="mb-0">annette@geeksui.com</p>
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
                                        <a class="dropdown-item"
                                           href="https://geeksui.codescandy.com/geeks/pages/profile-edit.html">
                                            <i class="fe fe-user me-2"></i>
                                            Profile
                                        </a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item"
                                           href="https://geeksui.codescandy.com/geeks/pages/student-subscriptions.html">
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
                                        <a class="dropdown-item" href="https://geeksui.codescandy.com/geeks/index.html">
                                            <i class="fe fe-power me-2"></i>
                                            Sign Out
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <!-- Page Header -->
        <!-- Container fluid -->
        @yield('content')
    </main>
</div>

<!-- Script -->

@include('components.scripts')
</body>
</html>
