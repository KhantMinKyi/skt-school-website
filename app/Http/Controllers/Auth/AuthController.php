<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $executed = RateLimiter::attempt(
            'send-message:',
            $perMinute = 5,
            function () {},
            $decayRate = 120,
        );

        if (! $executed) {
            return 'Too many messages sent! Wait ';
        }

        $login = request()->input('login');
        $password =  request()->input('password');
        $fieldType = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'user_name';

        $credentials = [
            $fieldType => $login,
            'password' => $password,
        ];
        // dd($credentials);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::user();
            $userType = $user->user_type;
            if (Auth::user()->admin == 1) {
                $userType = 'admin';
            }

            if ($userType == 'admin' && Auth::user()->user_status == 1) {
                return redirect('/administration-panel/admin/dashborad');
            } else if ($userType == 'staff' && Auth::user()->user_status == 1) {
                return redirect('/administration-panel/staff/dashborad');
            } else {
                Auth::logout();
                return redirect('/administration-panel/login')->withErrors('Something wrong with your account.');
            }
        } else {
            // throw new \ErrorException('Invalid Username or password!');
            // return redirect()->back()
            //         ->withErrors([
            //             'email' => 'Invalid username or pasword!',
            //         ]);
            Session::flush('errors');
            return redirect('/administration-panel/login')->withErrors('Invalid username or password!');
        }
    }
    public function logout(Request $request)
    {
        // dd('asdas');
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
