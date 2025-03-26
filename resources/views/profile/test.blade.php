@extends('layouts.app')

@section('content')
    @include('components.profile-sidebar')
    <div class="container">
        <section class="py-4 py-lg-6 bg-primary">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-1 col-lg-10 col-md-12 col-12">
                        <div class="d-lg-flex align-items-center justify-content-between">
                            <!-- Content -->
                            <div class="mb-4 mb-lg-0">
                                <h1 class="text-white mb-1">Add New Course</h1>
                                <p class="mb-0 text-white lead">Just fill the form and create your courses.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
<?php
$hideFooter = true;
?>
