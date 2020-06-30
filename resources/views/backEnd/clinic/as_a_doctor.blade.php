@extends('backEnd.layoutes.mastar')
@section('title','Choose .. ')
@section('content')
<!--Welcome-->
    <div id="myModal" class="modal" role="dialog">
      <div class="mr-auto ml-auto mt-5">
        <!-- Modal content-->
        <img src="imgs/welcome1.png" width="">
      </div>
    </div>
    <!--End-Welcome-->
    <div class="d-flex bg-page" id="wrapper">
        <!-- Sidebar -->
        @include('backEnd.clinic.slidenav')
        <!-- /#sidebar-wrapper -->
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbarp navbar-top navbar-expand navbar-dark border-bottom">
                <div class="container-fluid">
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Navbar links -->
                    <button class="btn btn-primary d-lg-none ml-2" id="menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></button>
                    <!-- Search form -->
                    {{-- <ul class="float-lg-right pr-5">
                      <div class="toggle toggle__wrapper">
                        <div id="toggle-example-1" role="switch" aria-checked="false" class="toggle__button">
                          <div class="toggle__switch"></div>
                        </div>
                      </div>
                    </ul> --}}
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
            <div class="container-fluid" style="margin-top: 160px; margin-bottom: 220px;">
              <div class="header">
                <div class="container-fluid row mt-5 mb-5 text-center">
                  <div class="col-md-3">
                    <a href="{{route('clinic.profile',$clinic->id)}}"><img class="" src="{{url('imgs/doctor.png')}}" height="" width="150" alt="Responsive image"></a>
                  </div>
                  @if($clinic->clinic_xray == 1)
                  <div class="col-md-3">
                    <a href="{{route('clinic_get_search_xray',$clinic->id)}}"><img class="" src="{{url('imgs/x-rays.png')}}" height="" width="150" alt="Responsive image"></a>
                  </div>
                  @endif
                  @if($clinic->clinic_labs == 1)
                  <div class="col-md-3">
                    <a href="{{route('clinic_get_search_lab',$clinic->id)}}"><img class="" src="{{url('imgs/labs.png')}}" height="" width="150" alt="Responsive image"></a>
                  </div>
                  @endif
                  @if($clinic->clinic_pharmacy == 1)
                  <div class="col-md-3">
                    <a href="{{route('clinic_get_search_pharmacy',$clinic->id)}}"><img class="" src="{{url('imgs/pharmacy.png')}}" height="" width="150" alt="Responsive image"></a>
                  </div>
                  @endif
                </div>
              </div>
            </div>
            <!--Start-Footer-->
            @include('backEnd.layoutes.footer')
          <!--End-Footer-->
        </div>
      </div>
	

@stop