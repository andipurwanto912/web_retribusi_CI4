<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index()
    {
        return view('admin/index');
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
