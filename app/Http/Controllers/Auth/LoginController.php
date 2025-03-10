<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {

        if (!User::where('email', $request->email)->exists()) {
            return back()->with('error', 'No User found with email: ' . $request->email);
        }

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();
            $user = Auth::user();


            if ($user->is_verified == 0) {
                Auth::logout();
                return back()->with('error', 'Your email is not verified! Please retry verifying email');
            }

            return redirect('employee/list')->with('success', 'Log-In Successful!! ');
        } else {
            return back()->with('error', 'Credentials Mismatch!! Plz Retry');
        }

    }


    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('warning', 'Log-out successful!');
    }
}
