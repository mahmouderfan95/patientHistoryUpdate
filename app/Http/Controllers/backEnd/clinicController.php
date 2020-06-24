<?php

namespace App\Http\Controllers\backEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Clinic;
use App\models\Patien;
use App\models\API\Rays;
use App\models\API\analyzes;
use App\models\patient_rays;
use App\models\patient_analzes;
use App\models\Raoucheh;
use App\Http\Requests\backEnd\clinic\Store;
use App\Http\Requests\backEnd\clinic\Update;
use App\Http\Requests\backEnd\clinic\StoreAnalaz;
use App\Http\Requests\backEnd\clinic\StoreRays;
use App\Http\Requests\backEnd\clinic\StoreRaoucata ;
use Auth;
use Image;
use Illuminate\Support\Facades\Mail;
use App\Mail\verifyClinic;
use Validator;

class clinicController extends Controller
{
    public function register(){
        return view('backEnd.clinic.register');
    }
    public function postRegister(Store $request){
        $request_data = $request->all();
        /* upload img */
        if($request->image){
            $img = Image::make($request->image)
            ->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/clinic/' . $request->image->hashName()));
            $request_data['image'] = $request->image->hashName();
        }
        /* upload Clinic_License */
        if($request->Clinic_License){
            $img = Image::make($request->Clinic_License)
            ->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/clinic/' . $request->Clinic_License->hashName()));
            $request_data['Clinic_License'] = $request->Clinic_License->hashName();
        }
        /* secure password */
        $request_data['password'] = bcrypt($request->password);
        // role = patient //
        $request_data['role'] = 'clinic';
        $request_data['phoneNumber'] = $request->countryCode . $request->phoneNumber;
        $request_data['is_active'] = false;
        /* insert data */
        $clinic_create = Clinic::create($request_data);
        // /* send mail */
        // Mail::to($clinic_create->email)->send(new verifyClinic($clinic_create));
        return redirect()->route('clinic_verify',compact('clinic_create'));
        // return redirct //
    }
    /* function send email */
    public function sendEmail($id){
        $clinic = Clinic::findOrFail($id);
        Mail::to($clinic->email)->send(new verifyClinic($clinic));
        return redirect()->back()->with(['EmailMsg'=>'Check Your Email']);
    }
    /* end of function send email */
    /* function verify clinic */
    public function verifyClinic($id){
        $clinic = Clinic::findOrFail($id);
        $clinic->verify = 1;
        $clinic->save();
        auth()->guard('clinic')->login($clinic);
        return redirect()->route('clinic.edit.profile',$clinic->id);
    }
    /* end of function */
    /* function profile */
    public function profile($id){
        $clinic = Clinic::find($id);
        return view('backEnd.clinic.profile',compact('clinic'));
    }
    /* end of function profile */
    /* function edit profile */
    public function editProfile($id){
        $clinic = Clinic::findOrFail($id);
        return view('backEnd.clinic.edit',compact('clinic'));
    }
    /* function edit profile */
    /* function update profile */
    /* edit profile */
    public function updateProfile($id, Update $request){
        // return dd($request_data = $request->all());
        $clinic = Clinic::findOrFail($id);
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
        $clinic->update($request_data);
        return redirect()->back()->with(['msgUpdate'=>'Data Updated Successfuly']);
    }
    /* function update profile */
    /* function logout */
    public function logout(){
        Auth::guard('clinic')->logout();
        return redirect()->route('indexRoute');
    }

    /* end of function */
    /* function search patient form phone number */
    public function search($id,Request $request){
        $clinic = Clinic::findOrFail($id);
        $rays = Rays::get();
        $analyzes = analyzes::get();
        $patient = Patien::with(['patient_analzes','patient_rays','Raoucheh'])->where('phoneNumber','like','%' . $request->search . '%')->first();
        if($patient){
            return view('backEnd.clinic.search-patient',compact('patient','clinic','rays','analyzes'));
        }else{
            return redirect()->back()->withErrors(['msgSearchError'=>'No Result']);
        }
    }
    /* function search patient form phone number */
    /* function store raoucata */
    public function storeRaoucata($id,StoreRaoucata $request){
        $clinic = Clinic::findOrFail($id);
        $request_data = $request->all();
        if(count($request->medication_name) > 0){
            foreach($request->medication_name as $item => $v){
                $roaucata_data = [
                    'prescription'  => $request->prescription,
                    'temperature'   => $request->temperature,
                    'blood_pressure'=> $request->blood_pressure,
                    'diabetics'     => $request->diabetics,
                    'jaw_type'      => $request->jaw_type,
                    'jaw_direction' => $request->jaw_direction,
                    'teeth_type'    => $request->teeth_type,
                    'eye_type'      => $request->eye_type,
                    'medication_name'=> json_encode($request->medication_name),
                    'times_day'     => json_encode($request->times_day),
                    'time'          => json_encode($request->time),
                    'patient_id'    => $request->patient_id,

                ];
            }
        }
        $roaucataCreate = Raoucheh::create($roaucata_data);
        return redirect()->route('clinic.patient.search',$clinic->id)->with(['roacataMsg'=>'Roacata Added Successfuly']);
    }

    /* end of function */
    public function patient_clinic_add_analzes($id,StoreAnalaz $request){
        // dd($request->all());
        $request_data = $request->all();
        $clinic = Clinic::findOrFail($id);
        
        if(count($request->name) > 0){
            foreach($request->name as $item => $v){
                $analez_data = [
                    'name'=> json_encode($request->name),
                    'description'   => $request->description,
                    'patient_id'    => $request->patient_id,
                ];
              
            }
        }

        $request_create = patient_analzes::create($analez_data);
        return redirect()->route('clinic.patient.search',$clinic->id);

    }

    public function patient_clinic_add_rays($id,StoreRays $request){
        // dd($request->all());
        $request_data = $request->all();
        $clinic = Clinic::findOrFail($id);
        if(count($request->name) > 0){
            foreach($request->name as $item=> $v){
                $data = [
                    'name' => json_encode($request->name),
                    'description'   => $request->description,
                    'patient_id'    => $request->patient_id
                ];
            }
        }
        $request_create = patient_rays::create($data);
        return redirect()->route('clinic.patient.search',$clinic->id);
    }
}
