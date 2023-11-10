<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Inertia\Inertia;

class AdminAuthController extends Controller
{
    public function index()
    {
        return Inertia::render("Admin/Auth/Login");
    }


    public function login(LoginRequest $request)
    {


        if (Auth::attempt(["email"=> $request->email, 'password'=>$request->password, "isAdmin" => true])) {
            return redirect()->route('admin.dashboard');
        }
        return redirect()->route('admin.login');
    }

    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
