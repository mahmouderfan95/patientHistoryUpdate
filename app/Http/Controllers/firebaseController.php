<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Patien;
use App\models\Hosptail;
use App\models\Clinic;
use App\models\Xray;
use App\models\Lab;
use App\models\pharmacy;

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
}
