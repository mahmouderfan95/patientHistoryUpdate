@extends('backEnd.layoutes.mastar')
@section('title','Reset Password')
@section('content')
<div class="container">
    <div class="card mt-4">
        <div class="card-header">
            reset password
        </div>
        <div class="card-body">
        @if(session('reset_msg'))
            <p class="alert alert-success">{{session('reset_msg')}}</p>
        @endif
        <form action="{{route('post_reset_password')}}" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label>Choose Your Account Type</label>
                <select name="accountType" class="form-control">
                    <option value="Patien">Patient</option>
                    <option value="Hosptail">Hosptail</option>
                    <option value="Clinic">Clinic</option>
                    <option value="Xray">Xray</option>
                    <option value="Lab">Labs</option>
                    <option value="Pharmacy">Pharmacy</option>
                </select>
            </div>
            <div class="form-group">
                <label class="card-title">Please Enter Your Email</label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-success" value="Send Email">
            </div>
        </form>
        </div>
    </div>
</div>
@stop
