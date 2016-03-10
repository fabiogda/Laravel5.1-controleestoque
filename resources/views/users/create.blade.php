@extends('layouts.admin')
@section('content')
@include('alerts.alerts_campo')
    {!!Form::open(['route'=>'users.store', 'method'=>'POST'])!!}
      @include('users.forms.usr')
    {!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
    {!!Form::close()!!}
@endsection
