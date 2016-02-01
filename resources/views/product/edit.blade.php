@extends('layouts.admin')
	@section('content')
			{!!Form::model($Product,['route'=> ['product.update',$product->id],'method'=>'PUT','files' => true])!!}
			@include('product.forms.product')
			{!!Form::submit('Atualizar',['class'=>'btn btn-primary'])!!}
		{!!Form::close()!!}

		{!!Form::open(['route'=> ['product.destroy',$product->id],'method'=>'DELETE'])!!}
		{!!Form::close()!!}
	@endsection
