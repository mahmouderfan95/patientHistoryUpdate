@extends('backEnd.layoutes.mastar')
@section('title',' verify')
@section('content')
@include('backEnd.layoutes.navbar')
<!-- container -->
<div class="container">
<!-- card -->
    <div class="card" style="margin-top: 85px">
        <div class="card-header">
        Verifcation Code
        </div>
        <div class="card-body">
            <!-- row -->
            <div class="row">
                <!-- col -->
                <div class="col-6">
                    <div class="reca-div">
                        <button onclick="phoneAuth();">Send Mobile</button>
                        <div id="mobile-number">{{$pharmacy['phoneNumber']}}</div>
                        <div id="recaptcha-container"></div>
                    </div>
                    <p class="alert alert-danger danger-Reg" style="display: none"></p>
                    <p style="display:none" class="alert alert-success suc-Reg">Success Reigster <a href="{{route('pharmacy_verifcationCode',$pharmacy['id'])}}">Please Login your Activate .. </a></p>
                    <div class = "show-verify" style="display: none">
                        <input type="text" id="verify-code">
                        <button onclick="codevervcation();" id="send-verify" type="submit">Send Verify</button>
                    </div>
                </div>
                <!-- col -->

                <!-- col -->
                <div class="col-6">
                    <div class="verfy-email">
                        @if(session('EmailMsg'))
                        <p class="alert alert-success">{{session('EmailMsg')}}</p>
                        @endif
                        <a class = "btn btn-primary" href="{{route('pharmacy_send_email',$pharmacy['id'])}}">Verify Email</a>
                        {{-- <div>
                            <img class = "rounded" wit src="{{url('imgs/email_icon.png')}}" alt="">
                        </div> --}}
                    </div>
                </div>
                <!-- col -->
            </div>
            <!-- row -->

        </div>
    </div>
    <!-- card -->
</div>
<!-- container -->




@endsection
