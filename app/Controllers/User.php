<?php

namespace App\Controllers;

class User extends BaseController
{
    public function index()
    {
        return view('user/index');
    }

    // public function register()
    // {
    //     return view('auth/register');
    // }

    // public function user()
    // {
    //     return view('user/index');
    // }
}
