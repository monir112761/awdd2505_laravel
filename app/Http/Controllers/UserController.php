<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
      // ...existing code...
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // return view('user.dashboard.home');
        return view('admin.user.all');
    }

    public function add()
    {
        return view('admin.user.add');
    }

    public function edit()
    {
        return view('admin.user.edit');
    }

    public function view()
    {
        return view('admin.user.view');
    }
}