@extends('layouts.app')

@section('content')
    @include('components.profile-sidebar')

    <div class="db-content">
        <div class="container mb-4">
            <div class="row mb-5">
                <div class="col-12">
                    <h1 class="h2 mb-0">Security</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <!-- Card -->
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header">
                            <h3 class="mb-0">Security</h3>
                            <p class="mb-0">Edit your account settings and change your password here.</p>
                        </div>
                        <!-- Card body -->
                        <div class="card-body">
                            <h4 class="mb-0">Email Address</h4>
                            <p>
                                Your current email address is
                                <span class="text-success">{{ auth()->user()->email }}</span>
                            </p>
                            <form class="row needs-validation" action="{{ route('account.update.email') }}" method="POST" novalidate>
                                @csrf
                                <div class="mb-3 col-lg-6 col-md-12 col-12">
                                    <label class="form-label" for="securityNewEmail">New email address</label>
                                    <input id="securityNewEmail" type="email" name="securityNewEmail" class="form-control" placeholder="" required="">
                                    <div class="invalid-feedback">Please Enter email address</div>
                                    <button type="submit" class="btn btn-primary mt-2">Update Details</button>
                                    @if(session('success'))
                                        <div class="alert alert-success mt-4">
                                            {{ session('success') }}
                                        </div>
                                    @endif
                                </div>
                            </form>
                            <hr class="my-5">
                            <div>
                                <h4 class="mb-0">Change Password</h4>
                                <p>We will email you a confirmation when changing your password, so please expect that email after submitting.</p>
                                <!-- Form -->
                                <form class="row needs-validation" action="{{ route('account.update.password') }}" method="POST" novalidate>
                                    @csrf
                                    <div class="col-lg-6 col-md-12 col-12">
                                        <!-- Current password -->
                                        <div class="mb-3">
                                            <label class="form-label" for="securityCurrentPass">Current password</label>
                                            <input id="securityCurrentPass" type="password" name="securityCurrentPass" class="form-control" placeholder="" required="">
                                            <div class="invalid-feedback">Please enter current password.</div>
                                        </div>
                                        <!-- New password -->
                                        <div class="mb-3 password-field">
                                            <label class="form-label" for="securityNewPass">New password</label>
                                            <input id="securityNewPass" type="password" name="securityNewPass" class="form-control mb-2" placeholder="" required="">
                                            <div class="invalid-feedback">Please enter new password.</div>
                                            <div class="row align-items-center g-0">
                                                <div class="col-6">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <!-- Confirm new password -->
                                            <label class="form-label" for="securityConfirmPass">Confirm New Password</label>
                                            <input id="securityConfirmPass" type="password" name="securityConfirmPass" class="form-control mb-2" placeholder="" required="">
                                            <div class="invalid-feedback">Please enter confirm new password.</div>
                                        </div>
                                        <!-- Button -->
                                        <button type="submit" class="btn btn-primary">Save Password</button>
                                        @if(session('success'))
                                            <div class="alert alert-success mt-4">
                                                {{ session('success') }}
                                            </div>
                                        @endif

                                        @if(session('errors'))
                                            <div class="alert alert-danger mt-4">
                                                {{ session('errors') }}
                                            </div>
                                        @endif
                                    </div>
                                    <div class="col-12 mt-4">
                                        <p class="mb-0">
                                            Can't remember your current password?
                                            <a href="#">Reset your password via email</a>
                                        </p>
                                    </div>
                                </form>
                            </div>
                            <hr class="my-5">
                            <div>
                                <h4 class="mb-0">Two-Factor Authentication</h4>
                                <p>Secure your account with two-factor authentication using Google Authenticator.</p>

                                @if(auth()->user()->google2fa_enabled)
                                    <form method="POST" action="{{ route('2fa.disable') }}">
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Disable Two-Factor Authentication</button>
                                    </form>
                                @elseif(isset($qrCodeUrl) && isset($secret))
                                    <div class="mb-3">
                                        <img src="{{ $qrCodeUrl }}" alt="QR Code">
                                        <p>Secret: {{ $secret }}</p>
                                    </div>
                                    <form method="POST" action="{{ route('2fa.verify') }}">
                                        @csrf
                                        <label for="securityTwoFactorCode" class="form-label">Enter Authentication Code</label>
                                        <input id="securityTwoFactorCode" type="text" name="securityTwoFactorCode" class="form-control" required>
                                        @error('securityTwoFactorCode')
                                        <div class="text-danger">{{ $message }}</div>
                                        @enderror
                                        <button type="submit" class="btn btn-primary mt-2">Verify</button>
                                    </form>
                                @elseif(!isset($qrCodeUrl) && !isset($secret))
                                    <form method="POST" action="{{ route('2fa.enable') }}">
                                        @csrf
                                        <button type="submit" class="btn btn-primary">Enable Two-Factor Authentication</button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<?php
    $hideFooter = true;
?>
