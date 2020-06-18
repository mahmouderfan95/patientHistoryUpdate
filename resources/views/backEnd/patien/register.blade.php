@extends('backEnd.layoutes.mastar')
@section('title','Patien Register')
@section('content')
@include('backEnd.layoutes.navbar')
<!-- start account patien -->
<section class="signup-step-container container col-md-6 bg-registr mb-5">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-10">
                @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
                @endforeach
                @if (session('verifyMsg'))
                <div class="alert alert-success">
                    {{ session('verifyMsg') }}
                </div>
                @endif
                <div id="error_msg"></div>
                <form action = "{{route('patien_post_Register')}}" method="POST" id = "register" enctype="multipart/form-data" class="login-box">
                    {{ csrf_field() }}
                    <input type="hidden" name="role">
                    <input type="hidden" name="is_active">
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
                        <div class="col-md-4 mb-xl-3">
                            <div class="form-group">
                                <label class="h6 font-weight-bold">First Name</label>
                                <input class="form-control" type="text" name="firstName" placeholder="First Name">
                            </div>
                        </div>
                        <div class="col-md-4 mb-xl-3">
                            <div class="form-group">
                                <label class="h6 font-weight-bold">Middle Name</label>
                                <input class="form-control" type="text" name="middleName" placeholder="Middle Name">
                            </div>
                        </div>
                        <div class="col-md-4 mb-xl-3">
                            <div class="form-group">
                                <label class="h6 font-weight-bold">Last Name</label>
                                <input class="form-control" type="text" name="lastName" placeholder="Last name">
                            </div>
                        </div>
                        <div class="col-md-6 mb-xl-3">
                            <div class="form-group">
                                <label class="h6 font-weight-bold">Birth date</label>
                                <input class="form-control" type="date" placeholder="BIRTHDATE" name="BirthDate">
                            </div>
                        </div>
                        <div class="col-md-6 mb-xl-3">
                            <label class="h6 font-weight-bold" for="gender">Gender</label>
                            <div class="form-flex">
                                <input type="radio" name="gender" value="male" id="male" checked="checked" />
                                <label for="male">Male</label>

                                <input type="radio" name="gender" value="female" id="female" />
                                <label for="female">Female</label>
                            </div>
                        </div>
                        <div class="col-md-6 mb-xl-3">
                            <div class="form-group">
                                <label class="h6 font-weight-bold">Email</label>
                                <input class="form-control" type="email" name="email" placeholder="Mohammed0012@gmail.com">
                            </div>
                        </div>

                        <div class="col-md-6 mb-xl-3">
                            <div class="form-group">
                                <label class="h6 font-weight-bold">Phone Number</label>
                                <input type="text" placeholder="+2001011962928" name="phoneNumber" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6 mb-xl-3">
                            <div class="form-group">
                                <label class="h6 font-weight-bold">Password</label>
                                <input id = "psw"pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="form-control" type="password" name="password" placeholder="Password">
                                <div id="message">
                                    {{-- <h3>Password must contain the following:</h3> --}}
                                    <p id="letter" class="invalid"><span>A lowercase letter</span></p>
                                    <p id="capital" class="invalid"><span>A capital (uppercase) letter</span></p>
                                    {{-- <p id="number" class="invalid"><span>A number</span></p> --}}
                                    <p id="length" class="invalid"><span>Minimum 8 characters </span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-xl-3">
                            <div class="form-group">
                                <label class="h6 font-weight-bold">Confirm Password</label>
                                <input class="form-control" type="password" name="password_confirmation" placeholder="Confirm Password">
                            </div>
                        </div>
                        <div class="col-md-12 mb-xl-3">
                            <label class="h6 font-weight-bold" for="state">State</label>
                            <div class="form-flex">
                                <input type="radio" name="state" value="single" id="single" checked="checked" />
                                <label for="single">Single</label>

                                <input type="radio" name="state" value="married" id="married" />
                                <label for="married">Married</label>

                                <input type="radio" name="state" value="divorce" id="divorce" />
                                <label for="divorce">Divorce</label>
                            </div>
                        </div>
                        <div class="col-12 text-center mb-5 mt-5">
                            <button onclick="phoneAuth();" id = "sign-in-button" type="submit"  class=" col-9 btn btn-primary font-weight-400 mr-auto ml-auto">Submite</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- end account patien -->

<!-- footer -->
@include('backEnd.layoutes.footer')
<!-- footer -->

@stop

