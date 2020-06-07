<?php

namespace App\Http\Controllers\backEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Hosptail;
use App\models\Patien;
use App\models\patientAnalazes;
use App\models\patient_rays;
// use App\models\patient_rays;
use App\models\Raoucheh;
use App\models\API\analyzes;
use App\models\API\Rays;
use App\Http\Requests\backEnd\hosptail\Store;
use App\Http\Requests\backEnd\hosptail\Update;
use App\Http\Requests\backEnd\hosptail\StoreAnalaz;
use App\Http\Requests\backEnd\hosptail\StoreRays;
use App\Http\Requests\backEnd\hosptail\StoreRaoucata;
use Illuminate\Support\Facades\Mail;
use App\Mail\verifyHosptail;
use Auth;
use Image;
use Storage;

class hosptailController extends Controller
{
    public function register(){
        return view('backEnd.hosptail.register');
    }
    public function postRegister(Store $request){
        $request_data = $request->all();
        /* upload img */
        if($request->image){
            $img = Image::make($request->image)
            ->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/hosptail/' . $request->image->hashName()));
            $request_data['image'] = $request->image->hashName();
        }
        /* upload hosptail */
        if($request->Hosptail_License){
            $img = Image::make($request->Hosptail_License)
            ->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/hosptail/' . $request->Hosptail_License->hashName()));
            $request_data['Hosptail_License'] = $request->Hosptail_License->hashName();
        }
        /* secure password */
        $request_data['password'] = bcrypt($request->password);
        // role = patient //
        $request_data['role'] = 'hosptail';
        /* insert data */
        $hosptail_create = Hosptail::create($request_data);
        /* send mail */
         Mail::to($hosptail_create->email)->send(new verifyHosptail($hosptail_create));

        // return redirct //
        return redirect()->back()->with(['verifyMsg'=>'Check Your Email']);
    }
    /* function hosptail */
    /* function verify hosptail */
    public function verifyHosptail($id){
        $hosptail = Hosptail::findOrFail($id);
        $hosptail->verify = 1;
        $hosptail->save();
        auth()->guard('hosptail')->login($patient);
        return redirect()->route('hosptail.edit.profile',$hosptail->id);
    }
    /* edit profile */
    public function editProfile($id){
        $hosptail = Hosptail::findOrFail($id);
        return view('backEnd.hosptail.edit',compact('hosptail'));
    }
    /* edit profile */
    public function updateProfile($id, Update $request){
        // return dd($request_data = $request->all());
        $hosptail = Hosptail::findOrFail($id);
        $request_data = $request->all();
        /* update image */
        if($request->image){
            // if($request->image != 'default.jpeg'){
            //     Storage::disk('public_path')->delete('hosptail/' . $hosptail->image);
            // }
            $img = Image::make($request->image)
            ->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/hosptail/' . $request->image->hashName()));
            $request_data['image'] = $request->image->hashName();
        }
        /* update image */
        $hosptail->update($request_data);
        return redirect()->back()->with(['msgUpdate'=>'Data Updated Successfuly']);
    }
    public function profile($id){
        $hosptail = Hosptail::find($id);
        return view('backEnd.hosptail.profile',compact('hosptail'));
    }
    /* function search patient form phone number */
    public function search($id,Request $request){
        $hosptail = Hosptail::findOrFail($id);
        $analyses = analyzes::get();
        $rays = Rays::get();
        $patient = Patien::with(['patientAnalzazes','patient_rays'])->where('phoneNumber','like','%' . $request->search . '%')->first();
        if($patient){
            return view('backEnd.hosptail.search-patient',compact('patient','hosptail','analyses','rays'));
        }else{
            return redirect()->back()->withErrors(['msgSearchError'=>'No Result']);
        }
    }
    /* function search patient form phone number */
    /* end of function */
    /* function logout */
    public function logout(){
        Auth::guard('hosptail')->logout();
        return redirect()->route('indexRoute');
    }
    /* end of function */
    /* function store raoucata */
    public function storeRaoucata($id,StoreRaoucata $request){
        $hosptail = Hosptail::findOrFail($id);
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
        return redirect()->route('hosptail.patient.search',$hosptail->id)->with(['roacataMsg'=>'Roacata Added Successfuly']);
    }

    /* end of function */
    public function patient_add_analzes($id,StoreAnalaz $request){
        // dd($request->all());
        $hosptail = Hosptail::findOrFail($id);
        $request_data = $request->all();
        if(count($request->name) > 0){
            foreach($request->name as $item=> $v){
                $data = [
                    'name' => json_encode($request->name),
                    'description'   => $request->description,
                    'patient_id'    => $request->patient_id
                ];
            }
        }
        $request_create = patientAnalazes::create($data);
        return redirect()->route('hosptail.patient.search',$hosptail->id);
    }

    public function patient_add_rays($id,StoreRays $request){
        $hosptail = Hosptail::findOrFail($id);
        $request_data = $request->all();
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
        return redirect()->route('hosptail.patient.search',$hosptail->id);
    }

}
