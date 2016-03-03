
@extends('layouts.admin')
	@section('content')
	{!!Form::model($user,['route'=>['users.update',$user],'method'=>'PUT'])!!}
		@include('users.forms.usr')
		{!!Form::submit('Atualizar',['class'=>'btn btn-primary','data-toggle'=>'tooltip','title'=>'Atualizar usuario'])!!}
	{!!Form::close()!!}
<br>
{!!Form::open(['route'=>['users.destroy',$user->id],'method'=>'DELETE'])!!}
			{!!Form::submit('Deletar',['class'=>'btn btn-danger fa fa-trash-o','data-toggle'=>'tooltip','title'=>'Deletar usuario'])!!}
	{!!Form::close()!!}

@endsection
