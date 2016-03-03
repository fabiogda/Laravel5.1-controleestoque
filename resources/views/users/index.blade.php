@extends('layouts.admin')
@include('alerts.success')
	@section('content')
	<div class="panel">
		<div class="panel-heading"><b style="margin-left:40%;">Usuarios</b></div>
		<table class="table">
			<thead>
				<tr>
				<th>Nome</th>
				<th>E-mail</th>
				<th>Ações</th>
			</tr>
			</thead>
			@foreach($users as $user)
			<tbody>
				<tr>
					<td> {{$user->name}} </td>
					<td> {{$user->email}} </td>
					<td>
						 {!!link_to_route('users.edit', $title = '',$parameters  = $user->id, $atributes = ['class'=>'btn btn-primary fa fa-pencil','data-toggle'=>'tooltip','title'=>'Editar usuario'])!!}
						  {!!link_to_route('users.edit', $title = '',$parameters  = $user->id, $atributes = ['class'=>'btn btn-danger fa fa-trash-o','data-toggle'=>'tooltip','title'=>'Deletar usuario'])!!}
					</td>
				</tr>
				</tbody>
				@endforeach
		</table>
		{!!$users->render()!!}
	</div>
	@endsection
	@section('scripts')
		{!!Html::script('js/script3.js')!!}
	@endsection
