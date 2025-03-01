<?php

use App\Http\Controllers\Auth\Auth2FAController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\SocialAuthController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('sign-up', [RegisteredUserController::class, 'create'])
                ->name('sign-up');

    Route::post('sign-up', [RegisteredUserController::class, 'store'])
                ->name('sign-up.store');


    Route::get('sign-in', [AuthenticatedSessionController::class, 'create'])
                ->name('sign-in');

    Route::post('sign-in', [AuthenticatedSessionController::class, 'store'])
                ->name('sign-in.store');

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.store');

    Route::get('auth/{provider}', [SocialAuthController::class, 'redirect'])
        ->name('auth.provider')
        ->where('provider', 'google|facebook|github');

    Route::get('auth/{provider}/callback', [SocialAuthController::class, 'callback'])
        ->where('provider', 'google|facebook|github');

    Route::post('2fa/verify', [Auth2FAController::class, 'verifyTwoFactor'])->name('2fa.verify');

    Route::view('2fa/confirm', 'auth.2fa.confirm')->name('2fa.confirm');

});

Route::middleware('auth')->group(function () {

    Route::get('verify-email', EmailVerificationPromptController::class)
                ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');

    Route::post('2fa/enable', [Auth2FAController::class, 'enableTwoFactor'])->name('2fa.enable');
    Route::post('2fa/disable', [Auth2FAController::class, 'disableTwoFactor'])->name('2fa.disable');
});
