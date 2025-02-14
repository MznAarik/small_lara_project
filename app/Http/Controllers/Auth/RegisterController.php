<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function signup(Request $request)
    {
        $user = new User();
        $user->fname = $request->first_name;
        $user->lname = $request->last_name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->gender = $request->gender;
        $user->phoneno = $request->phone_no;
        $user->save();
        dump("User " . $request->first_name . " Created successfully");
        usleep(2000000);
        return redirect('/');
    }
}
