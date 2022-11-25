<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        if ($request->username == 'a' && $request->matkhau == 'a') {
            return redirect('home');
        } 
    }
}
