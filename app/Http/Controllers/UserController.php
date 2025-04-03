<?php

namespace App\Http\Controllers;

use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        return response()->json($this->userService->getAllUsers());
    }

    public function show($id)
    {
        return response()->json($this->userService->findUser($id));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'role_id' => 'required|exists:roles,id'
        ]);

        return response()->json($this->userService->createUser($request->all()), 201);
    }

    public function update(Request $request, $id)
    {
        $user = $this->userService->findUser($id);

        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }

        return response()->json($this->userService->updateUser($user, $request->all()));
    }

    public function destroy($id)
    {
        $user = $this->userService->findUser($id);

        if (!$user) {
            return response()->json(['error' => 'User not found'], 404);
        }

        $this->userService->deleteUser($user);
        return response()->json(['message' => 'User deleted']);
    }
}
