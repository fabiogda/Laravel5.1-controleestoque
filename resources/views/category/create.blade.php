@extends('layouts.admin')
	@section('content')
<br>
 				{!!Form::open(['route'=>'category.store', 'method'=>'POST'])!!}
		  		@include('category.forms.category')
				{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
			{!!Form::close()!!}
@endsection
