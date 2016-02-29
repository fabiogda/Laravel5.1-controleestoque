@extends('layouts.admin')
@include('alerts.success')
	@section('content')
	<div class="users">
		<table class="table">
			<thead>
				<tr>
				<th>Nome</th>
				<th>E-mail</th>
				<th>Operações</th>
			</tr>
			</thead>
			@foreach($users as $user)
			<tbody>
				<tr>
					<td> {{$user->name}} </td>
					<td> {{$user->email}} </td>
					<td>
						 {!!link_to_route('users.edit', $title = '',$parameters  = $user->id, $atributes = ['class'=>'btn btn-primary fa fa-pencil'])!!}
						  {!!link_to_route('users.edit', $title = '',$parameters  = $user->id, $atributes = ['class'=>'btn btn-danger fa fa-trash-o'])!!}
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
