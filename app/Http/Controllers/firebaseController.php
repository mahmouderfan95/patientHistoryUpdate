<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Patien;
use App\models\Hosptail;
use App\models\Clinic;
use App\models\Xray;
use App\models\Lab;
use App\models\pharmacy;
use App\Http\Requests\backEnd\patient_confirm_password;
use App\Http\Requests\backEnd\hosptail_confirm_password;

class firebaseController extends Controller
{
    /* function show form verify */
    public function index($id){
        $patient = Patien::findOrFail($id);
        return view('testVerify.index',compact('patient'));
    }
    /* end of function */

    /* verifcation code */
    public function verifcationCode(Request $request ,$id){
        $patient = Patien::findOrFail($id);
        $patient->is_active = true;
        $patient->phoneNumber = str_replace('+','p',$patient->phoneNumber);
        $patient->save();
        return redirect()->route('indexRoute')->with(['activeMsg'=> 'Your Account is active']);

    }
    /* end of function verifcation code */

    /* function show form verify */
    public function hosptail_verify($id){
        $hosptail = Hosptail::findOrFail($id);
        return view('testVerify.hosptail_verify',compact('hosptail'));
    }
    /* end of function */

    /* verifcation code */
    public function verifcationCodeHosptail($id){
        $hosptail = Hosptail::findOrFail($id);
        $hosptail->is_active = true;
        $hosptail->phoneNumber = str_replace('+','h',$hosptail->phoneNumber);
        $hosptail->save();
        return redirect()->route('indexRoute')->with(['activeMsg'=> 'Your Account is active']);
    }
    /* end of function verifcation code */

    /* function show form verify */
    public function clinic_verify($id){
        $clinic = Clinic::findOrFail($id);
        return view('testVerify.clinic_verify',compact('clinic'));
    }
    /* end of function */

    /* verifcation code */
    public function verifcationCodeClinic($id){
        $clinic = Clinic::findOrFail($id);
        $clinic->is_active = true;
        $clinic->phoneNumber = str_replace('+','c',$clinic->phoneNumber);
        $clinic->save();
        return redirect()->route('indexRoute')->with(['activeMsg'=> 'Your Account is active']);
    }
    /* end of function verifcation code */

     /* function show form verify */
     public function xray_verify($id){
        $xray = Xray::findOrFail($id);
        return view('testVerify.xray_verify',compact('xray'));
    }
    /* end of function */

    /* verifcation code */
    public function verifcationCodeXray($id){
        $xray = Xray::findOrFail($id);
        $xray->is_active = true;
        $xray->phoneNumber = str_replace('+','x',$xray->phoneNumber);
        $xray->save();
        return redirect()->route('indexRoute')->with(['activeMsg'=> 'Your Account is active']);
    }
    /* end of function verifcation code */

    /* function show form verify */
    public function labs_verify($id){
        $labs = Lab::findOrFail($id);
        return view('testVerify.labs_verify',compact('labs'));
    }
    /* end of function */

    /* verifcation code */
    public function verifcationCodeLabs($id){
        $labs = Lab::findOrFail($id);
        $labs->is_active = true;
        $labs->phoneNumber = str_replace('+','l',$labs->phoneNumber);
        $labs->save();
        return redirect()->route('indexRoute')->with(['activeMsg'=> 'Your Account is active']);
    }
    /* end of function verifcation code */
    /* function show form verify */
    public function pharmacy_verify($id){
        $pharmacy = Pharmacy::findOrFail($id);
        return view('testVerify.pharmacy_verify',compact('pharmacy'));
    }
    /* end of function */

    /* verifcation code */
    public function verifcationCodepharmacy($id){
        $pharmacy = Pharmacy::findOrFail($id);
        $pharmacy->is_active = true;
        $pharmacy->save();
        $pharmacy->phoneNumber = str_replace('+','y',$patient->phoneNumber);
        return redirect()->route('indexRoute')->with(['activeMsg'=> 'Your Account is active']);
    }
    /* end of function verifcation code */



    /* forgot password functions */
    /* patient forgot password */

    public function patient_password($id){
        $patient = Patien::findOrFail($id);
        return view('forgot_password.index',compact('patient'));
    }

    public function post_patient_password(Request $request ,$id){
        $patient = Patien::findOrFail($id);
        // $patient->is_active = true;
        $patient->phoneNumber = str_replace('+','p',$patient->phoneNumber);
        $patient->save();
        return redirect()->route('hosptail_confirm_password',$patient->id);
    }

