<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
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
            'active' => '1'
        ];

        $activeUsersCount = User::where('active', 1)->count();

        if($activeUsersCount == 0) {
            return response()->view('auth.login', [], Response::HTTP_FORBIDDEN);
        } else if (Auth::attempt($data)) {
            return response()->view('admin_page.index', [], Response::HTTP_OK);
        } else {
            return response()->view('auth.login', [], Response::HTTP_UNAUTHORIZED);
        }
    }
    
    public function logout() {
        Auth::logout();

        return view('auth.login');
    }
}
