@extends('layouts.admin')
@section('content')
<br>
{!!link_to('/category/create' ,$title = '+ Categoria',$attributes = ['class'=>'btn btn-default'])!!}
{!!Form::open(['route'=>'product.store', 'method'=>'POST','files'=> true])!!}
@include('product.forms.product')
<br>
{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
{!!Form::close()!!}
@endsection
