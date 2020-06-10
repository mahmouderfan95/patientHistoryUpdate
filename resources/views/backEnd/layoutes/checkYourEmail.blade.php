@extends('backEnd.layoutes.mastar')
@section('title','Check Your Email')
@section('content')

<div class="check">
    Check Your Email ..... !
    <form>
        <input type="text" id="verfcation" placeholder="Enter Vervcation code">
        <button onclick="codevervcation();">Verfication</button>
    </form>
</div>


@stop
@section('scripts')
    <script src="{{url('js/firebase.js')}}"></script>
@stop
