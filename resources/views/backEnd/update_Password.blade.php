@extends('backEnd.layoutes.mastar')
@section('title','Update password')
@section('content')
<div class="container">
    <form action="{{route('post_update_password')}}" method="POSt" class="mt-4">
        {{ csrf_field() }}
        {{$reset_request->email}}
        <div class="form-group">
            <label>New password</label>
            <input type="password" class="form-control" name="password">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Update Password">
        </div>

    </form>
</div>




@stop
