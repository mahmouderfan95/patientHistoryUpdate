<?php

namespace App\Http\Controllers\backEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Validator;
use App\models\Patien;

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
            'phoneNumber' => 'required',
            'password'  => 'required',
            'guard'     => 'required|in:patien,clinic,hosptail,xray,labs,pharmacy'
        ];

        $vaild = Validator::make($request->all(),$arr);
        if($vaild->fails()){
            return redirect()->back();
        }
        $attmp = $request->only('phoneNumber','password');
        if(! Auth::guard($request->get('guard'))->attempt($attmp)){
            return redirect()->back()->with('msg','email or passord incorrect');
        }
        // elseif(auth()->guard($request->get('guard'))->is_active != 1){
        //     return back()->with('msg','accont is not active');
        // }
        return redirect('en/dashbord/' . $request->get('guard') . '/edit/profile' . '/' . auth()->guard($request->get('guard'))->user()->id);


    }
    public function checkEmail(){
        return view('backEnd.layoutes.checkYourEmail');
    }
    // public function club(){
    //     return view('backEnd.club');
    // }


    /* verifaction code */
    public function verify(){
        return view('backEnd.verify');
    }

    // public function postVerify(Request $request){
    //     if($patient = Patien::where('code',$request->code)->first()){
    //         $patient->is_active = 1;
    //         $patient->code = null;
    //         $patient->save();
    //         return redirect()->route('indexRoute');
    //     }else{
    //         return back();
    //     }
    // }
}
