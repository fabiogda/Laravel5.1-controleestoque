@extends('layouts.admin')
	@section('content')
	<div class="users">
		<table class="table">
			<thead>
				<th>Nome</th>
				<th>E-mail</th>
				<th>Opções</th>
			</thead>
			@foreach($users as $user)
			<tbody>
					<td> {{$user->name}} </td>
					<td> {{$user->email}} </td>
					<td>
						 {!!link_to_route('usuario.edit', $title = 'Editar',$parameters  = $user->id, $atributes = ['class'=>'btn btn-primary'])!!}
						 {!!link_to_route('usuario.destroy', $title = 'Deletar',$parameters  = $user->id ,$atributes = ['class'=>'btn btn-danger'] )!!}
					</td>
				</tbody>
				@endforeach
		</table>

	</div>
  @endsection
	@section('scripts')
		{!!Html::script('js/script3.js')!!}
	@endsection
