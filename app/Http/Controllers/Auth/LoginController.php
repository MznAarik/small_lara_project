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

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $request->session()->regenerate();

            return redirect('employee/list');
        } else {
            dd("Credentials Mismatch!! Try again :(");
        }

    }


    public function logout()
    {
        Auth::logout();
        dump("Logged out");
        usleep(2000000);
        return redirect('/');
    }
}
