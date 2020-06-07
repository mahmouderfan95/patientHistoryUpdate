@extends('backEnd.layoutes.mastar')
@section('title','Profile')
@section('content')
<!-- profile patient -->
  <!-- Main content -->
  <div class="d-flex bg-page" id="wrapper">
    @include('backEnd.patien.slidenav')
    <div id="page-content-wrapper">
    <!-- Topnav -->
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
                      <img alt="Image placeholder" src="{{url('uploads/patien/' . $patient->image)}}">
                    </span>
                    <div class="media-body ml-3 mr-3 d-lg-block">
                      <h6 class="mb-0 font-weight-bold text-white">{{$patient->firstName . ' ' . $patient->middleName}}</h6>
                    </div>
                  </div>
                </a>
              </li>
            </ul>
          </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="header img-header pb-6">
            <div class="container-fluid">
              <div class="header-body">
                <div class="row pt-5">
                  <div class="col-xl-4 col-md-4 col-xs-12">
                    <div class="card card-stats">
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
                    <div class="card card-stats">
                      <!-- Card body -->
                      <div class="card-body">
                        <div class="row">
                          <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-3">Weight</h5>
                            <span class="h2 font-weight-bold mb-0">{{$patient->patinets_data->width}} Kg</span>
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
                    <div class="card card-stats">
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
                  <div class="col-xl-12 col-md-6">
                      <!-- female div -->
                      @if($patient->gender == 'female')
                    <div class="card card-stats female-bg">
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
                    @endif
                    <!-- female div -->
                  </div>
                </div>
              </div>
            </div>
        </div>
        <!-- Information -->
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
                <div class="pills-main col-xl-8 col-md-4 col-xs-12 row row-text mb-3 mr-auto ml-auto">
                    <div class="col-2">
                        <img src="{{url('imgs/01.png')}}" width="60" alt="...">
                    </div>
                    <div class="col-8">
                        <h4 class="mt-3">
                            {{$agree}}
                        </h4>
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
                            <h4 class="mt-3">
                                {{$medication}}
                            </h4>
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
            <div class="pills-main col-xl-8 col-md-4 col-xs-12 row row-text mb-3 mr-auto ml-auto">
                @php
                    $surgery_name = json_decode($patient->patinets_data->surgery_name,true);
                    $surgery_date = json_decode($patient->patinets_data->surgery_date,true);
                @endphp
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
            </div>


            <div class="tab-pane animated bounce py-0" id="v-pills-6" role="tabpanel" aria-labelledby="v-pills-6-tab">
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
        <div class="nav row testimonial-group nav-pills menu-history mb-4 ml-auto mr-auto" id="v-pills-tab" role="tablist" aria-orientation="horizontal">
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


    </div>
    <!-- Footer -->
    @include('backEnd.layoutes.footer')
    <!-- footer -->
    </div>
  </div>




<!-- profiel patient -->



@stop
