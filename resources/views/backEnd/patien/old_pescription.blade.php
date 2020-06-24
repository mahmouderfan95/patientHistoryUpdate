@extends('backEnd.layoutes.mastar')
@section('title','old pescription')
@section('content')
@include('backEnd.patien.slidenav')
	@php 
  		$Raoucheh 		  = $patient->Raoucheh->count(); 
  		$patientAnalzazes = $patient->patient_analzes->count(); 
  		$patient_rays 	  = $patient->patient_rays->count(); 
  @endphp

  <div class="d-flex bg-page" id="wrapper">
  	@include('backEnd.patien.slidenav')
  	<!-- Page Content -->
    <div id="page-content-wrapper">
        <nav class="navbarp navbar-top navbar-expand navbar-dark border-bottom">
            <div class="container-fluid">
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Navbar links -->
                <button class="btn btn-primary d-lg-none ml-2" id="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></button>
                <!-- Search form -->
                <ul class="float-lg-right pr-3">
                  <div class="toggle toggle__wrapper">
                    <div id="toggle-example-1" role="switch" aria-checked="false" class="toggle__button">
                      <div class="toggle__switch"></div>
                    </div>
                  </div>
                </ul>
                <h6 class="h5 text-white">Privacy</h6>
                <ul class="navbar-nav align-items-center ml-md-auto">
                  <li class="nav-item dropdown">
                    <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <i class="fa fa-bell fa-fw mr-lg-3 mt-lg-1" style="font-size: 15pt;"></i>
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
                          <img alt="Image placeholder" src="imgs/team-1.jpg">
                        </span>
                        <div class="media-body ml-3 mr-3 d-lg-block">
                          <h6 class="mb-0 font-weight-bold text-white">Mohamed Ahmed</h6>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
        </nav>
        <!-- informationContent -->
        <!-- informationContent -->
        <div class="container-fluid">
          <div class="header img-header pb-6">
            <div class="container-fluid mt-5">
              <nav class="col-8 ml-auto mr-auto">
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                  <a class="nav-item nav-link font-weight-bold active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Prescription</a>
                  <a class="nav-item nav-link font-weight-bold" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Tests</a>
                  <a class="nav-item nav-link font-weight-bold" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Rideology</a>
                </div>
              </nav>
              <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                  <div class="header-body">
                    <div class="row pt-5">
                      <!-- roachata -->
                      @if($Raoucheh > 0)
                      @foreach($patient->Raoucheh as $Raoucheh)
                        <div class="pills-main pills-main-yellow col-xl-8 col-md-4 col-xs-12 row mb-4 mr-auto ml-auto">
                          <div class="col-12">
                            <h5 class="mt-4 float-right">{{$Raoucheh->created_at}}</h5>
                          </div>
                          <div class="row col-12 mb-3">
                            <div class="col-4">
                              <h5 class="font-weight-bold">State</h5>
                            </div>
                            <div class="col-8">
                              <h5 class="">{{$Raoucheh->prescription}}</h5>
                            </div>
                          </div>
                          <div class="row col-12 mb-3">
                            <div class="col-4">
                              <h5 class="font-weight-bold">Medication</h5>
                            </div>
                            @php 
                              $medication_name = json_decode($Raoucheh->medication_name);
                            @endphp 
                            @foreach($medication_name as $medication_name)
                            <div class="col-4">
                              <h5 class="">{{$medication_name}}</h5>
                            </div>
                            @endforeach
                            @php 
                              $time = json_decode($Raoucheh->time);
                            @endphp 
                            @foreach($time as $time)
                            <div class="col-4">
                              <h5 class="">{{$time}}</h5>
                            </div>
                            @endforeach
                          </div>
                        </div>
                      @endforeach
                      @else 
                      <p class="alert alert-danger">No Data</p>
                      @endif
                      <!-- roachata -->
                      
                    </div>
                  </div>
                </div>
                <!-- analzes -->
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                  <div class="header-body">
                    <div class="row pt-5">
                      @if($patientAnalzazes > 0)
                      @foreach($patient->patient_analzes as $patientAnalzazes)
                      <div class="pills-main pills-main-yellow col-xl-8 col-md-4 col-xs-12 row mb-4 mr-auto ml-auto">
                        <div class="col-12">
                          <h5 class="mt-4 float-right">{{$patientAnalzazes->created_at}}</h5>
                        </div>
                        <div class="row col-12 mb-3">
                          <div class="col-4">
                            <h5 class="font-weight-bold">State</h5>
                          </div>
                          @php 
                            $analzes_name = json_decode($patientAnalzazes->name);
                          @endphp 
                          @foreach($analzes_name as $analzes_name)
                          <div class="col-8">
                            <h5 class="">{{$analzes_name}}</h5>
                          </div>
                          @endforeach
                        </div>
                        <div class="row col-12 mb-3">
                          <div class="col-4">
                            <h5 class="font-weight-bold">Test</h5>
                          </div>
                          <div class="col-8">
                            <h5 class="">{{$patientAnalzazes->description}}</h5>
                          </div>
                        </div>
                      </div>
                      @endforeach
                      @else 
                      <p class="alert alert-danger">No Data</p>
                      @endif
                      
                    </div>
                  </div>
                </div>
                <!-- analzes -->
                <!-- rays -->
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                  <div class="header-body">
                    <div class="row pt-5">
                      @if($patient_rays > 0)
                      @foreach($patient->patient_rays as $patient_rays)
                      <div class="pills-main pills-main-yellow col-xl-8 col-md-4 col-xs-12 row mb-4 mr-auto ml-auto">
                        <div class="col-12">
                          <h5 class="mt-4 float-right">{{$patient_rays->created_at}}</h5>
                        </div>
                        <div class="row col-12 mb-3">
                          <div class="col-4">
                            <h5 class="font-weight-bold">State</h5>
                          </div>
                          @php 
                          $rays_name = json_decode($patient_rays->name);
                          @endphp 
                          @foreach($rays_name as $rays_name)
                          <div class="col-8">
                            <h5 class="">{{$rays_name}}</h5>
                          </div>
                          @endforeach
                        </div>
                        <div class="row col-12 mb-3">
                          <div class="col-4">
                            <h5 class="font-weight-bold">Rideology</h5>
                          </div>
                          <div class="col-8">
                            <h5 class="">{{$patient_rays->description}}</h5>
                          </div>
                        </div>
                      </div>
                      @endforeach
                      @else
                      <p class="alert alert-danger">No Data</p>
                      @endif
                      {{-- <div class="pills-main pills-main-yellow col-xl-8 col-md-4 col-xs-12 row mb-4 mr-auto ml-auto">
                        <div class="col-12">
                          <h5 class="mt-4 float-right">15/05/2020</h5>
                        </div>
                        <div class="row col-12 mb-3">
                          <div class="col-4">
                            <h5 class="font-weight-bold">State</h5>
                          </div>
                          <div class="col-8">
                            <h5 class="">High Blood Pressure</h5>
                          </div>
                        </div>
                        <div class="row col-12 mb-3">
                          <div class="col-4">
                            <h5 class="font-weight-bold">Rideology</h5>
                          </div>
                          <div class="col-8">
                            <h5 class="">High Blood Pressure</h5>
                          </div>
                        </div>
                      </div> --}}
                    </div>
                  </div>
                </div>
                <!-- rays -->
              </div>
            </div>
          </div>
        </div>
        <!--Start-Footer-->
        @include('backEnd.layoutes.footer')
      <!--End-Footer-->
    </div>
  </div>

@stop