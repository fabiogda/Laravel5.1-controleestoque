@extends('layouts.admin')
@section('content')
	{!!Form::model($user,['route'=>['usuario.update',$user->id],'method'=>'PUT'])!!}
		@include('usuario.forms.usr')
		{!!Form::submit('Atualizar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
<br>
	{!!Form::open(['route'=>['usuario.destroy',$user->id],'method'=>'DELETE'])!!}
			{!!Form::submit('Deletar',['class'=>'btn btn-danger'])!!}
	{!!Form::close()!!}

@endsection
