@extends('layouts.admin')
	@section('content')
			  	{!!Form::open(['route'=>'entries.store','method'=>'POST'])!!}
		  		@include('entries.forms.entries')
				{!!Form::submit('Adicionar',['class'=>'btn btn-primary','data-toggle'=>'tooltip','title'=>'Registrar entrada'])!!}
			{!!Form::close()!!}
	@endsection
