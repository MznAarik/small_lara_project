<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserValidate;
use App\Mail\EmailVerification;
use App\Mail\UserOtpMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class RegisterController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function signup(UserValidate $request)
    {
        $user = new User();
        $user->fname = $request->first_name;
        $user->lname = $request->last_name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->gender = $request->gender;
        $user->phoneno = $request->phone_no;
        $token = Str::random(32);
        $user->email_verification_token = $token;
        $user->token_expires_at = now()->addHours(24);
        $user->save();

        $verificationUrl = url('/verify-email?token=' . $token);
        $data = [
            'first_name' => $request->first_name,
            'verificationUrl' => $verificationUrl,
        ];
        Mail::to($request->email)->send(new EmailVerification($data));
        return redirect('/')->with('success', 'Registration successful. Please check your email for verification.');
    }


    public function verify_email(Request $request)
    {
        $token = $request->query('token');
        if (!$token) {
            return redirect('/')->with('error', 'No token found! Please retry');
        }

        $check_token_expires = User::where('email_verification_token', $token)
            ->value('token_expires_at');
        if ($check_token_expires > now()) {
            $user = User::where('email_verification_token', $token)->first();
            $user->update([
                'email_verified_at' => now(),
                'email_verification_token' => null,
                'is_verified' => true,
            ]);
            Auth::login($user);

            return redirect('employee/list')->with('success', 'Email verified successfully! You can now use your account.')
                ->with('delay', 5000);
        }

        return redirect('/')->with('error', 'Invalid or expired verification token. Please request a new verification email.');
    }
}
