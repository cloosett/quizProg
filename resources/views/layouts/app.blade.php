<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{asset('libs/glightbox/dist/css/glightbox.min.css')}}" />
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/favicon/favicon.ico') }}" />

    <!-- darkmode js -->
    <script src="{{asset('js/vendors/darkMode.js')}}"></script>

    <!-- Libs CSS -->
    <link href="../../assets/fonts/feather/feather.css" rel="stylesheet" />
    <link href="{{asset('libs/bootstrap-icons/font/bootstrap-icons.min.css')}}" rel="stylesheet" />
    <link href="{{asset('libs/simplebar/dist/simplebar.min.css')}}" rel="stylesheet" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="{{asset('css/theme.min.css')}}">

    <link rel="canonical" href="home-academy.html" />
    <link href="{{asset('libs/tiny-slider/dist/tiny-slider.css')}}" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet" />
    <style>
        .dropdown-toggle::after {
            content: none !important;
        }
    </style>
    <title>QuizProg - Improve yourself skills</title>
</head>

<body class="bg-white">
@if(!isset($hideHeader) || !$hideHeader)
    @include('components.header')
@endif
<!-- Page content -->


<main>
    @yield('content')
</main>
<!-- Footer -->
<!-- footer -->


<!-- Scroll top -->
<div class="btn-scroll-top">
    <svg class="progress-square svg-content" width="100%" height="100%" viewBox="0 0 40 40">
        <path d="M8 1H32C35.866 1 39 4.13401 39 8V32C39 35.866 35.866 39 32 39H8C4.13401 39 1 35.866 1 32V8C1 4.13401 4.13401 1 8 1Z" />
    </svg>
</div>

<!-- Scripts -->
<!-- Libs JS -->
<script src="{{asset('libs/@popperjs/core/dist/umd/popper.min.js')}}"></script>
<script src="{{asset('libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('libs/simplebar/dist/simplebar.min.js')}}"></script>

<!-- Theme JS -->
<script src="{{asset('js/theme.min.js')}}"></script>

<script src="{{asset('libs/tiny-slider/dist/min/tiny-slider.js')}}"></script>
<script src="{{asset('js/vendors/tnsSlider.js')}}"></script>
<script src="{{asset('libs/glightbox/dist/js/glightbox.min.js')}}"></script>
<script src="{{asset('js/vendors/glight.js')}}"></script>
</body>
</html>
