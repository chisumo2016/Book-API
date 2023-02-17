<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Traits\HttpResponses;

class AuthController extends Controller
{
    use HttpResponses;

    public function login()
    {
        return 'This is my login method';
    }

    public function register()
    {

        return response()->json('This is my register method');
    }

    public function logout()
    {
        return response()->json('This is my register method');
    }
}
