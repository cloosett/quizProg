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
                                <h1 class="mb-0 fw-bold">Verify</h1>
                            </div>
                        </div>
                        <!-- Form -->
                        <form class="needs-validation" action="{{route('2fa.verify')}}" method="post">
                            @csrf
                            <!-- Username -->
                            <div class="mb-3">
                                <label for="securityTwoFactorCode" class="form-label">2FA Code</label>
                                <input type="text" id="securityTwoFactorCode" class="form-control" name="securityTwoFactorCode" placeholder="Please enter verification code" required="">
                                <div class="invalid-feedback">Please enter valid username.</div>
                            </div>
                            <div>
                                <!-- Button -->
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Verification</button>
                                </div>
                            </div>
                            <hr class="my-4">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@php
    $hideHeader = true;
    $hideFooter = true;
@endphp
