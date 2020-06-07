@extends('backEnd.layoutes.mastar')
@section('title','Edit profile hosptail')
@section('content')
<!-- edit profile hosptail -->
<!-- Sidenav -->

<!-- Sidenav -->
<div class="d-flex bg-page" id="wrapper">
    @include('backEnd.hosptail.sidenav')
    <div id="page-content-wrapper">
        <div class="main-content" id="panel">
            <!-- Topnav -->
            <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
              <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <!-- Navbar links -->
                  <ul class="navbar-nav align-items-center ml-md-auto ">
                    <li class="nav-item d-xl-none">
                      <!-- Sidenav toggler -->
                      <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                        <div class="sidenav-toggler-inner">
                          <i class="sidenav-toggler-line"></i>
                          <i class="sidenav-toggler-line"></i>
                          <i class="sidenav-toggler-line"></i>
                        </div>
                      </div>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="ni ni-bell-55" style="font-size: 15pt;"></i>
                      </a>
                      <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
                        <!-- Dropdown header -->
                        <div class="px-3 py-3">
                          <h6 class="text-sm text-muted m-0">You have <strong class="text-primary">13</strong> notifications.</h6>
                        </div>
                        <!-- List group -->
                        <div class="list-group list-group-flush">
                          <a href="#!" class="list-group-item list-group-item-action">
                            <div class="row align-items-center">
                              <div class="col-auto">
                                <!-- Avatar -->
                                <img alt="Image placeholder" src="{{url('imgs/team-1.jpg')}}" class="avatar rounded-circle">
                              </div>
                              <div class="col ml--2">
                                <div class="d-flex justify-content-between align-items-center">
                                  <div>
                                    <h4 class="mb-0 text-sm">John Snow</h4>
                                  </div>
                                  <div class="text-right text-muted">
                                    <small>2 hrs ago</small>
                                  </div>
                                </div>
                                <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                              </div>
                            </div>
                          </a>
                          <a href="#!" class="list-group-item list-group-item-action">
                            <div class="row align-items-center">
                              <div class="col-auto">
                                <!-- Avatar -->
                                <img alt="Image placeholder" src="{{url('imgs/team-1.jpg')}}" class="avatar rounded-circle">
                              </div>
                              <div class="col ml--2">
                                <div class="d-flex justify-content-between align-items-center">
                                  <div>
                                    <h4 class="mb-0 text-sm">John Snow</h4>
                                  </div>
                                  <div class="text-right text-muted">
                                    <small>3 hrs ago</small>
                                  </div>
                                </div>
                                <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
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
                            <img alt="Image placeholder" src="{{url('uploads/hosptail/' . $hosptail->image)}}">
                          </span>
                          <div class="media-body ml-3 d-none d-lg-block">
                            <h3 class="mb-0 font-weight-bold">{{$hosptail->hosptailName}}</h3>
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
            <div class="header pb-5 d-flex align-items-center" style="min-height: 400px; background-image: url(/imgs/03.jpg); background-size: cover; background-position: center top;">
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
                            <img src="{{url('uploads/hosptail/' . $hosptail->image)}}" class="rounded-circle">
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
                            <div>
                              <span class="heading">22</span>
                              <h2 class="h3 text-gray">{{$hosptail->hosptailName}}</h2>
                            </div>
                          </div>
                        </div>
                      </div>
                      <h5 class="h2 font-weight-700 mb-5 text-center mt-3">Happy Dental</h5>
                      <div class="">
                        <h5 class="h3 mt-3"><i class="fas fa-hospital-alt mr-3 text-primary"></i>{{$hosptail->Primary_Speciality}}</h5>
                        <h5 class="h3 mt-3"><i class="fas fa-location-arrow mr-3 text-primary"></i>{{$hosptail->country}}</h5>
                        <h5 class="h3 mt-3"><i class="fas fa-notes-medical mr-3 text-primary"></i>{{$hosptail->telephone}}</h5>
                        <h5 class="h3 mt-3"><i class="fas fa-mail-bulk mr-3 text-primary"></i>{{$hosptail->email}}</h5>
                        <h5 class="h3 mt-3 "><i class="fa fa-phone mr-3 text-primary" aria-hidden="true"></i> {{$hosptail->phoneNumber}}</h5>
                        <h5 class="h3 mt-3"><i class="fas fa-tty mr-3 text-primary"></i> 19920</h5>
                        <h5 class="h3 mt-3 mb-5"><i class="fas fa-hospital-alt mr-3 text-primary"></i>02 3384254</h5>
                      </div>
                      <div class="text-center">
                        <button class="btn btn-primary"><h3><i class="fa fa-plus-circle mr-2" aria-hidden="true"></i> Add Branch</h3></button>
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

                      <form action="{{route('hosptail.update.profile',$hosptail->id)}}" id = "edit-hosptail" data-id = "{{$hosptail->id}}" enctype="multipart/form-data" role="form" action="" class="login-box" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="PUT">
                        <input type="hidden" name = "old_password" value="{{$hosptail->password}}">
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
                                    <label class="h3 font-weight-bold">Hospital Name</label>
                                    <input value = "{{$hosptail->hosptailName}}" class="form-control" type="text" name="hosptailName" placeholder="Hospital Name">
                                </div>
                            </div>
                            <div class="col-md-6 mb-xl-3">
                                <div class="form-group">
                                    <label class="h3 font-weight-bold">Primary Speciality</label>
                                    <input value = "{{$hosptail->Primary_Speciality}}" class="form-control" type="text" name="Primary_Speciality" placeholder="Primary Speciality">
                                </div>
                            </div>
                            <div class="col-md-6 mb-xl-3">
                                <div class="form-group">
                                    <label class="h3 font-weight-bold">Medical License Namber</label>
                                    <input value = "{{$hosptail->Medical_License_Number}}" class="form-control" type="text" placeholder="Medical License Namber" name="Medical_License_Number">
                                </div>
                            </div>
                            {{-- <div class="col-md-6 mb-xl-3">
                                <div class="form-group">
                                    <label class="h3 font-weight-bold">Hospital License</label>
                                    <input class="form-control" type="file" placeholder="Hospital License" name="Hosptail_License">
                                </div>
                            </div> --}}
                            <div class="col-md-4 mb-xl-3">
                                <div class="form-group">
                                    <label class="h3 font-weight-bold">Phone Number</label>
                                    <input value = "{{$hosptail->phoneNumber}}" class="form-control" type="text" name="phoneNumber" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="col-md-4 mb-xl-3">
                                <div class="form-group">
                                    <label class="h3 font-weight-bold">Telephone</label>
                                    <input value = "{{$hosptail->telephone}}" class="form-control" type="text" name="telephone" placeholder="Telephone">
                                </div>
                            </div>
                            <div class="col-md-4 mb-xl-3">
                                <div class="form-group">
                                    <label class="h3 font-weight-bold">Hotline</label>
                                    <input value = "{{$hosptail->Hotline}}" class="form-control" type="text" name="Hotline" placeholder="Hotline">
                                </div>
                            </div>
                            <div class="col-md-6 mb-xl-3">
                                <div class="form-group">
                                    <label class="h3 font-weight-bold">Country</label>
                                    <input value = "{{$hosptail->country}}" class="form-control" type="text" name="country" placeholder="Country">
                                </div>
                            </div>
                            <div class="col-md-6 mb-xl-3">
                                <div class="form-group">
                                    <label class="h3 font-weight-bold">ZIP Code</label>
                                    <input value = "{{$hosptail->zip_code}}" class="form-control" type="text" name="zip_code" placeholder="ZIP Code">
                                </div>
                            </div>
                            <div class="col-md-12 mb-xl-3">
                                <div class="form-group">
                                    <label class="h3 font-weight-bold">Email</label>
                                    <input value = "{{$hosptail->email}}" class="form-control" type="email" name="email" placeholder="Email">
                                </div>
                            </div>
                            {{-- <div class="col-md-12 mb-xl-3">
                                <div class="form-group">
                                    <label class="h3 font-weight-bold">Password</label>
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
            $('#edit-hosptail').on('submit',function(e){
                e.preventDefault();
                var formData = new FormData($("#edit-hosptail")[0]),
                    path = "{{route('hosptail.update.profile',':id')}}",
                    hosptailID = $(this).attr('data-id'),
                    path = path.replace(':id',hosptailID);
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

