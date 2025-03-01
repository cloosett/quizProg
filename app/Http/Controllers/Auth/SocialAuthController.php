<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Repositories\UserAuthSocialRepository;
use App\Services\SocialAuthService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialAuthController extends Controller
{
    protected $socialAuthService;
    protected $userRepository;

    public function __construct(SocialAuthService $socialAuthService, UserAuthSocialRepository $userRepository)
    {
        $this->socialAuthService = $socialAuthService;
        $this->userRepository = $userRepository;
    }

    /**
     * Перенаправлення на провайдера для авторизації
     *
     * @param string $provider
     * @return \Illuminate\Http\RedirectResponse
     */
    public function redirect(string $provider)
    {
        return Socialite::driver($provider)->with(["prompt" => "select_account"])->redirect();
    }

    /**
     * Обробка callback після авторизації через соціальний акаунт
     *
     * @param string $provider
     * @return \Illuminate\Http\RedirectResponse
     */
    public function callback(string $provider)
    {
        try {
            $socialUser = Socialite::driver($provider)->user();

            $user = $this->socialAuthService->findOrCreateUser($socialUser, $provider);

            Auth::login($user);

            return redirect()->route('/profile/dashboard');
        } catch (\Exception $e) {
            return redirect()->route('sign-in')->with('errors', 'Помилка авторизації через ' . $provider);
        }
    }
}
