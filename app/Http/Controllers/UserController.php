<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
      // ...existing code...
    public function __construct()
    {
        $this->middleware('auth')->only('name');
    }

    
    // public function name(Request $request)
    // {
    //     return response()->json([
    //         'name' => optional($request->user())->name,
    //     ]);
    // }
    // ...existing code...
}
