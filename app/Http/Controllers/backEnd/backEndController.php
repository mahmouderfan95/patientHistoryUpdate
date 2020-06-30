<?php

namespace App\Http\Controllers\backEnd;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Controllers\Controller;
use Auth;
use Validator;
use App\models\Patien;
use App\models\Hosptail;
use App\models\Clinic;
use App\models\Xray;
use App\models\Lab;
use App\models\Pharmacy;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\reset_password;
use App\Mail\hosptail_reset_password;
use App\Mail\clinic_reset_password;
use App\Mail\xrays_reset_password;
use App\Mail\labs_reset_password;
use App\Mail\pharmacy_reset_password;

class backEndController extends Controller
{
    use AuthenticatesUsers;
    // // protected $redirectTo = '/patien';
    // // protected $guard = 'patien';
    public function username()
        {
            return 'phoneNumber';
        }
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
        }elseif(Auth::guard($request->get('guard'))->user()->hosptail_labs == 1 || Auth::guard($request->get('guard'))->user()->hosptail_xray == 1 || Auth::guard($request->get('guard'))->user()->hosptail_pharmacy == 1){
            return redirect()->route('hosptail_as_doctor',Auth::guard($request->get('guard'))->user()->id);
        }elseif(Auth::guard($request->get('guard'))->user()->clinic_labs == 1 || Auth::guard($request->get('guard'))->user()->clinic_xray == 1 || Auth::guard($request->get('guard'))->user()->clinic_pharmacy == 1){
            return redirect()->route('clinic_as_doctor',Auth::guard($request->get('guard'))->user()->id);
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
    /* function forgot password */
    public function forgotPassword(){
        return view('backEnd.forgotpassword');
    }
    /* end of function */
    /* function post forgot password */
    public function post_forgot_password(Request $request){
        $patient = DB::table('patiens')->where('phoneNumber','LIKE','%' . $request->code. '%')->first();
        $hosptail = DB::table('hosptails')->where('phoneNumber','LIKE','%' . $request->code. '%')->first();
        $clinic = DB::table('clinics')->where('phoneNumber', 'LIKE','%' . $request->code. '%')->first();
        $xrays = DB::table('xrays')->where('phoneNumber','LIKE','%' . $request->code. '%')->first();
        $labs = DB::table('labs')->where('phoneNumber','LIKE','%' . $request->code. '%')->first();
        $pharmacy = DB::table('pharmacies')->where('phoneNumber','LIKE','%' . $request->code. '%')->first();

        if($patient == true){
            // Mail::to($patient->email)->send(new reset_password($patient));
            // $patient->phoneNumber = str_replace('p', '+', $patient->phoneNumber);
            return redirect()->route('patient_password',$patient->id);
        }elseif($hosptail == true){
            // Mail::to($hosptail->email)->send(new hosptail_reset_password($hosptail));
            // $hosptail->phoneNumber = str_replace('h', '+', $hosptail->phoneNumber);
             return redirect()->route('hosptail_password',$hosptail->id);
        }elseif($clinic == true){
            // Mail::to($clinic->email)->send(new clinic_reset_password($clinic));
            // $clinic->phoneNumber = str_replace('c', '+', $clinic->phoneNumber);
             return redirect()->route('clinic_password',$clinic->id);
        }elseif($xrays == true){
            // Mail::to($xrays->email)->send(new xrays_reset_password($xrays));
            // $xray->phoneNumber = str_replace('x', '+', $xray->phoneNumber);
            return redirect()->route('xray_password',$xray->id);
        }elseif($labs == true){
            // Mail::to($labs->email)->send(new labs_reset_password($labs));
            // $labs->phoneNumber = str_replace('l', '+', $labs->phoneNumber);
            return redirect()->route('labs_password',$labs->id);
        }elseif($pharmacy == true){
            // Mail::to($pharmacy->email)->send(new pharmacy_reset_password($pharmacy));
            // $pharmacy->phoneNumber = str_replace('y', '+', $pharmacy->phoneNumber);
             return redirect()->route('pharmacy_password',$pharmacy->id);
        }else{
            return redirect()->back()->with(['errorEmailMsg'=> 'code is incorrect']);
        }

    }
    /* end of function */
    public function update_new_password($role){
        return view('backEnd.updateNewPassword',compact('role'));
    }
    public function post_update_new_password(Request $request){
        $arr = [
            'password' => 'required'
        ];

        $vaild = Validator::make($request->all(),$arr);
        if($vaild->fails()){
            return redirect()->back();
        }

        if($request->role == 'patient'){
            $patient = new Patien;
            $patient->password = bcrypt($request->password);
            $patient->update();
            return redirect()->route('indexRoute');
        }elseif($request->role == 'hosptail'){
            $hosptail = new Hosptail;
            $hosptail->password = bcrypt($request->password);
            $hosptail->save();
            return redirect()->route('indexRoute');
        }elseif($request->role == 'clinic'){
            $clinic = new Clinic;
            $clinic->password = bcrypt($request->password);
            $clinic->save();
            return redirect()->route('indexRoute');
        }elseif($request->role == 'xray'){
            $xrays = new Xray;
            $xrays->password = bcrypt($request->password);
            $xrays->save();
            return redirect()->route('indexRoute');
        }elseif($request->role == 'labs'){
            $labs = new Lab;
            $labs->password = bcrypt($request->password);
            $labs->save();
            return redirect()->route('indexRoute');
        }elseif($request->role == 'pharmacy'){
            $pharmacy = new Pharmacy;
            $pharmacy->password = bcrypt($request->password);
            $pharmacy->save();
            return redirect()->route('indexRoute');
        }
    }
}
