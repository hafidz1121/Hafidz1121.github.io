<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SettingController extends Controller
{
    public function index() {
        $user = Auth::user();

        return view('admin_page.account.settings', [
            'user' => $user
        ]);
    }
}
