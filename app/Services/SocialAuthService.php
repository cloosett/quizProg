<?php
namespace App\Services;

use App\Models\User;
use App\Repositories\UserAuthSocialRepository;
use Laravel\Socialite\Contracts\User as SocialUser;

class SocialAuthService
{
    protected $userRepository;

    public function __construct(UserAuthSocialRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * Створює або повертає користувача з соціального акаунта.
     *
     * @param SocialUser $socialUser
     * @param string $provider
     * @return User
     */
    public function findOrCreateUser(SocialUser $socialUser, string $provider): User
    {
        $user = $this->userRepository->findUserBySocialId($provider, $socialUser->getId());

        if (!$user) {
            $user = $this->userRepository->findUserByEmail($socialUser->getEmail());

            if (!$user) {
                $user = $this->userRepository->createUser([
                    'name' => $socialUser->getName(),
                    'email' => $socialUser->getEmail(),
                    'password' => bcrypt(uniqid()),
                    "{$provider}_id" => $socialUser->getId(),
                ]);
            } else {
                $user = $this->userRepository->updateUser($user, [
                    "{$provider}_id" => $socialUser->getId(),
                ]);
            }
        }

        return $user;
    }
}
