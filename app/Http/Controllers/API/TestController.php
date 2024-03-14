<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class TestController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth:api', ['except' => ['login', 'register']]);
    }

    public function test(Request $request)
    {
        echo "asasasa";
    }

   
}    