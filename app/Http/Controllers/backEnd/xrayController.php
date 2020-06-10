<?php

namespace App\Http\Controllers\backEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Xray;
use App\models\Patien;
use App\Http\Requests\backEnd\xray\Store;
use App\Http\Requests\backEnd\xray\Update;
use Illuminate\Support\Facades\Mail;
use App\Mail\verifyXray;
use Auth;
use Image;
class xrayController extends Controller
{
    /* function register */
    public function register(){
        return view('backEnd.xray.register');
    }
    /* end of function */
    public function postRegister(Store $request){
        $request_data = $request->all();
        /* upload img */
        if($request->image){
            $img = Image::make($request->image)
            ->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/xray/' . $request->image->hashName()));
            $request_data['image'] = $request->image->hashName();
        }
        /* upload Clinic_License */
        if($request->xray_License){
            $img = Image::make($request->xray_License)
            ->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/xray/' . $request->xray_License->hashName()));
            $request_data['xray_License'] = $request->xray_License->hashName();
        }
        /* secure password */
        $request_data['password'] = bcrypt($request->password);
        // role = patient //
        $request_data['role'] = 'xray';
        /* insert data */
        $xray_create = Xray::create($request_data);
        /* send mail */
        Mail::to($xray_create->email)->send(new verifyXray($xray_create));

        // return redirct //
        return redirect()->back()->with(['verifyMsg'=>'Check Your Email']);
    }
    /* end of function */
    public function verifyXray($id){
        $xray = Xray::findOrFail($id);
        $xray->verify = 1;
        $xray->save();
        auth()->guard('xray')->login($xray);
        return redirect()->route('xray.edit.profile',$xray->id);
    }
    /* function edit profile */
    public function editProfile($id){
        $xray = Xray::findOrFail($id);
        return view('backEnd.xray.edit',compact('xray'));
    }
    /* end of function */
    /* function update profile */
    public function updateProfile($id, Update $request){
        $xray = Xray::findOrFail($id);
        $request_data = $request->all();
        /* update image */
        if($request->image){
            // if($request->image != 'default.jpeg'){
            //     Storage::disk('public_path')->delete('hosptail/' . $hosptail->image);
            // }
            $img = Image::make($request->image)
            ->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/clinic/' . $request->image->hashName()));
            $request_data['image'] = $request->image->hashName();
        }
        /* update image */
        $xray->update($request_data);
        return redirect()->back()->with(['msgUpdate'=>'Data Updated Successfuly']);
    }
    /* end of function */
    /* function profile */
    public function profile($id){
        $xray = Xray::find($id);
        return view('backEnd.xray.profile',compact('xray'));
    }
    /* end of function */
    /* function logout */
    public function logout(){
        Auth::guard('xray')->logout();
        return redirect()->route('indexRoute');
    }
    /* end of function */
    /* function search patient form phone number */
    public function search($id,Request $request){
        $xray = Xray::findOrFail($id);
        $patient = Patien::where('phoneNumber','like','%' . $request->search . '%')->first();
        $last_rays = $patient->with('patient_rays')->orderBy('id','desc')->get();
        if($patient){
            return view('backEnd.xray.search-patient',compact('patient','xray','last_rays'));
        }else{
            return redirect()->back()->withErrors(['msgSearchError'=>'No Result']);
        }
    }
    /* function search patient form phone number */
}
