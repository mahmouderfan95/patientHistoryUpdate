@extends('backEnd.layoutes.mastar')
@section('title','verfication')
@section('content')
<form id='ve'>
    {{ csrf_field() }}
    <input type="text" id="verfcation" placeholder="Enter Vervcation code">
    <button onclick="codevervcation();">Verfication</button>
</form>



@endsection
