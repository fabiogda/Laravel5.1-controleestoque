@extends('layouts.admin')
@include('alerts.success')
@section('content')
<div class="users">
  <table class="table">
<table class="table">
  <thead>
    <th>#</th>
    <th>Nome da Categoria</th>
    <th> Operações </th>
  </thead>
    @foreach($category as $category )
    <tbody>
      <td> {{$category->id}} </td>
      <td> {{$category->name}}</td>
      <td>
       {!!link_to_route('category.edit', $title = ' Editar',$parameters  = $category->id, $atributes = ['class'=>'btn btn-primary fa fa-pencil'])!!}
      </td>
    </tbody>
    @endforeach
</table>
</div>
@endsection
