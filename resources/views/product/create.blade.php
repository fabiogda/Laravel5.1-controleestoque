@extends('layouts.admin')
	@section('content')
			  	{!!Form::open(['route'=>'product.store', 'method'=>'POST','files'=> true])!!}
		  		@include('product.forms.product')
				{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
			{!!Form::close()!!}
	@endsection
