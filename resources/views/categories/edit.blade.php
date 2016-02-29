@extends('layouts.admin')
	@section('content')

	{!!Form::model($category,['route'=> ['categories.update',$category->id],'method'=>'PUT'])!!}
	@include('categories.forms.category')
	{!!Form::submit('Atualizar',['class'=>'btn btn-primary'])!!}
		{!!Form::close()!!}
<br>
{!!Form::open(['route'=> ['categories.destroy',$category->id],'method'=>'DELETE'])!!}
		{!!Form::submit('Deletar',['class'=>'btn btn-danger'])!!}
{!!Form::close()!!}

	@endsection
