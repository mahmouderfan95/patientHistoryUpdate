@extends('backEnd.layoutes.mastar')
@section('title','Forgot password')
@section('content')
@include('backEnd.layoutes.navbar')
<div class="container">
    @if(session('errorEmailMsg'))
        <div style = "margin-top:100px" class="alert alert-danger">{{session('errorEmailMsg')}}</div>
    @endif
    <form action="{{route('post_forgot_password')}}" method="POST" class="mt-4">
        {{ csrf_field() }}
        <h5>Forgot Password</h5>
        <div class="form-group">
            <label>Please Enter Your Email</label>
            <input type="email" name="email" class="form-control" placeholder="Enter Your Email">
        </div>
        <div class="form-group">
            <input type="submit" value="send email">
        </div>

    </form>
</div>

@stop




