@extends('layouts.admin')
@section('content')
<br>
{!!link_to('/category/create' ,$title = '+ Categoria',$attributes = ['class'=>'btn btn-default'])!!}
{!!Form::open(['route'=>'products.store', 'method'=>'POST','files'=> true])!!}
@include('products.forms.product')
<br>
{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
{!!Form::close()!!}
@endsection
