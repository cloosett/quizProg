<?php
namespace App\Repositories;

use App\Models\User;

class UserAuthSocialRepository
{
    /**
     * Знайти користувача по соціальному ID.
     *
     * @param string $provider
     * @param string $socialId
     * @return User|null
     */
    public function findUserBySocialId(string $provider, string $socialId): ?User
    {
        return User::where("{$provider}_id", $socialId)->first();
    }

    /**
     * Знайти користувача по email.
     *
     * @param string $email
     * @return User|null
     */
    public function findUserByEmail(string $email): ?User
    {
        return User::where('email', $email)->first();
    }

    /**
     * Створити нового користувача.
     *
     * @param array $data
     * @return User
     */
    public function createUser(array $data): User
    {
        return User::create($data);
    }

    /**
     * Оновити дані користувача.
     *
     * @param User $user
     * @param array $data
     * @return User
     */
    public function updateUser(User $user, array $data): User
    {
        $user->update($data);
        return $user;
    }
}
