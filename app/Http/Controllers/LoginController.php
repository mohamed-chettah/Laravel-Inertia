<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use Inertia\Inertia;
use Inertia\Response;

class LoginController extends Controller
{

    public function index(){
        return Inertia::render('Auth/Login');
    }

    public function login(Request $request)
    {
        dd($request->all());
    }
}
