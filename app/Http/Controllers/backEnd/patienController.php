<?php

namespace App\Http\Controllers\backEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\Patien;
use App\models\patientData;
use App\models\verify_patient;
use App\Http\Requests\backEnd\patien\Store;
use App\Http\Requests\backEnd\patien\Update;
use App\Http\Requests\backEnd\patien\UpdateData;
use Image;
use Illuminate\Support\Facades\Mail;
use App\Mail\patienWelcome;
use App\Mail\verify_patien;
use Auth;

class patienController extends Controller
{
    // protected $redirectTo = '/patien';
    // protected $guard = 'patien';
    public function register(){
        return view('backEnd.patien.register');
    }
    /* function register patient */
    public function postRegister(Store $request){
        $request_data = $request->all();
        // dd($request->all());
        /* upload img */
        if($request->image){
            $img = Image::make($request->image)
            ->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/patien/' . $request->image->hashName()));
            $request_data['image'] = $request->image->hashName();
        }
        /* secure password */
        $request_data['password'] = bcrypt($request->password);
        // role = patient //
        $request_data['role'] = 'patient';

        /* insert data */
        $patienData = Patien::create($request_data);

        /* send email verifaction */
        Mail::to($patienData->email)->send(new verify_patien($patienData));
        /* send email verifaction */
        // redireact page check your mail //
        return redirect()->back()->with(['verifyMsg'=>'Check Your Email']);
    }
    /* end of function */
    /* function verify email */
    public function verifyPatient($id){
        $patient = Patien::findOrFail($id);
        $patient->verify = 1;
        $patient->save();
        auth()->guard('patien')->login($patient);
        return redirect()->route('edit.profile',$patient->id);
    }
    /* function verify email */



    public function profile($id){
        $patient = Patien::with('patinets_data')->findOrFail($id);
        // dd($patient->with('patinets_data'));
        return view('backEnd.patien.profile',compact('patient'));
    }
    /* edit profile function */
    public function editProfile($id){
        $patient = Patien::findOrFail($id);
        return view('backEnd.patien.edit-profile',compact('patient'));
        // return dd(Patien::find(1)->first()->agrees());
    }
    /* end of function */
    /* compleate profile function */
    public function updateProfile($id,Update $request){
        /* patient find by id */
        $patient = Patien::findOrFail($id);
        /* insert all request */
        $requestData = $request->all();
        /* check allergi name of count > 0 */
        if(count($request->allergi_name) > 0){
            /* foreach data and insert request */
            foreach($request->allergi_name as $item=> $v){
                $data2 = [
                    'width'       => $request->width,
                    'height'       => $request->height,
                    'blood'         => $request->blood,
                    'agree_name'    => json_encode($request->agree_name),
                    'allergi_name'=> json_encode($request->allergi_name),
                    // dd(json_encode($request->allergi_name[$item])),
                    'severity'     => json_encode($request->severity),
                    'reaction'     => json_encode($request->reaction),
                    'surgery_name'  => json_encode($request->surgery_name),
                    'surgery_date'  => json_encode($request->surgery_date),
                     //dd(($request->surgery_date[$item])),
                    'medication_name' => json_encode($request->medication_name),
                    'colonscopy'      => $request->colonscopy,
                    'colonscopy_data'=> $request->colonscopy_data,
                    'mammogram'     => $request->mammogram,
                    'mammogram_data'=> $request->mammogram_data,
                    'prc'           => $request->prc,
                    'prc_data'      => $request->prc_data,
                    'alcohol_type'  => $request->alcohol_type,
                    'alcohol_severity'=> $request->alcohol_severity,
                    'cigarettes'       => $request->cigarettes,
                    'tobacco'           => $request->tobacco,
                    'drug'              => $request->drug,
                    'mother'            => json_encode($request->mother),
                    'other_mother'      => $request->other_mother,
                    'father'            => json_encode($request->father),
                    'other_father'      => $request->other_father,
                    'sister'            => json_encode($request->sister),
                    'other_sister'      => $request->other_sister,
                    'brother'           => json_encode($request->brother),
                    'other_brother'     => $request->other_brother,
                    'grnadmaM'          => json_encode($request->grnadmaM),
                    'other_grnadmaM'    => $request->other_grnadmaM,
                    'grandmaF'          => json_encode($request->grandmaF),
                    'other_grandmaF'    => $request->other_grandmaF,
                    'grnadpaM'          => json_encode($request->grnadpaM),
                    'other_grnadpaM'    => $request->other_grnadpaM,
                    'grnadpaF'          => json_encode($request->grnadpaF),
                    'other_grnadpaF'    => $request->other_grnadpaF,
                    'patient_id'        =>$request->patient_id,
                ];
            }
            // dd($request->all());
        }
        /* create data in table patient Data */
        $patienCreate = patientData::create($data2);

        /* return redirect profile patient */
        return redirect()->route('patien-profile',$data2['patient_id']);
        // dd('ok');
    }
    /* end of function */
    /* function edit data profile */
    public function editData($id){
        $patient = Patien::findOrFail($id);
        return view('BackEnd.patien.editData',compact('patient'));
    }
    /* end of function */
    /* function update basic data */
    public function updateData($id,UpdateData $request){
        $patient = Patien::findOrFail($id);
        $requestData = $request->all();
        if($request->image){
            // if($request->image != 'default.jpeg'){
            //     Storage::disk('public_path')->delete('hosptail/' . $hosptail->image);
            // }
            $img = Image::make($request->image)
            ->resize(300, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/patien/' . $request->image->hashName()));
            $requestData['image'] = $request->image->hashName();
        }
        $requestData['role'] = 'patient';
        $DataUpdate = $patient->update($requestData);
        return redirect()->back()->with(['msgUpdateData'=>'data updated success']);
        // dd($request->all());
    }
    /* end of function */
    /* function logout patient */
    public function logout(){
        Auth::guard('patien')->logout();
        return redirect()->route('indexRoute');
    }
    /* end of function */

}
