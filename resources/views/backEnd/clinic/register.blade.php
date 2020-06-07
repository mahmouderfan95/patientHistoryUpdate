@extends('backEnd.layoutes.mastar')
@section('title','Clinic Register')
@section('content')
@include('backEnd.layoutes.navbar')
<section class="signup-step-container col-md-6 container bg-registr">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                @foreach($errors->all() as $error)
                <div class="aler alert-danger">{{$error}}</div>
                @endforeach
                <form enctype="multipart/form-data" role="form" action="{{route('clinic_post_Register')}}" method="POST" class="login-box">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="container col-md-12">
                            <div class="avatar-wrapper">
                                <img class="profile-pic" src="" />
                                <div class="upload-button">
                                    <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
                                </div>
                                <input class="file-upload" type="file" accept="image/*" name="image">
                            </div>
                        </div>
                        <div class="col-md-6 mb-xl-3">
                            <div class="form-group">
                                <label class="h3 font-weight-bold">Clinic Name</label>
                                <input class="form-control" type="text" name="clinicName" placeholder="Clinic Name">
                            </div>
                        </div>
                        <div class="col-md-6 mb-xl-3">
                            <div class="form-group">
                                <label class="h3 font-weight-bold">Primary Speciality</label>
                                <select class="form-control" type="text" name="Primary_Speciality">
                                    <option value="0">Chosse ..</option>
                                    <option value="Audiologist">Audiologist</option>
                                    <option value="Audiologist">Allergist</option>
                                    <option value="Audiologist">Anesthesiologist </option>
                                    <option value="Audiologist">Andrologists </option>
                                    <option value="Audiologist">Cardiologist </option>
                                    <option value="Audiologist">Cardiovascular </option>
                                    <option value="Audiologist">Cardiovascular Surgery</option>
                                    <option value="Audiologist">Neurologist </option>
                                    <option value="Audiologist">Dentist </option>
                                    <option value="Audiologist">dermatologist </option>
                                    <option value="Audiologist">Emergency Doctors</option>
                                    <option value="Audiologist">Endocrinologist  </option>
                                    <option value="Audiologist">gynecologist  </option>
                                    <option value="Audiologist">Psychiatrist  </option>
                                    <option value="Audiologist">hematology  </option>
                                    <option value="Audiologist">Hepatologists   </option>
                                    <option value="Audiologist">Immunologist   </option>
                                    <option value="Audiologist">Internists Gastroenterology Neonatologist </option>
                                    <option value="Audiologist">Orthopdist   </option>
                                    <option value="Audiologist">Pediatrician   </option>
                                    <option value="Audiologist">Plastic Surgeon </option>
                                    <option value="Audiologist">Surgeon   </option>
                                    <option value="Audiologist">Urologist     </option>
                                    <option value="Audiologist">Rheumatologist    </option>
                                    <option value="Audiologist">Ophthalmologist    </option>
                                    <option value="Audiologist">General Practitioner </option>
                                    <option value="Audiologist">Ear , Nose and Throat </option>
                                    <option value="Audiologist">Endoscopic Surgeon </option>
                                    <option value="Audiologist">Radiologist     </option>
                                    <option value="Audiologist">Laboratory & Analytical </option>
                                    <option value="Audiologist">Pharmacist      </option>
                                    <option value="Audiologist">Oncologist     </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 mb-xl-3">
                            <div class="form-group">
                                <label class="h3 font-weight-bold">Medical License Namber</label>
                                <input class="form-control" type="text" placeholder="Medical License Namber" name="Medical_License_Number">
                            </div>
                        </div>
                        <!-- Dgree -->
                        <div class="col-md-6 mb-xl-3">
                            <div class="form-group">
                                <label class="h3 font-weight-bold">Degree</label>
                                <select class="form-control" name="degree">
                                    <option value="">Chosse .. </option>
                                    <option value="MD">MD</option>
                                    <option value="BSC">BSC</option>
                                    <option value="MSC">MSC</option>
                                    <option value="PsyD">PsyD</option>
                                    <option value="PhD">PhD</option>
                                    <option value="MDCM">MDCM</option>
                                    <option value="DO">DO</option>
                                    <option value="MBBS">MBBS</option>
                                    <option value="MBChB">MBChB</option>
                                    <option value="DDS">DDS</option>
                                    <option value="DPM">DPM</option>
                                    <option value="EdD">EdD</option>
                                    <option value="PharmD">PharmD</option>
                                </select>
                            </div>
                        </div>
                        <!-- Dgree -->
                        <!-- Description -->
                        <div class="col-md-6 mb-xl-3">
                            <div class="form-group">
                                <label class="h3 font-weight-bold">Medical description</label>
                                <input class="form-control" type="text" placeholder="medical_description" name="medical_description">
                            </div>
                        </div>
                        <!-- Description -->
                        <div class="col-md-6 mb-xl-3">
                            <div class="form-group">
                                <label class="h3 font-weight-bold">Clinic License</label>
                                <input class="form-control" type="file" placeholder="Clinic License" name="Clinic_License">
                            </div>
                        </div>
                        <div class="col-md-4 mb-xl-3">
                            <div class="form-group">
                                <label class="h3 font-weight-bold">Phone Number</label>
                                <input class="form-control" type="text" name="phoneNumber" placeholder="Phone Number">
                            </div>
                        </div>
                        <div class="col-md-4 mb-xl-3">
                            <div class="form-group">
                                <label class="h3 font-weight-bold">Telephone</label>
                                <input class="form-control" type="text" name="telephone" placeholder="Telephone">
                            </div>
                        </div>
                        <div class="col-md-4 mb-xl-3">
                            <div class="form-group">
                                <label class="h3 font-weight-bold">Hotline</label>
                                <input class="form-control" type="text" name="Hotline" placeholder="Hotline">
                            </div>
                        </div>
                        <div class="col-md-6 mb-xl-3">
                            <div class="form-group">
                                <label class="h3 font-weight-bold">Country</label>
                                <input class="form-control" type="text" name="country" placeholder="Country">
                            </div>
                        </div>
                        <div class="col-md-6 mb-xl-3">
                            <div class="form-group">
                                <label class="h3 font-weight-bold">City</label>
                                <input class="form-control" type="text" name="city" placeholder="City">
                            </div>
                        </div>
                        <div class="col-md-4 mb-xl-3">
                            <div class="form-group">
                                <label class="h3 font-weight-bold">Area</label>
                                <input class="form-control" type="text" name="area" placeholder="Area">
                            </div>
                        </div>
                        <div class="col-md-4 mb-xl-3">
                            <div class="form-group">
                                <label class="h3 font-weight-bold">Street</label>
                                <input class="form-control" type="text" name="street" placeholder="Street">
                            </div>
                        </div>
                        <div class="col-md-4 mb-xl-3">
                            <div class="form-group">
                                <label class="h3 font-weight-bold">ZIP Code</label>
                                <input class="form-control" type="text" name="zip_code" placeholder="ZIP Code">
                            </div>
                        </div>
                        <div class="col-md-12 mb-xl-3">
                            <div class="form-group">
                                <label class="h3 font-weight-bold">Email</label>
                                <input class="form-control" type="email" name="email" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-md-6 mb-xl-3">
                            <div class="form-group">
                                <label class="h3 font-weight-bold">Password</label>
                                <input class="form-control" type="password" name="password" placeholder="Password">
                            </div>
                        </div>
                        <div class="col-md-6 mb-xl-3">
                            <div class="form-group">
                                <label class="h3 font-weight-bold">Confirm Password</label>
                                <input class="form-control" type="password" name="password_confirmation" placeholder="Confirm Password">
                            </div>
                        </div>
                        <div class="col-12 text-center mb-5 mt-5">
                            <button type="submit" class=" col-9 btn btn-primary font-weight-400 mr-auto ml-auto">Submite</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@include('backEnd.layoutes.footer')


@stop
