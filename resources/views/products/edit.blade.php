@extends('layouts.admin')
	@section('content')
			{!!Form::model($product,['route'=> ['products.update',$product->id],'method'=>'PUT'])!!}
			@include('products.forms.product')
			{!!Form::submit('Atualizar',['class'=>'btn btn-primary'])!!}
				{!!Form::close()!!}
<br>
		{!!Form::open(['route'=> ['products.destroy',$product->id],'method'=>'DELETE'])!!}
				{!!Form::submit('Deletar',['class'=>'btn btn-danger'])!!}
		{!!Form::close()!!}
	@endsection
