@extends('backEnd.layoutes.mastar')
@section('title',' send code')
@section('content')
@include('backEnd.layoutes.navbar')

<!--Start-Login-->
<div class="container-fluid row no-gutters mt-5 bg-message">
    <div class="col-lg-6 order-lg-2 mt-5 text-center">
    <img src="{{url('imgs/messege.png')}}" class="img-fluid float-left order-lg-2 mb-lg-5" alt="Responsive image" height="500" width="600">
    </div>
    <div class="col-lg-6 order-lg-1 mt-5 mb-5 text-center">
        <div class="reca-div">
            <button onclick="phoneAuth();">Send Mobile</button>
            <div id="mobile-number">{{ str_replace('p', '+',$patient['phoneNumber'] )}}</div>
            <div id="recaptcha-container"></div>
        </div>
        <p class="alert alert-danger danger-Reg" style="display: none"></p>
        <p style="display:none" class="alert alert-success suc-Reg">Success Reigster <a href="{{route('get_confirm_password',$patient['id'])}}">Please confirm password .. </a></p>
        <div class = "show-verify" style="display: none">
            <input type="text" id="verify-code">
            <button onclick="codevervcation();" id="send-verify" type="submit">Send Verify</button>
        </div>

        
        </div>

    </div>
  </div>
  <!--End-Login-->



@endsection
