<?php

namespace App\Http\Controllers\backEnd\patient;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = 'dashbord/index';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:patien');
    }
    public function showResetForm(Request $request, $token = null)
    {
        return view('backEnd.patien.passwords.reset')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }
    public function broker()
    {
        return Password::broker('patien');
    }
    protected function guard(){
        return Auth::guard('patien');
    }
}
