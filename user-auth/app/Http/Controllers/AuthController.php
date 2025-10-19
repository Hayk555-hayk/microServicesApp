<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Interfaces\UserInterface;
use App\Http\Requests\User\RegisterRequest;


class AuthController extends Controller
{
    public function __construct(private UserInterface $userService) 
    {
    }

    public function register(RegisterRequest $request)
    {
        return $this->userService->register($request);
    }

    public function login(Request $request) 
    {
        return $this->userService->login($request);
    }
}
