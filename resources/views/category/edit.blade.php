@extends('layouts.admin')
	@section('content')

	{!!Form::model($category,['route'=> ['category.update',$category->id],'method'=>'PUT'])!!}
	@include('category.forms.category')
	{!!Form::submit('Atualizar',['class'=>'btn btn-primary'])!!}
		{!!Form::close()!!}
<br>
{!!Form::open(['route'=> ['category.destroy',$category->id],'method'=>'DELETE'])!!}
		{!!Form::submit('Deletar',['class'=>'btn btn-danger'])!!}
{!!Form::close()!!}

	@endsection
