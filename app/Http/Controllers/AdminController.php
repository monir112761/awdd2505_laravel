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
    public function hello()
    {
        $user = auth()->user();
        $name = $user ? $user->name : 'Guest';

        return response("Hello World, {$name}!", 200)
            ->header('Content-Type', 'text/plain');
    }
}
