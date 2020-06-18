<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Patien;
use App\models\Hosptail;
use App\models\Clinic;
use App\models\Xray;
use App\models\Lab;

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
        $hosptail->save();
        return response()->json([
            'status'=> true,
            'id'    => $hosptail->id
        ]);
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
        $clinic->save();
        return response()->json([
            'status'=> true,
            'id'    => $clinic->id
        ]);
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
        $xray->save();
        return response()->json([
            'status'=> true,
            'id'    => $xray->id
        ]);
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
        $labs->save();
        return response()->json([
            'status'=> true,
            'id'    => $labs->id
        ]);
    }
    /* end of function verifcation code */
}
