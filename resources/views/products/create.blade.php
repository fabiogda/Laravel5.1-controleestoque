@extends('layouts.admin')
@section('content')
<br>
{!!Form::open(['route'=>'categories.store', 'method'=>'POST'])!!}
{!! Form::button(' Categoria',['class' => 'btn btn-xs btn-primary fa fa-plus-circle','data-toggle' => 'modal',
      'data-target' => '#confirm',
      'data-title' => 'Delete Package Type',
      'data-message' => 'Nova Categoria'])
!!}
@include('categories.forms.create_modal')
{!!Form::close()!!}

{!!Form::open(['route'=>'products.store', 'method'=>'POST','files'=> true])!!}
@include('products.forms.product')
<br>
{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}
{!!Form::close()!!}
@endsection
