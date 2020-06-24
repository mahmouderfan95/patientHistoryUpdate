@extends('backEnd.layoutes.mastar')
@section('title','Update New Password')
@section('content')
@include('backEnd.layoutes.navbar')
<div class="container">
    <form action="{{route('post_update_new_password_page')}}" method="POST" style="margin-top: 100px">
        {{ csrf_field() }}
        <input type="hidden" name="role" value="{{$role}}">
        <div class="form-group">
            <label>New password</label>
            <input type="password" name="password" class="form-control" id = "psw"pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}">
            <div id="message">
                {{-- <h3>Password must contain the following:</h3> --}}
                <p id="letter" class="invalid"><span>A lowercase letter</span></p>
                <p id="capital" class="invalid"><span>A capital (uppercase) letter</span></p>
                {{-- <p id="number" class="invalid"><span>A number</span></p> --}}
                <p id="length" class="invalid"><span>Minimum 8 characters </span></p>
            </div>
        </div>
        <div class="form-group">
            <input type="submit" value="Update password" class="btn btn-primary">
        </div>
    </form>

</div>
@stop
