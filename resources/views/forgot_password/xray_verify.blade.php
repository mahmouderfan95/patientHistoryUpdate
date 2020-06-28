@extends('backEnd.layoutes.mastar')
@section('title',' send code')
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
                        <div id="mobile-number">{{str_replace('x', '+', $xray['phoneNumber'])}}</div>
                        <div id="recaptcha-container"></div>
                    </div>
                    <p class="alert alert-danger danger-Reg" style="display: none"></p>
                    <p style="display:none" class="alert alert-success suc-Reg">Success Reigster <a href="{{route('get_xray_confirm_password',$xray['id'])}}">Please Login your Activate .. </a></p>
                    <div class = "show-verify" style="display: none">
                        <input type="text" id="verify-code">
                        <button onclick="codevervcation();" id="send-verify" type="submit">Send Verify</button>
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
