@extends('layouts.admin')
	@section('content')
			{!!Form::model($product,['route'=> ['products.update',$product->id],'method'=>'PUT'])!!}
			@include('products.forms.product')
			{!!Form::submit('Atualizar',['class'=>'btn btn-primary'])!!}
				{!!Form::close()!!}
<br>
		{!!Form::open(['route'=> ['products.destroy',$product->id],'method'=>'DELETE'])!!}
			{!! Form::button('Deletar',['class' => 'btn btn-danger','data-toggle' => 'modal',
					'data-target' => '#confirm',
					'data-title' => 'Delete Package Type',
					'data-message' => 'Excluir Registro?'])
		!!}
		@include('alerts.delete_confirm')
			{!!Form::close()!!}
	@endsection
