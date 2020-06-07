 @extends('backEnd.layoutes.mastar')
 @section('title','paitenHistory')
 @section('content')
 <!-- navbar file -->
 @include('backEnd.layoutes.navbar')

 <!-- navbar file -->
<!--Start-cards-->
<div class="bg-About">
<section class="container row mt-5 paddingB mr-auto ml-auto">
    <div class="row col-7 mt-5 mr-auto ml-auto">
        <div class="col-xl-4 mt-3 text-center">
            <div class="card">
                <img src="{{url('imgs/Patirnt.svg')}}" height="70" class="card-img-top mt-3 pt-3" alt="...">
                <div class="card-body mt--3">
                    <a href="{{route('patienRegister')}}" class="h5 mt--3 font-weight-bold text-decoration-none mb-0">Patient</a>
                </div>
            </div>
        </div>
        <div class="col-xl-4 mt-3 text-center">
            <div class="card">
                <img src="{{url('imgs/Clinic.svg')}}" height="70" class="card-img-top mt-3 pt-3" alt="...">
                <div class="card-body">
                    <a href="{{route('clinicRegister')}}" class="h5 mt--3 font-weight-bold text-decoration-none mb-0">Clinic</a>
                </div>
            </div>
        </div>
        <div class="col-xl-4 mt-3 text-center">
            <div class="card">
                <img src="{{url('imgs/Hospital.svg')}}" height="70" class="card-img-top mt-3 pt-3" alt="...">
                <div class="card-body">
                    <a href="{{route('hosptailRegister')}}" class="h5 mt--3 font-weight-bold text-decoration-none mb-0">Hospital</a>
                </div>
            </div>
        </div>
      </div>
      <div class="row col-7 mr-auto ml-auto">
        <div class="col-xl-4 mt-3 text-center">
          <div class="card">
            <img src="{{url('imgs/x-ray.svg')}}" height="70" class="card-img-top mt-3 pt-2" alt="...">
            <div class="card-body">
              <a href="{{route('xrayRegister')}}" class="h5 mt--3 font-weight-bold text-decoration-none mb-0">X-ray</a>
            </div>
          </div>
        </div>
        <div class="col-xl-4 mt-3 text-center">
            <div class="card">
              <img src="{{url('imgs/labs.svg')}}" height="70" class="card-img-top mt-3 pt-2" alt="...">
              <div class="card-body">
                <a href="{{route('labsRegister')}}" class="h5 mt--3 font-weight-bold text-decoration-none mb-0">Labs</a>
              </div>
            </div>
        </div>
        <div class="col-xl-4 mt-3 text-center">
          <div class="card pt-2">
            <img src="{{url('imgs/pharmacy.svg')}}" height="70" class="card-img-top mt-3 pt-2" alt="...">
            <div class="card-body">
                <a href="{{route('pharmacyRegister')}}" class="h5 mt--3 font-weight-bold text-decoration-none mb-0">Pharmacy</a>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>
</div>
  <!--End-cards-->
  <!-- footer -->
  @include('backEnd.layoutes.footer')
<!-- footer -->


@stop
