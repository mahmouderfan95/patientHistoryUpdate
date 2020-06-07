@extends('backEnd.layoutes.mastar')
@section('title',$patient->firstName . ' ' . $patient->middleName)
@section('content')
<!-- Main content -->
<div class="d-flex bg-page" id="wrapper">
    @include('backEnd.clinic.slidenav')
</div>
    <div id="page-content-wrapper">
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
        <div class="container-fluid">
          <div class="row pt-5">
            <div class="col-xl-4 col-md-4">
              <!-- Button trigger modal -->
              <div class="text-center">
                <button type="button" class="btn btn-primary text-white col-6" data-toggle="modal" data-target="#Prescription">
                  <i class="fa fa-plus-circle mr-2" aria-hidden="true"></i> Prescription
                </button>
              </div>
              @if(session('roacataMsg'))
              <div class="alert alert-success">{{session('roacataMsg')}}</div>
              @endif
              <!-- Modal -->
              <form action = "{{route('storeRaoucata',$clinic->id)}}" method="POST">
                  {{ csrf_field() }}
                  <input type="hidden" name="patient_id" value="{{$patient->id}}">
                <div class="modal fade" id="Prescription" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Prescription</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="col-md-12 mr-auto ml-auto">
                          <div class="form-group">
                            <div class="col-xl-9 col-md-4 mt-3 mr-auto ml-auto mb-5">
                              <div class="ui input col-12">
                                <input name = "prescription" type="text" placeholder="prescription">
                              </div>
                            </div>
                            <div div class="col-xl-11 col-md-4 mb-5 text-center">
                              <div class="row mb-4">
                                <div class="ui input col-4">
                                  <input name = "temperature" type="text" placeholder="Temperature">
                                </div>
                                <div class="ui input col-4">
                                  <input name = "blood_pressure" type="text" placeholder="Blood Pressure">
                                </div>
                                <div class="ui input col-4">
                                  <input name = "diabetics" type="text" placeholder="Diabetics">
                                </div>
                              </div><hr/>
                            </div>
                            <div div class="col-xl-11 col-md-4 mb-5 text-center">
                              <div class="row mb-4">
                                <div class="col-md-4">
                                    <select name = "jaw_type" class="ui selection dropdown">
                                      <option value="">Type</option>
                                      <option value="upper">Upper</option>
                                      <option value="lower">Lower</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <select name = "jaw_direction" class="ui selection dropdown">
                                        <option value="">Direaction</option>
                                      <option value="right">Right</option>
                                      <option value="left">left</option>

                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <select name = "teeth_type" class="ui selection dropdown">
                                      <option value="">3</option>
                                      <option value="one">1</option>
                                      <option value="two">2</option>
                                      <option value="three">3</option>
                                      <option value="four">4</option>
                                      <option value="five">5</option>
                                      <option value="six">6</option>
                                    </select>
                                </div>
                              </div><hr/>
                            </div>
                            <div div class="col-xl-11 col-md-4 mb-5 text-center">
                              <div class="row mb-4">
                                <div class="col-md-6 mr-auto ml-auto">
                                    <select name = "eye_type" class="ui selection dropdown col-12">
                                      <option value="">Eye type</option>
                                      <option value="right">Right</option>
                                      <option value="left">Left</option>
                                    </select>
                                </div>
                              </div><hr/>
                            </div>
                            <ul class="list-unstyled mb-5">
                              <li>
                                <div class="row mb-3">
                                  <div class="col-md-5">
                                    <label class="title-label d-block">Medication</label>
                                      <input type="text" name = "medication_name[]" class = "form-control" placeholder="Medication Name">
                                  </div>
                                  <div class="col-md-3">
                                    <label class="title-label d-block">Times Day</label>
                                      <select name = "times_day[]" class="ui selection dropdown">
                                        <option value="">Times day</option>
                                        <option value="one">1</option>
                                        <option value="two">2</option>
                                        <option value="three">3</option>
                                        <option value="if_necessity">If necessity</option>

                                      </select>
                                  </div>
                                  <div class="col-md-3">
                                    <label class="title-label d-block">Time</label>
                                      <select name = "time[]" class="ui selection dropdown">
                                        <option value="">Time</option>
                                        <option value="before_eating">Before Eating</option>
                                        <option value="after_eating">After Eating</option>
                                      </select>
                                  </div>
                                </div>
                              </li>
                              <li>
                                <div class="row mb-3">
                                  <div class="col-md-5">
                                    <label class="title-label d-block">Medication</label>
                                      <input type="text" name = "medication_name[]" class = "form-control" placeholder="Medication Name">
                                  </div>
                                  <div class="col-md-3">
                                    <label class="title-label d-block">Times Day</label>
                                      <select name = "times_day[]" class="ui selection dropdown">
                                        <option value="">Times day</option>
                                        <option value="one">1</option>
                                        <option value="two">2</option>
                                        <option value="three">3</option>
                                        <option value="if_necessity">If necessity</option>

                                      </select>
                                  </div>
                                  <div class="col-md-3">
                                    <label class="title-label d-block">Time</label>
                                      <select name = "time[]" class="ui selection dropdown">
                                        <option value="">Time</option>
                                        <option value="before_eating">Before Eating</option>
                                        <option value="after_eating">After Eating</option>
                                      </select>
                                  </div>
                                </div>
                              </li>
                              <li>
                                <div class="row mb-3">
                                  <div class="col-md-5">
                                    <label class="title-label d-block">Medication</label>
                                      <input type="text" name = "medication_name[]" class = "form-control" placeholder="Medication Name">
                                  </div>
                                  <div class="col-md-3">
                                    <label class="title-label d-block">Times Day</label>
                                      <select name = "times_day[]" class="ui selection dropdown">
                                        <option value="">Times day</option>
                                        <option value="one">1</option>
                                        <option value="two">2</option>
                                        <option value="three">3</option>
                                        <option value="if_necessity">If necessity</option>

                                      </select>
                                  </div>
                                  <div class="col-md-3">
                                    <label class="title-label d-block">Time</label>
                                      <select name = "time[]" class="ui selection dropdown">
                                        <option value="">Time</option>
                                        <option value="before_eating">Before Eating</option>
                                        <option value="after_eating">After Eating</option>
                                      </select>
                                  </div>
                                </div>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        {{-- <button type="button" class="btn btn-secondary h6" data-dismiss="modal">Close</button> --}}
                        <input type="submit" class="btn btn-primary h6" value="Save">
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="col-xl-4 col-md-4">
              <!-- Button trigger modal -->
              <div class="text-center">
                <button type="button" class="btn btn-primary text-white col-6" data-toggle="modal" data-target="#Testing">
                  <i class="fa fa-plus-circle mr-2" aria-hidden="true"></i>Test
                </button>
              </div>
              <!-- Modal -->
              <form action="{{route('patient_clinic_add_analzes',$clinic->id)}}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="patient_id" value="{{$patient->id}}">
                <div class="modal fade" id="Testing" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Test</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="col-md-12">
                          <div class="form-group">
                            <ul class="list-unstyled">
                              <li>
                                <div class="row mb-3">
                                  <div class="col-md-10 mr-auto ml-auto">
                                    <div class="ui form col-12">
                                      <div class="inline field">
                                        <label class="h6 font-weight-bold" style="font-size: 12pt; margin-bottom: 8px;">Test</label>
                                        <select name="name[]" multiple="" class="label ui large selection fluid dropdown">
                                          <option value="">Chosse ..</option>
                                          @foreach($analyzes as $analyz)
                                            <option value="{{$analyz->name}}">{{$analyz->name}}</option>
                                          @endforeach
                                        </select>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </li>
                            </ul>
                            <div class="col-xl-10 col-md-4 mr-auto ml-auto mt-4 mb-5">
                              <div class="ui input col-12">
                                <input type="text" placeholder="Prescription" name="description">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-primary h6">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="col-xl-4 col-md-4">
              <!-- Button trigger modal -->
              <div class="text-center">
                <button type="button" class="btn btn-primary text-white col-6" data-toggle="modal" data-target="#Rideology">
                  <i class="fa fa-plus-circle mr-2" aria-hidden="true"></i> Rideology
                </button>
              </div>
              <!-- Modal -->
              <form action="{{route('patient_clinic_add_rays',$clinic->id)}}" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="patient_id" value="{{$patient->id}}">
                <div class="modal fade" id="Rideology" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Rideology</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="col-md-12">
                          <div class="form-group">
                            <ul class="list-unstyled">
                              <li>
                                <div class="row mb-3">
                                  <div class="col-md-10 mr-auto ml-auto">
                                    <div class="ui form col-12">
                                      <div class="inline field">
                                        <label class="h6 font-weight-bold" style="font-size: 12pt; margin-bottom: 8px;">Rideology</label>
                                        <select name="name[]" multiple="" class="label ui large selection fluid dropdown">
                                          <option value="">Rideology</option>
                                          @foreach($rays as $ray)
                                            <option value="{{$ray->name}}">{{$ray->name}}</option>
                                          @endforeach
                                        </select>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </li>
                            </ul>
                            <div class="col-xl-10 col-md-4 mr-auto ml-auto mt-4 mb-5">
                              <div class="ui input col-12">
                                <input type="text" placeholder="Prescription" name="description">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-primary h6">Save changes</button>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!-- Header -->
          <div class="header img-header pb-6">
              <div class="container-fluid">
                <div class="header-body">
                  <div class="row pt-5">
                    <div class="col-xl-4 col-md-4">
                      <div class="pills-main-green card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                          <div class="row">
                            <div class="col">
                              <h5 class="card-title text-uppercase text-muted mb-3">Height</h5>
                              <span class="h2 font-weight-bold mb-0">{{$patient->patinets_data->height}} Cm</span>
                            </div>

                            <div class="col-auto">
                              <div>
                                <img src="{{url('imgs/height.png')}}" width="60" alt="...">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-md-4">
                      <div class="pills-main-yellow card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                          <div class="row">
                            <div class="col">
                              <h5 class="card-title text-uppercase text-muted mb-3">Weight</h5>
                              <span class="h2 font-weight-bold mb-0"> {{$patient->patinets_data->width}} Kg</span>
                            </div>

                            <div class="col-auto">
                              <div>
                                <img src="{{url('imgs/Wight.png')}}" width="50" alt="...">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-4 col-md-4">
                      <div class="pills-main-orange card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                          <div class="row">
                            <div class="col">
                              <h5 class="card-title text-uppercase text-muted mb-3">Blood</h5>
                              <span class="h2 font-weight-bold mb-0">{{$patient->patinets_data->blood}}</span>
                            </div>
                            <div class="col-auto">
                              <div>
                                <img src="{{url('imgs/blood.png')}}" width="50" alt="...">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    @if($patient->gender == 'female')
                    <!-- female gender -->
                    <div class="col-xl-12 col-md-6">
                      <div class="pills-main-pink card card-stats">
                        <!-- Card body -->
                        <div class="card-body">
                          <div class="row">
                            <div class="col-auto">
                              <div>
                                <img src="{{url('imgs/clender.png')}}" width="40" alt="...">
                              </div>
                            </div>
                            <div class="col">
                              <h5 class="card-title text-uppercase text-muted mb-0">Female</h5>
                              <span class="h2 font-weight-bold mb-0"></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- female gender -->
                    @endif
                  </div>
                </div>
              </div>
            </div>
            <!-- Information -->
            <div class=" mt-5 ml-5 mb-4">
              <div class="nav row testimonial-group nav-pills" id="v-pills-tab" role="tablist" aria-orientation="horizontal">
                <a class="nav-link col-xs-4 p-1 mr-1 active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">
                  <div class="row">
                    <div class="col-4">
                      <img src="{{url('imgs/01.png')}}" width="60" alt="...">
                    </div>
                    <div class="col-6">
                      <h4 class="text-pills mt-4">Diseases</h4>
                    </div>
                  </div>
                </a>
                <a class="nav-link col-xs-4 p-1 mr-1" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">
                  <div class="row">
                    <div class="col-4">
                      <img src="{{url('imgs/02.png')}}" width="60" alt="...">
                    </div>
                    <div class="col-8">
                      <h4 class="text-pills  ml--1 mt-4">Medication</h4>
                    </div>
                  </div>
                </a>
                <a  class="nav-link col-xs-4 p-1 mr-1" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">
                  <div class="row">
                    <div class="col-4">
                      <img src="assets/img/03.png" width="60" alt="...">
                    </div>
                    <div class="col-8">
                      <h4 class="text-pills ml-1 mt-4">Allergies</h4>
                    </div>
                  </div>
                </a>
                <a  class="nav-link col-xs-4 p-1 mr-1" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">
                  <div class="row">
                    <div class="col-4">
                      <img src="{{url('imgs/04.png')}}" width="60" alt="...">
                    </div>
                    <div class="col-8">
                      <h4 class="text-pills mt-4">Surgeries</h4>
                    </div>
                  </div>
                </a>
                <a class="nav-link col-xs-4 p-1 mr-1" id="v-pills-5-tab" data-toggle="pill" href="#v-pills-5" role="tab" aria-controls="v-pills-5" aria-selected="false">
                  <div class="row">
                    <div class="col-4">
                      <img src="{{url('imgs/06.png')}}" width="60" alt="...">
                    </div>
                    <div class="col-8">
                      <h4 class=" text-pills mt-4">Somking</h4>
                    </div>
                  </div>
                </a>
                <a class="nav-link col-xs-4 p-1 mr-1" id="v-pills-6-tab" data-toggle="pill" href="#v-pills-6" role="tab" aria-controls="v-pills-6" aria-selected="false">
                  <div class="row">
                    <div class="col-4">
                      <img src="{{url('imgs/05.png')}}" width="60" alt="...">
                    </div>
                    <div class="col-8">
                      <h4 class="text-pills mt-4">Screening</h4>
                    </div>
                  </div>
                </a>
              </div>
              <div class="col-md-10 p-4 align-items-center js-fullheight animated">
                <div class="tab-content mr-auto ml-auto" id="v-pills-tabContent">
                  <div class="tab-pane animated bounce slow py-0 show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
                    <h2 class="col-12 ml-xl-8 mb-4">Diseases</h2>
                    @php
                        $agree_name = json_decode($patient->patinets_data->agree_name);
                    @endphp
                    @foreach($agree_name as $agree)
                    <div class="col-xl-8 col-md-4 col-xs-12 row row-text mb-3 mr-auto ml-auto">
                      <div class="col-2">
                        <img src="{{url('imgs/01.png')}}" width="60" alt="...">
                      </div>
                      <div class="col-8">
                        <h4 class="mt-3">{{$agree}}</h4>
                      </div>
                    </div>
                    @endforeach
                  </div>

                  <div class="tab-pane animated bounce slow py-0" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
                    <h2 class="col-12 ml-xl-8 mb-4">Medication</h2>
                    @php
                        $medication_name = json_decode($patient->patinets_data->medication_name);
                    @endphp
                    @foreach($medication_name as $medication)
                    <div class="col-xl-8 col-md-4 col-xs-12 row row-text mb-3 mr-auto ml-auto">
                      <div class="col-2">
                        <img src="{{url('imgs/02.png')}}" width="60" alt="...">
                      </div>
                      <div class="col-8">
                        <h4 class="mt-3">{{$medication}}</h4>
                      </div>
                    </div>
                    @endforeach
                  </div>
                  <div class="tab-pane animated bounce slow py-0" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
                    <h2 class="col-12 ml-xl-8 mb-4">Allergies</h2>
                    <div class="col-xl-8 col-md-4 col-xs-12 row row-text mb-3 mr-auto ml-auto">
                        @php
                        $allergi_name = json_decode($patient->patinets_data->allergi_name);
                        $severity = json_decode($patient->patinets_data->severity);
                        $reaction = json_decode($patient->patinets_data->reaction);
                        @endphp
                      <div class="col-8">
                        @foreach($allergi_name as $allergi_name)
                        <h3 class="mt-3 pl-4">{{$allergi_name}}</h3>
                        @endforeach
                        @foreach($severity as $severity)
                        <h5 class="pl-4"><img src="{{url('imgs/lavel.png')}}" width="50" alt="...">{{$severity}}</h5>
                        @endforeach
                        @foreach($reaction as $reaction)
                        <h5 class="mt--3 pl-3"><img src="{{url('imgs/save.png')}}" width="60" alt="...">{{$reaction}}</h5>
                        @endforeach
                      </div>
                    </div>
                  </div>
                  <div class="tab-pane animated bounce slow py-0" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab">
                    <h2 class="col-12 ml-xl-8 mb-4">Surgeries</h2>
                    @php
                        $surgery_name = json_decode($patient->patinets_data->surgery_name,true);
                        $surgery_date = json_decode($patient->patinets_data->surgery_date,true);
                    @endphp
                    <div class="col-xl-8 col-md-4 col-xs-12 row row-text mb-3 mr-auto ml-auto">
                      <div class="col-8">
                        @foreach($surgery_name as $surgery_name)
                        <h3 class="mt-3 pl-4">@if($surgery_name !== null){{$surgery_name}} @endif</h3>
                        @endforeach
                        @foreach($surgery_date as $surgery_date)
                        <h4 class="mt--2 pl-3"><img src="{{url('imgs/date.png')}}" width="60" alt="...">@if($surgery_date !== null){{$surgery_date}} @endif</h4>
                        @endforeach
                      </div>
                    </div>
                  </div>

                  <div class="tab-pane animated bounce slow py-0" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-5-tab">
                    <h2 class="col-12 ml-xl-8 mb-4">Somking</h2>
                    <div class="col-xl-8 col-md-4 col-xs-12 row row-text mb-3 mr-auto ml-auto">
                      <div class="col-8">
                        <h2 class="mt-3 pl-4">Alcohol</h2>
                        <h4 class="pl-3 pl-6">{{$patient->patinets_data->alcohol_type}}</h4>
                        <h4 class="mt--3 pl-4"><img src="{{url('imgs/lavel.png')}}" width="50" alt="...">{{$patient->patinets_data->alcohol_severity}}</h4>
                      </div>
                    </div>
                    <div class="col-xl-8 col-md-4 col-xs-12 row row-text mb-3 mr-auto ml-auto">
                      <div class="col-8">
                        <h3 class="mt-3 pl-4">Cigarette</h3>
                        <h4 class="pl-3 pl-6">E-Cigar</h4>
                        <h4 class="mt--3 pl-4"><img src="{{url('imgs/date.png')}}" width="50" alt="...">{{$patient->patinets_data->cigarettes}}</h4>
                      </div>
                    </div>
                    <div class="col-xl-8 col-md-4 col-xs-12 row row-text mb-3 mr-auto ml-auto">
                      <div class="col-8">
                        <h3 class="mt-3 pl-4">Tobacco</h3>
                        <h4 class="pl-3 pl-6">Pipe</h4>
                        <h4 class="mt--3 pl-4"><img src="{{url('imgs/lavel.png')}}" width="50" alt="...">{{$patient->patinets_data->tobacco}}</h4>
                      </div>
                    </div>
                    <div class="col-xl-8 col-md-4 col-xs-12 row row-text mb-3 mr-auto ml-auto">
                      <div class="col-8">
                        <h3 class="mt-3 pl-4">Drug</h3>
                        <h4 class="pl-3 pl-6">Wine</h4>
                        <h4 class="mt--3 pl-4"><img src="{{url('imgs/date.png')}}" width="50" alt="...">{{$patient->patinets_data->drug}}</h4>
                      </div>
                    </div>
                    <p><a href="#" class="btn hvr-grow buttom px-4 py-2 float-right"><i class="fas fa-edit"></i> &nbsp;Edit</a></p>
                  </div>

                  <div class="tab-pane animated bounce py-0" id="v-pills-6" role="tabpanel" aria-labelledby="v-pills-6-tab">
                    <h2 class="col-12 ml-xl-8 mb-4">Screening</h2>
                    <div class="col-xl-8 col-md-4 col-xs-12 row row-text mb-3 mr-auto ml-auto">
                      <div class="col-8">
                        <h3 class="mt-3 pl-4">Colonscopy</h3>
                        <h4 class="mt--2 pl-3"><img src="{{url('imgs/date.png')}}" width="60" alt="...">@if($patient->patinets_data->colonscopy == 1) {{$patient->patinets_data->colonscopy_data}} @else No Date @endif</h4>
                      </div>
                    </div>
                    <div class="col-xl-8 col-md-4 col-xs-12 row row-text mb-3 mr-auto ml-auto">
                      <div class="col-8">
                        <h3 class="mt-3 pl-4">Mmamogram</h3>
                        <h4 class="mt--2 pl-3"><img src="{{url('imgs/date.png')}}" width="60" alt="...">@if($patient->patinets_data->mammogram == 3) {{$patient->patinets_data->mammogram_date}} @else No Date @endif</h4>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <!-- Page content -->
            <div class="container-fluid">
              <div class="row">
                <div class="col-xl-12">
                  <div class="card bg-default">
                    <div class="card-header bg-transparent">
                      <div class="row align-items-center">
                        <div class="col-10">
                          <h3 class="text-white text-uppercase mt-3 ls-4 ml-4">Family History</h3>
                        </div>
                        <div class="col-2 justify-content-end">
                          <a class="mr-3 text-white" type="submit" href="#" id="button"><i class="fa fa-arrow-down" aria-hidden="true"></i></a>
                          <a class="text-white" type="submit" href="#" id="button2"><i class="fa fa-arrow-up" aria-hidden="true"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="card-body mb-3" id='cont'>
                      <ul class="list-unstyled">
                        <li>
                          <div class="row row-text-f mb-3">
                            <div class="col-12">
                              <h3 class="fH-text">Mother</h3>
                            </div>
                            <div class="col-2">
                              <img src="{{url('imgs/01.png')}}" width="60" alt="...">
                            </div>
                            <div class="col-10">
                              <h4 class="mt-3">High Blood Pressure</h4>
                          </div>
                          <div class="col-2">
                            <img src="{{url('imgs/01.png')}}" width="60" alt="...">
                          </div>
                          <div class="col-10">
                            <h4 class="mt-3">High Blood Pressure</h4>
                          </div>
                        </li>
                        <li>
                          <div class="row row-text-f mb-3">
                            <div class="col-12">
                              <h3 class="fH-text">Mother</h3>
                            </div>
                            <div class="col-2">
                              <img src="{{url('imgs/01.png')}}" width="60" alt="...">
                            </div>
                            <div class="col-10">
                              <h4 class="mt-3">High Blood Pressure</h4>
                          </div>
                          <div class="col-2">
                            <img src="{{url('imgs/01.png')}}" width="60" alt="...">
                          </div>
                          <div class="col-10">
                            <h4 class="mt-3">High Blood Pressure</h4>
                          </div>
                        </li>
                        <li>
                          <div class="row row-text-f mb-3">
                            <div class="col-12">
                              <h3 class="fH-text">Mother</h3>
                            </div>
                            <div class="col-2">
                              <img src="{{url('imgs/01.png')}}" width="60" alt="...">
                            </div>
                            <div class="col-10">
                              <h4 class="mt-3">High Blood Pressure</h4>
                          </div>
                          <div class="col-2">
                            <img src="{{url('imgs/01.png')}}" width="60" alt="...">
                          </div>
                          <div class="col-10">
                            <h4 class="mt-3">High Blood Pressure</h4>
                          </div>
                        </li>
                        <li>
                          <div class="row row-text-f mb-3">
                            <div class="col-12">
                              <h3 class="fH-text">Mother</h3>
                            </div>
                            <div class="col-2">
                              <img src="{{url('imgs/01.png')}}" width="60" alt="...">
                            </div>
                            <div class="col-10">
                              <h4 class="mt-3">High Blood Pressure</h4>
                          </div>
                          <div class="col-2">
                            <img src="{{url('imgs/01.png')}}" width="60" alt="...">
                          </div>
                          <div class="col-10">
                            <h4 class="mt-3">High Blood Pressure</h4>
                          </div>
                        </li>
                        <li>
                          <div class="row row-text-f mb-3">
                            <div class="col-12">
                              <h3 class="fH-text">Mother</h3>
                            </div>
                            <div class="col-2">
                              <img src="{{url('imgs/01.png')}}" width="60" alt="...">
                            </div>
                            <div class="col-10">
                              <h4 class="mt-3">High Blood Pressure</h4>
                          </div>
                          <div class="col-2">
                            <img src="{{url('imgs/01.png')}}" width="60" alt="...">
                          </div>
                          <div class="col-10">
                            <h4 class="mt-3">High Blood Pressure</h4>
                          </div>
                        </li>
                        <li>
                          <div class="row row-text-f mb-3">
                            <div class="col-12">
                              <h3 class="fH-text">Mother</h3>
                            </div>
                            <div class="col-2">
                              <img src="{{url('imgs/01.png')}}" width="60" alt="...">
                            </div>
                            <div class="col-10">
                              <h4 class="mt-3">High Blood Pressure</h4>
                          </div>
                          <div class="col-2">
                            <img src="{{url('imgs/01.png')}}" width="60" alt="...">
                          </div>
                          <div class="col-10">
                            <h4 class="mt-3">High Blood Pressure</h4>
                          </div>
                        </li>
                        <li>
                          <div class="row row-text-f mb-3">
                            <div class="col-12">
                              <h3 class="fH-text">Mother</h3>
                            </div>
                            <div class="col-2">
                              <img src="{{url('imgs/01.png')}}" width="60" alt="...">
                            </div>
                            <div class="col-10">
                              <h4 class="mt-3">High Blood Pressure</h4>
                          </div>
                          <div class="col-2">
                            <img src="{{url('imgs/01.png')}}" width="60" alt="...">
                          </div>
                          <div class="col-10">
                            <h4 class="mt-3">High Blood Pressure</h4>
                          </div>
                        </li>
                        <li>
                          <div class="row row-text-f">
                            <div class="col-12">
                              <h3 class="fH-text">Mother</h3>
                            </div>
                            <div class="col-2">
                              <img src="assets/img/01.png" width="60" alt="...">
                            </div>
                            <div class="col-10">
                              <h4 class="mt-3">High Blood Pressure</h4>
                          </div>
                          <div class="col-2">
                            <img src="{{url('imgs/01.png')}}" width="60" alt="...">
                          </div>
                          <div class="col-10">
                            <h4 class="mt-3">High Blood Pressure</h4>
                          </div>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <!-- female -->
              @if($patient['gender'] == 'female')
              <div class="card female-bg">
                <h2 class="row mt-4 ml-5 ">Female History</h2>
                <div class="row mt-2 mr-auto ml-auto ">
                  <div class="col-xl-6 col-md-2 col-xs-12">
                    <div class="card card-stats">
                      <!-- Card body -->
                      <div class="card-body">
                        <div class="row">
                          <div class="col-auto">
                            <div>
                              <img src="{{url('imgs/prng.png')}}" width="60" alt="...">
                            </div>
                          </div>
                          <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-3">Pregnency</h5>
                            <span class="h3 font-weight-bold mb-0">170 Cm</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-6 col-md-2 col-xs-12">
                    <div class="card card-stats">
                      <!-- Card body -->
                      <div class="card-body">
                        <div class="row">
                          <div class="col-auto">
                            <div>
                              <img src="{{url('imgs/pain.png')}}" width="60" alt="...">
                            </div>
                          </div>
                          <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-3">Complicetion in Deliveries</h5>
                            <span class="h3 font-weight-bold mb-0">No</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-md-2 col-xs-12">
                    <div class="card card-stats">
                      <!-- Card body -->
                      <div class="card-body">
                        <div class="row">
                          <div class="col-auto">
                            <div>
                              <img src="{{url('imgs/delivery.png')}}" width="60" alt="...">
                            </div>
                          </div>
                          <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-3">Types of Deliveries</h5>
                            <span class="h3 font-weight-bold mb-0">170 Cm</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-md-2 col-xs-12">
                    <div class="card card-stats">
                      <!-- Card body -->
                      <div class="card-body">
                        <div class="row">
                          <div class="col-auto">
                            <div>
                              <img src="{{url('imgs/beby.png')}}" width="60" alt="...">
                            </div>
                          </div>
                          <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-3">Abortion</h5>
                            <span class="h3 font-weight-bold mb-0">170 Cm</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-xl-4 col-md-2 col-xs-12">
                    <div class="card card-stats">
                      <!-- Card body -->
                      <div class="card-body">
                        <div class="row">
                          <div class="col-auto">
                            <div>
                              <img src="{{url('imgs/noPreg.png')}}" width="60" alt="...">
                            </div>
                          </div>
                          <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-3">Contraceptives</h5>
                            <span class="h3 font-weight-bold mb-0">Yes</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endif
              <!-- female -->
            </div>
              </div>
          </div>
          <!-- HistoryPatientContent -->
          <div class="nav row testimonial-group nav-pills menu-info ml-5 mb-4" id="v-pills-tab" role="tablist" aria-orientation="horizontal">
            <a class="nav-link col-xs-4 p-1 mr-1 active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">
                <li>Diseases</li>
            </a>
            <a class="nav-link col-xs-4 p-1 mr-1" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">
                <li>Medication</li>
            </a>
            <a  class="nav-link col-xs-4 p-1 mr-1" id="v-pills-3-tab" data-toggle="pill" href="#v-pills-3" role="tab" aria-controls="v-pills-3" aria-selected="false">
                <li>Allergies</li>
            </a>
            <a  class="nav-link col-xs-4 p-1 mr-1" id="v-pills-4-tab" data-toggle="pill" href="#v-pills-4" role="tab" aria-controls="v-pills-4" aria-selected="false">
                <li>Surgeries</li>
            </a>
            <a class="nav-link col-xs-4 p-1 mr-1" id="v-pills-5-tab" data-toggle="pill" href="#v-pills-5" role="tab" aria-controls="v-pills-5" aria-selected="false">
                <li>Somking</li>
            </a>
            <a class="nav-link col-xs-4 p-1 mr-1" id="v-pills-6-tab" data-toggle="pill" href="#v-pills-6" role="tab" aria-controls="v-pills-6" aria-selected="false">
                <li>Screening</li>
            </a>
          </div>
          <div class="col-md-10 p-4 align-items-center js-fullheight animated">
            <div class="tab-content mr-auto ml-auto" id="v-pills-tabContent">
              <div class="tab-pane animated bounce slow py-0 show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
                <h2 class="col-12 ml-xl-8 mb-4">Diseases</h2>
                @php
                    $agree_name = json_decode($patient->patinets_data->agree_name);
                @endphp
                @foreach($agree_name as $agree)
                <div class="pills-main col-xl-8 col-md-4 col-xs-12 row mb-3 mr-auto ml-auto">
                  <div class="col-2">
                    <img src="{{url('imgs/01.png')}}" width="60" alt="...">
                  </div>
                  <div class="col-8">
                    <h4 class="mt-3">{{$agree}}</h4>
                  </div>
                </div>
                @endforeach
              </div>
              <div class="tab-pane animated bounce slow py-0" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-2-tab">
                <h2 class="col-12 ml-xl-8 mb-4">Medication</h2>
                @php
                    $medication_name = json_decode($patient->patinets_data->medication_name);
                @endphp
                @foreach($medication_name as $medication)
                <div class="pills-main col-xl-8 col-md-4 col-xs-12 row row-text mb-3 mr-auto ml-auto">
                  <div class="col-2">
                    <img src="{{url('imgs/02.png')}}" width="60" alt="...">
                  </div>
                  <div class="col-8">
                    <h4 class="mt-3">{{$medication}}</h4>
                  </div>
                </div>
                @endforeach
              </div>
              <div class="tab-pane animated bounce slow py-0" id="v-pills-3" role="tabpanel" aria-labelledby="v-pills-3-tab">
                <h2 class="col-12 ml-xl-8 mb-4">Allergies</h2>
                <div class="pills-main col-xl-8 col-md-4 col-xs-12 row row-text mb-3 mr-auto ml-auto">
                    @php
                    $allergi_name = json_decode($patient->patinets_data->allergi_name);
                    $severity = json_decode($patient->patinets_data->severity);
                    $reaction = json_decode($patient->patinets_data->reaction);
                    @endphp
                  <div class="col-8">
                    @foreach($allergi_name as $allergi_name)
                    <h3 class="mt-3 pl-4">{{$allergi_name}}</h3>
                    @endforeach
                    @foreach($severity as $severity)
                    <h5 class="pl-4"><img src="{{url('imgs/lavel.png')}}" width="50" alt="...">{{$severity}}</h5>
                    @endforeach
                    @foreach($reaction as $reaction)
                    <h5 class="mt--3 pl-3"><img src="{{url('imgs/save.png')}}" width="60" alt="...">{{$reaction}}</h5>
                    @endforeach
                  </div>
                </div>
              </div>
              <div class="tab-pane animated bounce slow py-0" id="v-pills-4" role="tabpanel" aria-labelledby="v-pills-4-tab">
                <h2 class="col-12 ml-xl-8 mb-4">Surgeries</h2>
                @php
                    $surgery_name = json_decode($patient->patinets_data->surgery_name,true);
                    $surgery_date = json_decode($patient->patinets_data->surgery_date,true);
                @endphp
                <div class="col-xl-8 col-md-4 col-xs-12 row row-text mb-3 mr-auto ml-auto">
                  <div class="col-8">
                    @foreach($surgery_name as $surgery_name)
                    <h3 class="mt-3 pl-4">@if($surgery_name !== null){{$surgery_name}} @endif</h3>
                    @endforeach
                    @foreach($surgery_date as $surgery_date)
                    <h4 class="mt--2 pl-3"><img src="{{url('imgs/date.png')}}" width="60" alt="...">@if($surgery_date !== null){{$surgery_date}} @endif</h4>
                    @endforeach
                  </div>
                </div>
              </div>
              <div class="tab-pane animated bounce slow py-0" id="v-pills-5" role="tabpanel" aria-labelledby="v-pills-5-tab">
                <h2 class="col-12 ml-xl-8 mb-4">Somking</h2>
                <div class="pills-main col-xl-8 col-md-4 col-xs-12 row row-text mb-3 mr-auto ml-auto">
                  <div class="col-8">
                    <h2 class="mt-3 pl-4">Alcohol</h2>
                    <h4 class="pl-3 pl-6">{{$patient->patinets_data->alcohol_type}}</h4>
                    <h4 class="mt--3 pl-4"><img src="{{url('imgs/lavel.png')}}" width="50" alt="...">{{$patient->patinets_data->alcohol_severity}}</h4>
                  </div>
                </div>
                <div class="col-xl-8 col-md-4 col-xs-12 row row-text mb-3 mr-auto ml-auto">
                  <div class="col-8">
                    <h3 class="mt-3 pl-4">Cigarette</h3>
                    <h4 class="pl-3 pl-6">E-Cigar</h4>
                    <h4 class="mt--3 pl-4"><img src="{{url('imgs/date.png')}}" width="50" alt="...">{{$patient->patinets_data->cigarettes}}</h4>
                  </div>
                </div>
                <div class="col-xl-8 col-md-4 col-xs-12 row row-text mb-3 mr-auto ml-auto">
                  <div class="col-8">
                    <h3 class="mt-3 pl-4">Tobacco</h3>
                    <h4 class="pl-3 pl-6">Pipe</h4>
                    <h4 class="mt--3 pl-4"><img src="{{url('imgs/lavel.png')}}" width="50" alt="...">{{$patient->patinets_data->tobacco}}</h4>
                  </div>
                </div>
                <div class="col-xl-8 col-md-4 col-xs-12 row row-text mb-3 mr-auto ml-auto">
                  <div class="col-8">
                    <h3 class="mt-3 pl-4">Drug</h3>
                    <h4 class="pl-3 pl-6">Wine</h4>
                    <h4 class="mt--3 pl-4"><img src="{{url('imgs/date.png')}}" width="50" alt="...">{{$patient->patinets_data->drug}}</h4>
                  </div>
                </div>
                <p><a href="#" class="btn hvr-grow buttom px-4 py-2 float-right"><i class="fas fa-edit"></i> &nbsp;Edit</a></p>
              </div>
              <div class="tab-pane animated bounce slow py-0" id="v-pills-6" role="tabpanel" aria-labelledby="v-pills-6-tab">
                <h2 class="col-12 ml-xl-8 mb-4">Screening</h2>
                <div class="pills-main col-xl-8 col-md-4 col-xs-12 row row-text mb-3 mr-auto ml-auto">
                  <div class="col-8">
                    <h3 class="mt-3 pl-4">Colonscopy</h3>
                    <h4 class="mt--2 pl-3"><img src="{{url('imgs/date.png')}}" width="60" alt="...">@if($patient->patinets_data->colonscopy == 1) {{$patient->patinets_data->colonscopy_data}} @else No Date @endif</h4>
                  </div>
                </div>
                <div class="col-xl-8 col-md-4 col-xs-12 row row-text mb-3 mr-auto ml-auto">
                  <div class="col-8">
                    <h3 class="mt-3 pl-4">Mmamogram</h3>
                    <h4 class="mt--2 pl-3"><img src="{{url('imgs/date.png')}}" width="60" alt="...">@if($patient->patinets_data->mammogram == 3) {{$patient->patinets_data->mammogram_date}} @else No Date @endif</h4>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- HistoryFamilyContent -->
          <div class="nav row testimonial-group nav-pills menu-history ml-5 mb-4" id="v-pills-tab" role="tablist" aria-orientation="horizontal">
            <a class="nav-link col-xs-4 p-1 active" id="v-pills-01-tab" data-toggle="pill" href="#v-pills-01" role="tab" aria-controls="v-pills-01" aria-selected="true">
                <li class="pills-his-yellow"><h6 class="text-center font-weight-bold">Mother</h1></li>
            </a>
            <a class="nav-link col-xs-4 p-1" id="v-pills-02-tab" data-toggle="pill" href="#v-pills-02" role="tab" aria-controls="v-pills-02" aria-selected="false">
                <li class="pills-his-orange"><h6 class="text-center font-weight-bold">Father</h6></li>
            </a>
            <a  class="nav-link col-xs-4 p-1" id="v-pills-03-tab" data-toggle="pill" href="#v-pills-03" role="tab" aria-controls="v-pills-03" aria-selected="false">
                <li class="pills-his-green"><h6 class="text-center font-weight-bold">Sister</h6></li>
            </a>
            <a class="nav-link col-xs-4 p-1" id="v-pills-04-tab" data-toggle="pill" href="#v-pills-04" role="tab" aria-controls="v-pills-04" aria-selected="false">
                <li class="pills-his-teal"><h6 class="text-center font-weight-bold">Brother</h6></li>
            </a>
            <a class="nav-link col-xs-4 p-1" id="v-pills-05-tab" data-toggle="pill" href="#v-pills-05" role="tab" aria-controls="v-pills-05" aria-selected="false">
                <li class="pills-his-yellow"><h6 class="text-center font-weight-bold">Grandma</br>M</h6></li>
            </a>
            <a class="nav-link col-xs-4 p-1" id="v-pills-06-tab" data-toggle="pill" href="#v-pills-06" role="tab" aria-controls="v-pills-06" aria-selected="false">
                <li class="pills-his-orange"><h6 class="text-center font-weight-bold">Grandma</br>F</h6></li>
            </a>
            <a class="nav-link col-xs-4 p-1 mr-1" id="v-pills-07-tab" data-toggle="pill" href="#v-pills-07" role="tab" aria-controls="v-pills-07" aria-selected="false">
                <li class="pills-his-green"><h6 class="text-center font-weight-bold">Grandpa</br>M</h6></li>
            </a>
            <a class="nav-link col-xs-4 p-1 mr-1" id="v-pills-08-tab" data-toggle="pill" href="#v-pills-08" role="tab" aria-controls="v-pills-08" aria-selected="false">
                <li class="pills-his-teal"><h6 class="text-center font-weight-bold">Grandpa</br>F</h6></li>
            </a>
          </div>
          <div class="pill-box-f p-4 align-items-center js-fullheight animated">
              <div class="tab-content mr-auto ml-auto" id="v-pills-tabContent">
                <div class="tab-pane animated bounce slow py-0 mb-4 mt-4 show active" id="v-pills-01" role="tabpanel" aria-labelledby="v-pills-01-tab">
                  <div class="pills-main pills-main-yellow col-xl-8 col-md-4 col-xs-12 row mb-3 mr-auto ml-auto">
                    <div class="col-2">
                      <img src="imgs/01.png" width="60" alt="...">
                    </div>
                    <div class="col-8">
                      <h6 class="mt-4">High Blood Pressure</h6>
                    </div>
                  </div>
                  <div class="pills-main pills-main-yellow col-xl-8 col-md-4 col-xs-12 row mb-3 mr-auto ml-auto">
                      <div class="col-2">
                        <img src="imgs/01.png" width="60" alt="...">
                      </div>
                      <div class="col-8">
                        <h6 class="mt-4">High Blood Pressure</h6>
                      </div>
                  </div>
                  <div class="pills-main pills-main-yellow col-xl-8 col-md-4 col-xs-12 row mb-3 mr-auto ml-auto">
                    <div class="col-2">
                      <img src="imgs/01.png" width="60" alt="...">
                    </div>
                    <div class="col-8">
                      <h6 class="mt-4">High Blood Pressure</h6>
                    </div>
                  </div>
                </div>
                <div class="tab-pane animated bounce slow py-0 mb-4 mt-4" id="v-pills-02" role="tabpanel" aria-labelledby="v-pills-02-tab">
                  <div class="pills-main pills-main-orange col-xl-8 col-md-4 col-xs-12 row mb-3 mr-auto ml-auto">
                    <div class="col-2">
                      <img src="imgs/01.png" width="60" alt="...">
                    </div>
                    <div class="col-8">
                      <h6 class="mt-4">High Blood Pressure</h6>
                    </div>
                  </div>
                  <div class="pills-main pills-main-orange col-xl-8 col-md-4 col-xs-12 row mb-3 mr-auto ml-auto">
                      <div class="col-2">
                        <img src="imgs/01.png" width="60" alt="...">
                      </div>
                      <div class="col-8">
                        <h6 class="mt-4">High Blood Pressure</h6>
                      </div>
                  </div>
                  <div class="pills-main pills-main-orange col-xl-8 col-md-4 col-xs-12 row mb-3 mr-auto ml-auto">
                    <div class="col-2">
                      <img src="imgs/01.png" width="60" alt="...">
                    </div>
                    <div class="col-8">
                      <h6 class="mt-4">High Blood Pressure</h6>
                    </div>
                  </div>
                </div>
                <div class="tab-pane animated bounce slow py-0 mb-4 mt-4" id="v-pills-03" role="tabpanel" aria-labelledby="v-pills-03-tab">
                  <div class="pills-main pills-main-green col-xl-8 col-md-4 col-xs-12 row mb-3 mr-auto ml-auto">
                    <div class="col-2">
                      <img src="imgs/01.png" width="60" alt="...">
                    </div>
                    <div class="col-8">
                      <h6 class="mt-4">High Blood Pressure</h6>
                    </div>
                  </div>
                  <div class="pills-main pills-main-green col-xl-8 col-md-4 col-xs-12 row mb-3 mr-auto ml-auto">
                      <div class="col-2">
                        <img src="imgs/01.png" width="60" alt="...">
                      </div>
                      <div class="col-8">
                        <h6 class="mt-4">High Blood Pressure</h6>
                      </div>
                  </div>
                  <div class="pills-main pills-main-green col-xl-8 col-md-4 col-xs-12 row mb-3 mr-auto ml-auto">
                    <div class="col-2">
                      <img src="imgs/01.png" width="60" alt="...">
                    </div>
                    <div class="col-8">
                      <h6 class="mt-4">High Blood Pressure</h6>
                    </div>
                  </div>
                </div>
                <div class="tab-pane animated bounce slow py-0 mb-4 mt-4" id="v-pills-04" role="tabpanel" aria-labelledby="v-pills-04-tab">
                  <div class="pills-main pills-main-teal col-xl-8 col-md-4 col-xs-12 row mb-3 mr-auto ml-auto">
                    <div class="col-2">
                      <img src="imgs/01.png" width="60" alt="...">
                    </div>
                    <div class="col-8">
                      <h6 class="mt-4">High Blood Pressure</h6>
                    </div>
                  </div>
                  <div class="pills-main pills-main-teal col-xl-8 col-md-4 col-xs-12 row mb-3 mr-auto ml-auto">
                      <div class="col-2">
                        <img src="imgs/01.png" width="60" alt="...">
                      </div>
                      <div class="col-8">
                        <h6 class="mt-4">High Blood Pressure</h6>
                      </div>
                  </div>
                  <div class="pills-main pills-main-teal col-xl-8 col-md-4 col-xs-12 row mb-3 mr-auto ml-auto">
                    <div class="col-2">
                      <img src="imgs/01.png" width="60" alt="...">
                    </div>
                    <div class="col-8">
                      <h6 class="mt-4">High Blood Pressure</h6>
                    </div>
                  </div>
                </div>
                <div class="tab-pane animated bounce slow py-0 mb-4 mt-4" id="v-pills-05" role="tabpanel" aria-labelledby="v-pills-05-tab">
                  <div class="pills-main pills-main-yellow col-xl-8 col-md-4 col-xs-12 row mb-3 mr-auto ml-auto">
                    <div class="col-2">
                      <img src="imgs/01.png" width="60" alt="...">
                    </div>
                    <div class="col-8">
                      <h6 class="mt-4">High Blood Pressure</h6>
                    </div>
                  </div>
                  <div class="pills-main pills-main-yellow col-xl-8 col-md-4 col-xs-12 row mb-3 mr-auto ml-auto">
                      <div class="col-2">
                        <img src="imgs/01.png" width="60" alt="...">
                      </div>
                      <div class="col-8">
                        <h6 class="mt-4">High Blood Pressure</h6>
                      </div>
                  </div>
                  <div class="pills-main pills-main-yellow col-xl-8 col-md-4 col-xs-12 row mb-3 mr-auto ml-auto">
                    <div class="col-2">
                      <img src="imgs/01.png" width="60" alt="...">
                    </div>
                    <div class="col-8">
                      <h6 class="mt-4">High Blood Pressure</h6>
                    </div>
                  </div>
                </div>
                <div class="tab-pane animated bounce slow py-0 mb-4 mt-4" id="v-pills-06" role="tabpanel" aria-labelledby="v-pills-06-tab">
                  <div class="pills-main pills-main-orange col-xl-8 col-md-4 col-xs-12 row mb-3 mr-auto ml-auto">
                    <div class="col-2">
                      <img src="imgs/01.png" width="60" alt="...">
                    </div>
                    <div class="col-8">
                      <h6 class="mt-4">High Blood Pressure</h6>
                    </div>
                  </div>
                  <div class="pills-main pills-main-orange col-xl-8 col-md-4 col-xs-12 row mb-3 mr-auto ml-auto">
                      <div class="col-2">
                        <img src="imgs/01.png" width="60" alt="...">
                      </div>
                      <div class="col-8">
                        <h6 class="mt-4">High Blood Pressure</h6>
                      </div>
                  </div>
                  <div class="pills-main pills-main-orange col-xl-8 col-md-4 col-xs-12 row mb-3 mr-auto ml-auto">
                    <div class="col-2">
                      <img src="imgs/01.png" width="60" alt="...">
                    </div>
                    <div class="col-8">
                      <h6 class="mt-4">High Blood Pressure</h6>
                    </div>
                  </div>
                </div>
                <div class="tab-pane animated bounce slow py-0 mb-4 mt-4" id="v-pills-07" role="tabpanel" aria-labelledby="v-pills-07-tab">
                  <div class="pills-main pills-main-green col-xl-8 col-md-4 col-xs-12 row mb-3 mr-auto ml-auto">
                    <div class="col-2">
                      <img src="imgs/01.png" width="60" alt="...">
                    </div>
                    <div class="col-8">
                      <h6 class="mt-4">High Blood Pressure</h6>
                    </div>
                  </div>
                  <div class="pills-main pills-main-green col-xl-8 col-md-4 col-xs-12 row mb-3 mr-auto ml-auto">
                      <div class="col-2">
                        <img src="imgs/01.png" width="60" alt="...">
                      </div>
                      <div class="col-8">
                        <h6 class="mt-4">High Blood Pressure</h6>
                      </div>
                  </div>
                  <div class="pills-main pills-main-green col-xl-8 col-md-4 col-xs-12 row mb-3 mr-auto ml-auto">
                    <div class="col-2">
                      <img src="imgs/01.png" width="60" alt="...">
                    </div>
                    <div class="col-8">
                      <h6 class="mt-4">High Blood Pressure</h6>
                    </div>
                  </div>
                </div>
                <div class="tab-pane animated bounce slow py-0 mb-4 mt-4" id="v-pills-08" role="tabpanel" aria-labelledby="v-pills-08-tab">
                  <div class="pills-main pills-main-teal col-xl-8 col-md-4 col-xs-12 row mb-3 mr-auto ml-auto">
                    <div class="col-2">
                      <img src="imgs/01.png" width="60" alt="...">
                    </div>
                    <div class="col-8">
                      <h6 class="mt-4">High Blood Pressure</h6>
                    </div>
                  </div>
                  <div class="pills-main pills-main-teal col-xl-8 col-md-4 col-xs-12 row mb-3 mr-auto ml-auto">
                      <div class="col-2">
                        <img src="imgs/01.png" width="60" alt="...">
                      </div>
                      <div class="col-8">
                        <h6 class="mt-4">High Blood Pressure</h6>
                      </div>
                  </div>
                  <div class="pills-main pills-main-teal col-xl-8 col-md-4 col-xs-12 row mb-3 mr-auto ml-auto">
                    <div class="col-2">
                      <img src="imgs/01.png" width="60" alt="...">
                    </div>
                    <div class="col-8">
                      <h6 class="mt-4">High Blood Pressure</h6>
                    </div>
                  </div>
                </div>
              </div>
          </div>
          @if($patient['gender'] == 'female')
          <div class="pills-main-pink card">
            <div class="row mt-2 mr-auto ml-auto">
              <div class="col-xl-6 col-md-2 col-xs-12">
                <div class="card card-stats">
                  <!-- Card body -->
                  <div class="card-body">
                    <div class="row">
                      <div class="col-auto">
                        <div>
                          <img src="{{url('imgs/prng.png')}}" width="60" alt="...">
                        </div>
                      </div>
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-3">Pregnency</h5>
                        <span class="h3 font-weight-bold mb-0">170 Cm</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-6 col-md-2 col-xs-12">
                <div class="card card-stats">
                  <!-- Card body -->
                  <div class="card-body">
                    <div class="row">
                      <div class="col-auto">
                        <div>
                          <img src="{{url('imgs/pain.png')}}" width="60" alt="...">
                        </div>
                      </div>
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-3">Complicetion in Deliveries</h5>
                        <span class="h3 font-weight-bold mb-0">No</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-md-2 col-xs-12">
                <div class="card card-stats">
                  <!-- Card body -->
                  <div class="card-body">
                    <div class="row">
                      <div class="col-auto">
                        <div>
                          <img src="{{url('imgs/delivery.png')}}" width="60" alt="...">
                        </div>
                      </div>
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-3">Types of Deliveries</h5>
                        <span class="h3 font-weight-bold mb-0">170 Cm</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-md-2 col-xs-12">
                <div class="card card-stats">
                  <!-- Card body -->
                  <div class="card-body">
                    <div class="row">
                      <div class="col-auto">
                        <div>
                          <img src="{{url('imgs/beby.png')}}" width="60" alt="...">
                        </div>
                      </div>
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-3">Abortion</h5>
                        <span class="h3 font-weight-bold mb-0">170 Cm</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-md-2 col-xs-12">
                <div class="card card-stats">
                  <!-- Card body -->
                  <div class="card-body">
                    <div class="row">
                      <div class="col-auto">
                        <div>
                          <img src="{{url('imgs/noPreg.png')}}" width="60" alt="...">
                        </div>
                      </div>
                      <div class="col">
                        <h5 class="card-title text-uppercase text-muted mb-3">Contraceptives</h5>
                        <span class="h3 font-weight-bold mb-0">Yes</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endif
        </div>
          @include('backEnd.layoutes.footer')
    </div>
  </div>
  


@stop
