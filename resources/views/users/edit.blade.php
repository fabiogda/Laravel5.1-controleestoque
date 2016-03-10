@extends('layouts.admin')
	@section('content')
	@include('alerts.alerts_campo')
			{!!Form::model($user,['route'=> ['users.update',$user->id],'method'=>'PUT'])!!}
			@include('users.forms.usr')
			{!!Form::submit(' Atualizar',['class'=>'btn btn-primary'])!!}
				{!!Form::close()!!}
<br>
{!!Form::open(['route'=> ['users.destroy',$user->id],'method'=>'DELETE'])!!}
{!! Form::button('  Deletar',['class'=>'btn btn-danger',
			'data-toggle' => 'modal',
			'data-target' => '#confirm',
			'data-title' => 'Delete Package Type',
			'data-message' => 'Excluir Registro?'])
!!}
@include('alerts.delete_confirm')
{!!Form::close()!!}
	@endsection
