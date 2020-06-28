@extends('backEnd.layoutes.mastar')
@section('title','confirm password')
@section('content')
<div class="container">
	@foreach($errors->all() as $error)
		<div class="alert alert-danger">{{$error}}</div>
	@endforeach
	<form action="{{route('post_hosptail_confirm_password',$hosptail->id)}}" method="POST">
		{{ csrf_field() }}
		<input type="hidden" name="hosptail_id" value="{{$hosptail->id}}">
		<div class="form-group">
			<label>New Password</label>
			<input type="password" name="new_password" class="form-control">
		</div>
		{{-- <div class="form-group">
			<label>Confirm Password</label>
			<input type="password" name="password_confirmation" class="form-control">
		</div> --}}
		<div class="form-group">
			<input type="submit" value="Update password" class="btn btn-success">
		</div>
	</form>


</div>



@stop