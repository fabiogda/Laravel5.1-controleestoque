@extends('layouts.admin')
@include('alerts.success')
@section('content')
<div class="panel">
	<div class="panel-heading">
		{!! Form::Open()!!}
		{!! Form::button(' Usuario',['class' => 'btn btn-primary btn-xs fa fa-plus-circle','data-toggle' => 'modal',
		'data-target' => '#registar',
		'data-title' => 'Delete Package Type',
		'data-message' => 'Deseja Realmente Deletar Venda?'])
		!!}
		@include('users.forms.create_modal')
		{!!Form::close()!!}
		<b style="margin-left:40%;">Usuarios</b></div>
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
						<ul style="list-style-type: none;">
							<li role="presentation" class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button"  aria-expanded="false" title="Ajustes">
									<i class="fa fa-align-justify"></i> <span class="caret"></span>
								</a>
								<ul class="dropdown-menu">
									<li>{!!link_to_route('users.edit', $title = ' Ajustes',$parameters  = $user->id, $atributes = ['class'=>'fa fa-cog','data-toggle'=>'tooltip','title'=>'Ajustes'])!!}</li>
								</ul>
							</li>
						</ul>
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
