<?php

namespace App\Modules\Pub\Auth\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Modules\Pub\Auth\Request\LoginRequest;

class LoginController extends Controller
{
    public function login(LoginRequest $request){


        var_dump($request->all());
        exit('ku');
    }
}
