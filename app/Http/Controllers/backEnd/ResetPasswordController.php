<?php

namespace App\Http\Controllers\backEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\ResetPassword;
use App\Mail\reset_Password;
use Illuminate\Support\Facades\Mail;
use App\models\Patien;
use App\models\Hosptail;
use App\models\Clinic;
use App\models\Xray;
use App\models\Lab;
use App\models\Pharmacy;

class ResetPasswordController extends Controller
{
    public function getResetPassword(){
        return view('backEnd.reset_password.reset_password');
    }
    // public function postResetPassword(Request $request){
    //     $reset_request = $request->all();
    //     $reset_request['email'] = $request->email;
    //     $reset_request['token'] = str_random(60);
    //     $reset_request['accountType'] = $request->accountType;
    //     $reset_create = ResetPassword::create($reset_request);
    //     /* send email */
    //     // Mail::to($request->email)->send(new reset_Password($reset_create));
    //     /*  end send email  */
    //     return redirect()->route('get_update_password',compact('reset_request'));

    // }
    // public function getUpdatePassword(){
    //     dd($reset_request);
    //     return view('backEnd.update_password');
    // }
    // public function postUpdatePassword(Request $request){
    //     dd($request->all());
    // }
}
