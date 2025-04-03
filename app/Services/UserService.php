<?php

namespace App\Services;

use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Cache;

class UserService
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function getAllUsers()
    {
        return Cache::remember('users', 60, function () {
            return $this->userRepository->all();
        });
    }

    public function findUser($id)
    {
        return $this->userRepository->find($id);
    }

    public function createUser(array $data)
    {
        Cache::forget('users');
        return $this->userRepository->create($data);
    }

    public function updateUser($user, array $data)
    {
        Cache::forget('users');
        return $this->userRepository->update($user, $data);
    }

    public function deleteUser($user)
    {
        Cache::forget('users');
        return $this->userRepository->delete($user);
    }
}
