@extends('backEnd.layoutes.mastar')
@section('title',$patient->firstName . ' ' . $patient->middleName)
@section('content')

<div class="d-flex bg-page" id="wrapper">
    @include('backEnd.pharmacy.slidenav')
    <!-- Page Content -->
    <div id="page-content-wrapper">
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
                              <img alt="Image placeholder" src="{{url('imgs/team-1.jpg')}}" class="avatar rounded-circle">
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
                              <img alt="Image placeholder" src="{{url('imgs/team-1.jpg')}}" class="avatar rounded-circle">
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
                          <img alt="Image placeholder" src="{{url('imgs/team-1.jpg')}}">
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
        <div class="container-fluid">
          <div class="row pt-5">
            <div class="col-md-10 slide-img mr-auto ml-auto ">
              <img class="d-xs-none" id="about-img" src="{{url('imgs/s4.jpg')}}" height="300" width="895" alt="Responsive image">
            </div>
            <div class="col-xl-4 col-md-4 mr-auto ml-auto">
              <!-- Button trigger modal -->
              <div class="text-center mt-5">
                <button type="button" class="btn btn-primary text-white col-6" data-toggle="modal" data-target="#Medication">
                  <i class="fas fa-eye mr-2"></i> Show
                </button>
              </div>
              <!-- Modal -->
                <div class="modal fade" id="Medication" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Medication</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="col-md-12">
                          <div class="pills-main pills-main-yellow col-xl-8 col-md-4 col-xs-12 row mb-4 mr-auto ml-auto">
                            <div class="col-12">
                              <h5 class="mt-4 mb-3 float-right">{{$patient->Raoucheh[0]->created_at}}</h5>
                            </div>
                            <div class="row col-12 mb-3">
                              <div class="col-4">
                                <h5 class="font-weight-bold">Medication</h5>
                              </div>
                              @php
                                $medication_name = json_decode($patient->Raoucheh[0]->medication_name,true);
                                $times_day = json_decode($patient->Raoucheh[0]->time,true);
                              @endphp
                              @foreach($medication_name as $ro)
                                <div class="col-4">
                                    <h5 class="">{{$ro}}</h5>
                                </div>
                              @endforeach
                              @foreach($times_day as $time)
                              <div class="col-4">
                                <h5 class="">{{$time}}</h5>
                              </div>
                              @endforeach
                            </div>
                            {{-- <div class="row col-12 mb-3">
                              <div class="col-4">
                                <h5 class="font-weight-bold"></h5>
                              </div>
                              <div class="col-4">
                                <h5 class="">HighBlood</h5>
                              </div>
                              <div class="col-4">
                                <h5 class="">After Eating</h5>
                              </div>
                            </div> --}}
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
        @include('backEnd.layoutes.footer')
    </div>
</div>
<!-- Main content -->
{{-- </div> --}}

@stop
