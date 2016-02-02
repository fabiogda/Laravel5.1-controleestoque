@extends('layouts.admin')
@section('content')
<div class="panel panel-default">
<div class="panel-heading">Estoque de Produtos</div>
<table class="table">
  <thead>
    <th>Nome</th>
    <th>Preço</th>
    <th>Quantidade</th>
    <th>Descrição</th>
    <th> Opções </th>
  </thead>
    @foreach($products as $product )
    <tbody>
      <td> {{$product->name}} </td>
      <td> {{$product->price}}</td>
      <td> {{$product->quantity}}</td>
      <td> {{$product->description}}</td>
      <td>
       {!!link_to_route('product.edit', $title = ' Editar',$parameters  = $product->id, $atributes = ['class'=>'btn btn-primary fa fa-pencil'])!!}
      </td>
    </tbody>
    @endforeach
</table>
</div>
@endsection
