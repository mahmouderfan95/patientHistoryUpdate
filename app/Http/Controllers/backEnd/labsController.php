<?php

namespace App\Http\Controllers\backEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Lab;
use App\models\Patien;
use App\Http\Requests\backEnd\labs\Store;
use App\Http\Requests\backEnd\labs\Update;
use Auth;
use Image;
use Illuminate\Support\Facades\Mail;
use App\Mail\verifyLabs;
class labsController extends Controller
{
    public function register(){
        return view('backEnd.labs.register');
    }
    public function postRegister(Request $request){
        $request_data = $request->all();
        /* upload img */
        if($request->image){
            $img = Image::make($request->image)
            ->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/lab/' . $request->image->hashName()));
            $request_data['image'] = $request->image->hashName();
        }
        /* upload lab_License */
        if($request->labs_License){
            $img = Image::make($request->labs_License)
            ->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/lab/' . $request->labs_License->hashName()));
            $request_data['labs_License'] = $request->labs_License->hashName();
        }
        /* secure password */
        $request_data['password'] = bcrypt($request->password);
        // role = patient //
        $request_data['role'] = 'labs';
        /* insert data */
        $lab_create = Lab::create($request_data);
        /* send mail */
        Mail::to($lab_create->email)->send(new verifyLabs($lab_create));
        // return redirct //
        return redirect()->back()->with(['verifyMsg'=>'Check Your Email']);
    }
    public function verifyLabs($id){
        $labs = Lab::findOrFail($id);
        $labs->verify = 1;
        $labs->save();
        auth()->guard('labs')->login($labs);
        return redirect()->route('labs.edit.profile',$labs->id);
    }
    /* function edit profile */
    public function editProfile($id){
        $labs = Lab::findOrFail($id);
        return view('backEnd.labs.edit',compact('labs'));
    }
    /* end of function */
    /* function update profile */
    public function updateProfile($id, Update $request){
        $labs = Lab::findOrFail($id);
        $request_data = $request->all();
        /* update image */
        if($request->image){
            // if($request->image != 'default.jpeg'){
            //     Storage::disk('public_path')->delete('hosptail/' . $hosptail->image);
            // }
            $img = Image::make($request->image)
            ->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/lab/' . $request->image->hashName()));
            $request_data['image'] = $request->image->hashName();
        }
        /* update image */
        $labs->update($request_data);
        return redirect()->back()->with(['msgUpdate'=>'Data Updated Successfuly']);
    }
    /* end of function */
    public function profile($id){
        $labs = Lab::find($id);
        return view('backEnd.labs.profile',compact('labs'));
    }
    public function logout(){
        Auth::guard('labs')->logout();
        return redirect()->route('indexRoute');
    }

    /* function search patient form phone number */
    public function search($id,Request $request){
        $labs = Lab::findOrFail($id);
        $patient = Patien::where('phoneNumber','like','%' . $request->search . '%')->first();
        $last_analzes = $patient->orderBy('id','desc')->with('patientAnalzazes')->get();
        if($patient){
            return view('backEnd.labs.search-patient',compact('patient','labs','last_analzes'));
        }else{
            return redirect()->back()->withErrors(['msgSearchError'=>'No Result']);
        }
    }
    /* function search patient form phone number */
}
