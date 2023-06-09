<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected function authenticated()
    {
        if (Auth::user()) //1 = Admin Login
        {
            return redirect('dashboard')->with([
                'alert' => [
                    'type' => 'success',
                    'message' => 'Your Welcome!! '.Auth::user()->name
                ]
            ]);
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */

     public function logout(Request $request)
{
    $this->guard()->logout();

    $request->session()->invalidate();
    return redirect()->back()->with([
        'alert' => [
            'type' => 'success',
            'message' => 'You have been logged out!'
        ]
    ]);
}
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }
}
