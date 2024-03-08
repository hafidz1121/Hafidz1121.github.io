<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        if(Auth::check()) {
            $user = Auth::user();

            return view('admin_page.index', [
                'nama' => $user->name,
                'email' => $user->email,
            ]);
        } else {
            return view('auth.login');
        }
    }

    public function loginProcess(Request $request) {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];
    
        if(Auth::attempt($data)) {
            return response()->view('admin_page.index', [], 200);
        } else {
            return response()->view('auth.login', [], 401);
        }
    }
    
    public function logout() {
        Auth::logout();

        return view('auth.login');
    }
}
