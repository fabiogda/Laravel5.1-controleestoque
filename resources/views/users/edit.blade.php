
@extends('layouts.admin')
	@section('content')
	{!!Form::model($user,['route'=>['users.update',$user],'method'=>'PUT'])!!}
		@include('users.forms.usr')
		{!!Form::submit('Atualizar',['class'=>'btn btn-primary'])!!}
	{!!Form::close()!!}
<br>
	{!!Form::open(['route'=>['users.destroy',$user->id],'method'=>'DELETE'])!!}
			{!!Form::submit('Deletar',['class'=>'btn btn-danger fa fa-trash-o'])!!}
	{!!Form::close()!!}

@endsection
