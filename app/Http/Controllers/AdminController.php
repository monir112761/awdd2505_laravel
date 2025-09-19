<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        // Require authentication for all methods in this controller
        $this->middleware('auth');
    }

    // Route to show a hello world for the authenticated user
    public function index()
    { 
       return view('admin.dashboard.home');
      // echo ?Admin Page?; --- IGNORE ---

}
}
