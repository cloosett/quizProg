<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon icon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('img/favicon/favicon.ico') }}" />

    @include('components.styles')

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
@if(!isset($hideFooter) || !$hideFooter)
    @include('components.footer')
@endif

<!-- Scroll top -->
<div class="btn-scroll-top">
    <svg class="progress-square svg-content" width="100%" height="100%" viewBox="0 0 40 40">
        <path d="M8 1H32C35.866 1 39 4.13401 39 8V32C39 35.866 35.866 39 32 39H8C4.13401 39 1 35.866 1 32V8C1 4.13401 4.13401 1 8 1Z" />
    </svg>
</div>

<!-- Scripts -->
<!-- Libs JS -->
@include('components.scripts')
</body>
</html>
