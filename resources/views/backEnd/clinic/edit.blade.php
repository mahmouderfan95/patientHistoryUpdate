@extends('backEnd.layoutes.mastar')
@section('title','Edit profile Clinic')
@section('content')
<!-- edit profile clinic -->
<!-- Sidenav -->

<!-- Sidenav -->
<div class="d-flex bg-page" id="wrapper">
    @include('backEnd.clinic.slidenav')
    <div id="page-content-wrapper">
        <div class="main-content" id="panel">
        <!-- Topnav -->
            <nav class="navbarp navbar-top navbar-expand navbar-dark border-bottom">
                <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Navbar links -->
                    <button class="btn btn-primary d-lg-none ml-2" id="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></button>
                    <ul class="navbar-nav align-items-center ml-md-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="ni ni-bell-55 mr-lg-3 mt-lg-1" style="font-size: 15pt;"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right py-0 overflow-hidden">
                        <!-- Dropdown header -->
                        <div class="px-3 py-3">
                            <p class="text-muted m-0">You have <strong class="text-primary">13</strong> notifications.</p>
                        </div>
                        <!-- List group -->
                        <div class="list-group-noti list-group-flush">
                            <a href="#!" class="list-group-item list-group-item-action">
                            <div class="row align-items-center">
                                <div class="col-auto mb-3">
                                <!-- Avatar -->
                                <img alt="Image placeholder" src="imgs/team-1.jpg" class="avatar rounded-circle">
                                </div>
                                <div class="col ml--2">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                    <h6 class="text-gray-d">John Snow</h6>
                                    </div>
                                    <div class="text-right text-muted">
                                    <small class="text-primary">2 hrs ago</small>
                                    </div>
                                </div>
                                <p class="">Let's meet at Starbucks at 11:30. Wdyt?</p>
                                </div>
                            </div>
                            </a>
                            <a href="#!" class="list-group-item list-group-item-action">
                            <div class="row align-items-center">
                                <div class="col-auto mb-3">
                                <!-- Avatar -->
                                <img alt="Image placeholder" src="imgs/team-1.jpg" class="avatar rounded-circle">
                                </div>
                                <div class="col ml--2">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                    <h6 class="text-gray-d">John Snow</h6>
                                    </div>
                                    <div class="text-right text-muted">
                                    <small class="text-primary">3 hrs ago</small>
                                    </div>
                                </div>
                                <p class="">A new issue has been reported for Argon.</p>
                                </div>
                            </div>
                            </a>
                        </div>
                        <!-- View all -->
                        <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
                        </div>
                    </li>
                    </ul>
                    <ul class="navbar-nav align-items-center ml-auto ml-md-0 ">
                    <li class="nav-item dropdown">
                        <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media align-items-center">
                            <span class="avatar avatar-sm rounded-circle">
                            <img alt="Image placeholder" src="{{url('uploads/clinic/' . $clinic->image)}}">
                            </span>
                            <div class="media-body ml-3 mr-3 d-lg-block">
                            <h6 class="mb-0 font-weight-bold text-white">{{$clinic->firstName . ' ' . $clinic->middleName}}</h6>
                            </div>
                        </div>
                        </a>
                    </li>
                    </ul>
                </div>
                </div>
            </nav>
            <!-- Header -->
            <!-- Header -->
            <div class="pb-5 mt-3 align-items-center" style="min-height: 300px; background-image: url(/imgs/03.jpg); background-size: cover; background-position: center top;">
              <!-- Mask -->
              <span class="mask bg-gradient-white opacity-1"></span>
            </div>
            <!-- Page content -->
            <div class="container-fluid mt--9">
              <div class="row">
                <div class="col-xl-4 order-xl-2">
                  <div class="card card-profile">
                    <img src="{{url('imgs/BgLogin.jpg')}}" height="150" alt="Image placeholder" class="card-img-top">
                    <div class="row justify-content-center">
                      <div class="col-lg-3 order-lg-2">
                        <div class="card-profile-image">
                          <a href="#">
                            <img src="{{url('uploads/clinic/' . $clinic->image)}}" class="rounded-circle">
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                      <div class="d-flex justify-content-between">
                        <a href="#" class="float-lg-left"><i class="fas fa-edit mr-1"></i>Edit</a>
                      </div>
                    </div>
                    <div class="card-body pt-0">
                      <div class="row">
                        <div class="col">
                          <div class="card-profile-stats d-flex justify-content-center">
                            <div class="text-center mt-3">
                              <span class="heading">22</span>
                              <h2 class="h3 text-gray">{{$clinic->clinicName}}</h2>
                            </div>
                          </div>
                        </div>
                      </div>
                      <h5 class="h5 font-weight-700 mb-5 text-center mt-3">Happy Dental</h5>
                      <div class="">
                        <h5 class="h5 mt-3"><i class="fas fa-hospital-alt mr-3 text-primary"></i>{{$clinic->Primary_Speciality}}</h5>
                        <h5 class="h5 mt-3"><i class="fas fa-location-arrow mr-3 text-primary"></i>{{$clinic->country}}</h5>
                        <h5 class="h5 mt-3"><i class="fas fa-notes-medical mr-3 text-primary"></i>{{$clinic->telephone}}</h5>
                        <h5 class="h5 mt-3"><i class="fas fa-mail-bulk mr-3 text-primary"></i>{{$clinic->email}}</h5>
                        <h5 class="h5 mt-3 "><i class="fa fa-phone mr-3 text-primary" aria-hidden="true"></i> {{$clinic->phoneNumber}}</h5>
                        <h5 class="h5 mt-3"><i class="fas fa-tty mr-3 text-primary"></i> 19920</h5>
                        <h5 class="h5 mt-3 mb-5"><i class="fas fa-hospital-alt mr-3 text-primary"></i>02 3384254</h5>
                      </div>
                      <div class="text-center">
                        <button class="btn btn-primary"><h5 class="mt-auto mb-auto p-1"><i class="fa fa-plus-circle mr-2" aria-hidden="true"></i> Add Branch</h5></button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-8 order-xl-1">
                  <div class="card pr-5 pl-5">
                    <div class="card-header">
                      <div class="row align-items-center">
                        <div class="col-8">
                          <h3 class="mb-0">Edit Profile</h3>
                        </div>
                      </div>
                    </div>
                    <div class="card-body">
                        @foreach($errors->all() as $error)
                        <div class="alert alert-danger">{{$error}}</div>
                        @endforeach
                        @if(session('msgUpdate'))
                        <div id="div_success" class="alert alert-success">
                            data updated successfuly
                        </div>
                        @endif

                      <form action="{{route('clinic.update.profile',$clinic->id)}}" id = "edit-clinic" data-id = "{{$clinic->id}}" enctype="multipart/form-data" role="form" action="" class="login-box" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name = "old_password" value="{{$clinic->password}}">
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
                            <div class="col-md-6 mb-xl-3">
                                <div class="form-group">
                                    <label class="h5">Hospital Name</label>
                                    <input value = "{{$clinic->clinicName}}" class="form-control" type="text" name="clinicName" placeholder="Hospital Name">
                                </div>
                            </div>
                            <div class="col-md-6 mb-xl-3">
                                <div class="form-group">
                                    <label class="h5">Primary Speciality</label>
                                    <input value = "{{$clinic->Primary_Speciality}}" class="form-control" type="text" name="Primary_Speciality" placeholder="Primary Speciality">
                                </div>
                            </div>
                            <div class="col-md-6 mb-xl-3">
                                <div class="form-group">
                                    <label class="h5">Medical License Namber</label>
                                    <input value = "{{$clinic->Medical_License_Number}}" class="form-control" type="text" placeholder="Medical License Namber" name="Medical_License_Number">
                                </div>
                            </div>
                            {{-- <div class="col-md-6 mb-xl-3">
                                <div class="form-group">
                                    <label class="h5">Hospital License</label>
                                    <input class="form-control" type="file" placeholder="Hospital License" name="clinic_License">
                                </div>
                            </div> --}}
                            <div class="col-md-4 mb-xl-3">
                                <div class="form-group">
                                    <label class="h5">Phone Number</label>
                                    <input value = "{{$clinic->phoneNumber}}" class="form-control" type="text" name="phoneNumber" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="col-md-4 mb-xl-3">
                                <div class="form-group">
                                    <label class="h5">Telephone</label>
                                    <input value = "{{$clinic->telephone}}" class="form-control" type="text" name="telephone" placeholder="Telephone">
                                </div>
                            </div>
                            <div class="col-md-4 mb-xl-3">
                                <div class="form-group">
                                    <label class="h5">Hotline</label>
                                    <input value = "{{$clinic->Hotline}}" class="form-control" type="text" name="Hotline" placeholder="Hotline">
                                </div>
                            </div>
                            <div class="col-md-6 mb-xl-3">
                                <div class="form-group">
                                    <label class="h5">Country</label>
                                    <input value = "{{$clinic->country}}" class="form-control" type="text" name="country" placeholder="Country">
                                </div>
                            </div>
                            <div class="col-md-6 mb-xl-3">
                                <div class="form-group">
                                    <label class="h5">ZIP Code</label>
                                    <input value = "{{$clinic->zip_code}}" class="form-control" type="text" name="zip_code" placeholder="ZIP Code">
                                </div>
                            </div>
                            <div class="col-md-12 mb-xl-3">
                                <div class="form-group">
                                    <label class="h5">Email</label>
                                    <input value = "{{$clinic->email}}" class="form-control" type="email" name="email" placeholder="Email">
                                </div>
                            </div>
                            {{-- <div class="col-md-12 mb-xl-3">
                                <div class="form-group">
                                    <label class="h5">Password</label>
                                    <input class="form-control" type="password" name="password" placeholder="Password">
                                </div>
                            </div> --}}

                            <div class="col-12 text-center mb-5 mt-5">
                                <button type="submit" class=" col-9 btn btn-primary font-weight-400 mr-auto ml-auto">Submite</button>
                            </div>
                        </div>
                    </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
</div>
  <!-- Main content -->

@stop




@section('scripts')
    {{-- <script>
        $(function(){
            $('#edit-clinic').on('submit',function(e){
                e.preventDefault();
                var formData = new FormData($("#edit-clinic")[0]),
                    path = "{{route('clinic.update.profile',':id')}}",
                    clinicID = $(this).attr('data-id'),
                    path = path.replace(':id',clinicID);
                    $.ajax({
                        url:path,
                        method:'put',
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        data:formData,
                        processData:false,
                        contentType:'"application/x-www-form-urlencoded',
                        cache:false,
                        success:function(data){
                            if(data.stauts == true){
                                $('#div_success').show();
                            }
                        },
                        error:function(data){
                            if(data.stauts == false){
                                $('#div_success').val(data.msg).show();
                            }
                        }
                    })

            });


        });

    </script> --}}

@stop

