@extends('layouts.admin')
	@section('content')
<br>
 				{!!Form::open(['route'=>'categories.store', 'method'=>'POST'])!!}
		  		@include('categories.forms.category')
				{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
			{!!Form::close()!!}
@endsection
