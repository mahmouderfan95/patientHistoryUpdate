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
            <label>Please Enter Your id code </label>
            <input type="text" name="code" class="form-control" placeholder="Enter Your Code Id">
        </div>
        <div class="form-group">
            <input type="submit" value="Enter">
        </div>

    </form>
</div>

@stop




