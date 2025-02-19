<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function authenticate(Request $request)
     {
         $credentials = $request->validate([
             'email' => ['required', 'email'],
             'password' => ['required'],
         ]);
 
 
         if (Auth::attempt($credentials)) {  
             return redirect('/admin/dashboard')->with('success', 'Anda telah berhasil login');
         }else{
            return redirect()->back()->with('error', 'Email atau password salah');
         }
         return redirect()->back()->with('error', 'Email atau password salah');
     }
     public function admin_login(){
        return view('admin.login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/admin/login');
    }

    public function dashboard() {
        return view('admin.dashboard');
    } 
}
