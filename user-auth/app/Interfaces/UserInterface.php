<?php
namespace App\Interfaces;

use App\Http\Requests\User\RegisterRequest;
use Illuminate\Http\Request;


interface UserInterface 
{
    public function register(RegisterRequest $request);

    public function login(Request $request);
}