<?php

namespace App\Http\Controllers;

use App\Traits\HttpResponses;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    use HttpResponses;

    public function home()
    {
        return response()->json("HOME");
    }

    public function login()
    {
        return response()->json("Login API");
    }

    public function register()
    {
        return response()->json("Register API");
    }

    public function logout()
    {
        return response()->json("Logout API");
    }

}
