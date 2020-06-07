@extends('backEnd.layoutes.mastar')
@section('title','Profile')
@section('content')
<!-- Sidenav -->
<div class="d-flex bg-page" id="wrapper">
    @include('backEnd.hosptail.sidenav')
</div>
<div id="page-content-wrapper">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark view bg-primary border-bottom">
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
                    <img alt="Image placeholder" src="{{url('imgs/team-1.jpg')}}">
                    </span>
                    <div class="media-body ml-3 d-none d-lg-block">
                    <h3 class="mb-0 font-weight-bold"></h3>
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
        <div class="header pb-6">
            <div class="container-fluid">
              <div class="header-body">
                <div class="col-md-10 slide-img">
                  <img class="d-xs-none" id="about-img" src="{{url('imgs/s1.jpg')}}" height="300" width="895" alt="Responsive image">
                </div>
                <div class="row mt-3">
                  <div class="col-xl-12 col-md-12 pt-2 pr-4 pl-4 pb-5 mr-auto ml-auto">
                    <div class="card card-stats">
                      <!-- Card body -->
                      <div class="card-body">
                        <h5 class=" font-weight-bold p-4">Enter Phone Number Patient</h5>
                        @foreach($errors->all() as $error)
                        <div class="alert alert-danger">{{$error}}</div>
                        @endforeach
                        <form action="{{route('hosptail.patient.search',$hosptail->id)}}" method="GET">
                            <div class="row m-1">
                                <div class="col-md-8 mr-auto ml-auto ui input large mb-3">
                                <input class="" type="text" name="search" placeholder="Phone Number" required = "required">
                                </div>
                                <div class="col-md-8 mr-auto ml-auto ui input mt-3 mb-3">
                                <button class="btn btn-primary col-md-12"><i class="fa fa-search mr-2" aria-hidden="true"></i>Search</button>
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
    @include('backEnd.layoutes.footer')
</div>







@stop
