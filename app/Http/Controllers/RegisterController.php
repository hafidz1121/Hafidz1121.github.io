<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() {
        return view('auth.register');
    }

    public function registerProcess(Request $request) {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->confirmPassword),
            'created_at' => now(),
        ]);

        if ($user) {
            return response()->view('auth.register', [], 200);
        } else {
            return response()->view('auth.register', [], 500);
        }
    }
}
