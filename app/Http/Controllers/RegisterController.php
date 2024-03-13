<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use App\Mail\MailSend;

class RegisterController extends Controller
{
    public function index() {
        return view('auth.register');
    }

    public function registerProcess(Request $request) {
        $str = Str::random(100);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->confirmPassword),
            'created_at' => now(),
            'verify_key' => $str
        ]);

        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'datetime' => date('Y-m-d H:i:s'),
            'url' => request()->getHttpHost().'/register/verify/'.$str
        ];

        
        if ($user) {
            Mail::to($request->email)->send(new MailSend($details));
            return response()->view('auth.register', [], 200);
        } else {
            return response()->view('auth.register', [], 500);
        }
    }

    public function verify($verify_key)
    {
        $keyCheck = User::select('verify_key')
                    ->where('verify_key', $verify_key)
                    ->exists();
        
        if ($keyCheck) {
            $user = User::where('verify_key', $verify_key)
            ->update([
                'active' => 1
            ]);
            
            return view('mail.message',[
                'status' => 'Success',
                'message' => 'Your Account Has Been Verify!'
            ]);
        }else{
            return view('mail.message',[
                'status' => 'Error',
                'message' => 'Invalid Activation Key!'
            ]);
        }
    }
}
