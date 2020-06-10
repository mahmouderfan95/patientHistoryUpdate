<?php

namespace App\Http\Controllers\backEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Validator;

class backEndController extends Controller
{
    /* function index */
    public function index(){
        return view('backEnd.index');
    }

    /* end of function */
    /* function index register */
    public function indexRegister(){
        return view('backEnd.indexRegister');
    }
    /* end of function */
    public function login(REQUEST $request){
        $arr = [
            'email' => 'required',
            'password'  => 'required',
            'guard'     => 'required|in:patien,clinic,hosptail,xray,labs,pharmacy'
        ];

        $vaild = Validator::make($request->all(),$arr);
        if($vaild->fails()){
            return redirect()->back();
        }
        $attmp = $request->only('email','password');
        if(! Auth::guard($request->get('guard'))->attempt($attmp)){
            return redirect()->back()->with('msg','email or passord incorrect');
        }
        return redirect('en/dashbord/' . $request->get('guard') . '/edit/profile' . '/' . auth()->guard($request->get('guard'))->user()->id);


    }
    public function checkEmail(){
        return view('backEnd.layoutes.checkYourEmail');
    }
    // public function club(){
    //     return view('backEnd.club');
    // }
}
