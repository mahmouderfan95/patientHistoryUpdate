@extends('backEnd.layoutes.mastar')
@section('title','Home page')
@section('content')
    <!-- navbar file -->
    @include('backEnd.layoutes.navbar')
    <!-- navbarfile -->
    <!--Start-Content-->
    <div class="hero-wrap" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
            <div class="ml-2 col-md-12">
                <h2> Welcome
                <a href=""
                   class="typewrite"
                   data-period="2000"
                   data-type='[ "Patient.", "Clinic.", "Hospital.", "X-ray.", "Labs.", "Pharmacy." ]'>
                  <span class="wrap"></span>
                </a>
              </h2>
              <h3 class="mb-4">Everywhere, Anytime, Everyday</h3>
            </div>
          </div>
        </div>
      </div>
      <!--End-content-->
      <!--Start-Login-->
    <section class="bg-login text-center col-md-10">
        <section class="radio-toolbar">
          <div class="row middle">
            <div class="col-lg-12">
              <label class="m-2">
                <input type="radio" name="radio"/><div class="box" checked >
                  <img class="mt-2" src="{{url('imgs/Patirnt.svg')}}" height="60" alt="...">
                  <span>Patient</span>
                </div>
              </label>
              <label class="m-2">
                <input type="radio" name="radio"/><div class="box">
                  <img class="mt-2" src="{{url('imgs/Clinic.svg')}}" height="60" alt="...">
                  <span>Clinic</span>
                </div>
              </label>
              <label class="m-2">
                <input type="radio" name="radio"/><div class="box">
                  <img class="mt-2" src="{{url('imgs/Hospital.svg')}}" height="60" alt="...">
                  <span>Hospital</span>
                </div>
              </label>
              <label class="m-2">
                <input type="radio" name="radio"/><div class="box">
                  <img class="mt-2" src="{{url('imgs/x-ray.svg')}}" height="60" alt="...">
                  <span>X-ray</span>
                </div>
              </label>
              <label class="m-2">
                <input type="radio" name="radio"/><div class="box">
                  <img class="mt-2" src="{{url('imgs/labs.svg')}}" height="60" alt="...">
                  <span>Labs</span>
                </div>
              </label>
              <label class="m-2">
                <input type="radio" name="radio"/><div class="box">
                  <img class="mt-2" src="{{url('imgs/pharmacy.svg')}}" height="60" alt="...">
                  <span>Pharmacy</span>
                </div>
              </label>
            </div>
          </div>
        </section>

        <div class="container row">
          <div class="col-md-6 form">
            <form>
              <p class="group">
                <input id="name" type="text" required>
                <label for="name">Email or Phone Namber</label>
              </p>
              <p class="group">
                <input id="Password" type="password" required>
                <label for="name">Password</label>
              </p><br/>
              <a class="text-forget" href="loginAbout.html">Forget Password?</a>
              <input type="submit" value="Submit">
            </form>
          </div>
        </div>
        <div class="text-account">
          OR
          <br>
          <a class="" href="loginAbout.html">Don't have an Account ?</a>
        </div>
    </section>
    <!--End-Login-->


@stop
