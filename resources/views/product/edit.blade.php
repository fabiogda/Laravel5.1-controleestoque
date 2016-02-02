@extends('layouts.admin')
	@section('content')
			{!!Form::model($product,['route'=> ['product.update',$product->id],'method'=>'PUT'])!!}
			@include('product.forms.product')
			{!!Form::submit('Atualizar',['class'=>'btn btn-primary'])!!}
				{!!Form::close()!!}
<br>
		{!!Form::open(['route'=> ['product.destroy',$product->id],'method'=>'PUT'])!!}
				{!!Form::submit('Deletar',['class'=>'btn btn-danger'])!!}
		{!!Form::close()!!}

	@endsection
