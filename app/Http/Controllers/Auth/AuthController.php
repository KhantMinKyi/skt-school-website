<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login(Request $request)
    {


        $login = request()->input('login');
        $password =  request()->input('password');
        $fieldType = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        $credentials = [
            $fieldType => $login,
            'password' => $password,
        ];

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            $user = Auth::user();
            $userType = $user->user_type;
            if (Auth::user()->admin == 1) {
                $userType = 'admin';
            }

            if ($userType == 'admin' && Auth::user()->user_status == 1) {
                return redirect('/admin/home');
            } else if ($userType == 'staff' && Auth::user()->user_status == 1) {
                return redirect('/app/home');
            } else if ($userType == 'student' && Auth::user()->user_status == 1) {
                return redirect('/student/home');
            } else {
                Auth::logout();
                return redirect('/')->withErrors('Something wrong with your account.');
            }
        } else {
            // throw new \ErrorException('Invalid Username or password!');
            // return redirect()->back()
            //         ->withErrors([
            //             'email' => 'Invalid username or pasword!',
            //         ]);
            Session::flush('errors');
            return redirect('/')->withErrors('Invalid username or password!');
        }
    }
}