    public function confirm_password($id){
        $patient = Patien::findOrFail($id);
        return view('forgot_password.confirm_patient_password',compact('patient'));
    }
    public function patient_confirm_password($id,patient_confirm_password $request){
        // dd($request->all());
        $patient = Patien::findOrFail($id);
        $patient->password = bcrypt($request->new_password);
        $patient->update();
        return redirect()->route('indexRoute');

    }

    /* end forgot password patient */

    /* hosptail forgot password */
    public function hosptail_password($id){
        $hosptail = Hosptail::findOrFail($id);
        return view('forgot_password.hosptail_verify',compact('hosptail'));
    }

    public function post_hosptail_password(Request $request ,$id){
        $hosptail = Hosptail::findOrFail($id);
        // $patient->is_active = true;
        $hosptail->phoneNumber = str_replace('+','h',$hosptail->phoneNumber);
        $hosptail->save();
        return redirect()->route('get_hosptail_confirm_password',$hosptail->id);
    }

    public function hosptail_confirm_password($id){
        $hosptail = Hosptail::findOrFail($id);
        return view('forgot_password.confirm_hosptail_password',compact('hosptail'));
    }
    public function post_hosptail_confirm_password($id,hosptail_confirm_password $request){
        $hosptail = Hosptail::findOrFail($id);
        $hosptail->password = bcrypt($request->new_password);
        $hosptail->update();
        return redirect()->route('indexRoute');
    }

    /* end hosptail forgot password */



    /* clinic forgot password */
    public function clinic_password($id){
        $clinic = Clinic::findOrFail($id);
        return view('forgot_password.clinic_verify',compact('clinic'));
    }

    public function post_clinic_password(Request $request ,$id){
        $clinic = Clinic::findOrFail($id);
        // $patient->is_active = true;
        $clinic->phoneNumber = str_replace('+','c',$clinic->phoneNumber);
        $clinic->save();
        return redirect()->route('get_clinic_confirm_password',$clinic->id);
    }

    public function clinic_confirm_password($id){
        $clinic = Clinic::findOrFail($id);
        return view('forgot_password.confirm_clinic_password',compact('clinic'));
    }
    public function post_clinic_confirm_password($id,hosptail_confirm_password $request){
        $clinic = Clinic::findOrFail($id);
        $clinic->password = bcrypt($request->new_password);
        $clinic->update();
        return redirect()->route('indexRoute');
    }

    /* end clinic forgot password */

    /* xray forgot password */
    public function xray_password($id){
        $xray = Xray::findOrFail($id);
        return view('forgot_password.xray_verify',compact('xray'));
    }

    public function post_xray_password(Request $request ,$id){
        $xray = Xray::findOrFail($id);
        // $patient->is_active = true;
        $xray->phoneNumber = str_replace('+','x',$xray->phoneNumber);
        $xray->save();
        return redirect()->route('get_xray_confirm_password',$xray->id);
    }

    public function xray_confirm_password($id){
        $xray = Xray::findOrFail($id);
        return view('forgot_password.confirm_xray_password',compact('xray'));
    }
    public function post_xray_confirm_password($id,hosptail_confirm_password $request){
        $xray = Xray::findOrFail($id);
        $xray->password = bcrypt($request->new_password);
        $xray->update();
        return redirect()->route('indexRoute');
    }

    /* end xray forgot password */


    /* labs forgot password */
    public function labs_password($id){
        $labs = Lab::findOrFail($id);
        return view('forgot_password.labs_verify',compact('labs'));
    }

    public function post_labs_password(Request $request ,$id){
        $labs = Lab::findOrFail($id);
        // $patient->is_active = true;
        $labs->phoneNumber = str_replace('+','l',$labs->phoneNumber);
        $labs->save();
        return redirect()->route('get_labs_confirm_password',$labs->id);
    }

    public function labs_confirm_password($id){
        $labs = Lab::findOrFail($id);
        return view('forgot_password.confirm_labs_password',compact('labs'));
    }
    public function post_labs_confirm_password($id,hosptail_confirm_password $request){
        $labs = Lab::findOrFail($id);
        $labs->password = bcrypt($request->new_password);
        $labs->update();
        return redirect()->route('indexRoute');
    }

    /* end labs forgot password */



}
