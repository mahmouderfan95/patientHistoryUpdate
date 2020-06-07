@extends('backEnd.layoutes.mastar')
@section('title','Labs Register')
@section('content')
@include('backEnd.layoutes.navbar')
<section class="signup-step-container col-md-6 container bg-registr">
    <div class="container mb-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                <form enctype="multipart/form-data" role="form" action="{{route('labs_post_Register')}}" method="POST" class="login-box">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="container col-md-12">
                            <div class="avatar-wrapper">
                                <img class="profile-pic" src="" />
                                <div class="upload-button">
                                    <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
                                </div>
                                <input name = "image" class="file-upload" type="file" accept="image/*"/>
                            </div>
                        </div>
                        <div class="col-md-12 mb-xl-3">
                            <div class="form-group">
                                <label class="h3 font-weight-bold">Lab Name</label>
                                <input class="form-control" type="text" name="labsName" placeholder="Lab Name">
                            </div>
                        </div>
                        <div class="col-md-6 mb-xl-3">
                            <div class="form-group">
                                <label class="h3 font-weight-bold">Medical License Namber</label>
                                <input class="form-control" type="text" placeholder="Medical License Namber" name="Medical_License_Number">
                            </div>
                        </div>
                        <div class="col-md-6 mb-xl-3">
                            <div class="form-group">
                                <label class="h3 font-weight-bold">Lab License</label>
                                <input class="form-control" type="file" placeholder="" name="labs_License">
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
