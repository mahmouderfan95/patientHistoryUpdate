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
                <form id = "register" enctype="multipart/form-data" class="login-box">
                    {{ csrf_field() }}
                    <input type="hidden" name="role">
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
                                    <form>
                                        <input class="mdl-textfield__input form-control" type="text" id="number" placeholder="+2001011962928" name="phoneNumber">
                                         <div id="recaptcha-container"></div>
                                        {{-- <button class="btn btn-success" onclick="phoneAuth();">Send Code</button>  --}}
                                    </form>
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
                            <button onclick="phoneAuth(); id = "sign-in-button" type="submit"  class=" col-9 btn btn-primary font-weight-400 mr-auto ml-auto">Submite</button>
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
@section('scripts')
<script>
    // var base_url = "http:\/\/ladycaresa.com";
// Login Stuff
$('#register').submit(function(event) {
    event.preventDefault();
    event.stopImmediatePropagation();
    var career_submit = document.getElementById("save");
    //career_submit.disabled = true;
    console.log('login');
    var formData = new FormData(this);
    $.ajax({
            type: 'POST',
            url: 'register',
            dataType: 'json',
            data: formData,
            beforeSend: function() {
                console.log("before");
                $("#loading").show();
            },
            success: function (response) {
                    console.log("after");
                    if(response.errors) {
                        console.log(response.errors);
                        var error_msg = document.getElementById("error_msg");
                        $('#error_msg').removeClass("alert alert-success");
                        $('#error_msg').addClass( "alert alert-danger hideit" );
                        error_msg.innerHTML= response.errors;
                                $("#loading").hide();
                                $("#error_msg").fadeIn(2000);
                    }

                    if(response.message) {
                        //console.log(response.message);
                        var error_msg = document.getElementById("error_msg");
                        $('#error_msg').removeClass("alert alert-danger hideit");
                        $('#error_msg').addClass( "alert alert-success hideit" );
                        //error_msg.innerHTML= response.message;
                        $("#loading").hide();
                        // window.location = base_url;
                        console.log(response.code);
                        console.log(response.mobile);
                        console.log(response.message);
                        function phoneAuth(){
                        firebase.auth().signInWithPhoneNumber(response.mobile, response.code)
                        .then(function (confirmationResult) {
                        // SMS sent. Prompt user to type the code from the message, then sign the
                        // user in with confirmationResult.confirm(code).
                        window.confirmationResult = confirmationResult;
                        alert('msg is sent');
                        }).catch(function (error) {
                        // Error; SMS not sent
                        // ...
                        phoneAuth();
                        console.log(error.message);
                        });
                    }
                    }
            },
            cache: false,
            contentType: false,
            processData: false
    });

});
// /ADD Item
</script>


@stop
