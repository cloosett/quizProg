@extends('layouts.app')

@section('content')
    @include('components.profile-sidebar')


    <div class="db-content">
        <div class="container mb-4">
            <div class="row mb-5">
                <div class="col-12">
                    <h1 class="h2 mb-0">Delete Profile</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- Card -->
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header">
                            <h3 class="mb-0">Delete your account</h3>
                            <p class="mb-0">Delete or Close your account permanently.</p>
                        </div>


                        <form action="{{route('profile.destroy')}}" method="post">
                            @csrf
                            <div class="card-body p-4">
                                <span class="text-danger h4">Warning</span>
                                <p>If you close your account, you will be unsubscribed from all your 0 courses, and will lose access forever.</p>
                                <button type="submit" class="btn btn-danger">Close My Account</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<?php
    $hideFooter = true;
?>
