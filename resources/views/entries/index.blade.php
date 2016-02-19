@extends('layouts.admin')
@section('content')
<div class="panel panel-default">
<div class="panel-heading"><b style="margin-left:40%;text-decoration: underline;">Estoque de Produtos</b></div>
<table class="table table-striped">
  <thead>
    <th>Nome</th>
    <th>Preço</th>
    <th>Quantidade</th>
    <th>Descrição</th>
    <th> Imagem </th>
  </thead>
    @foreach($products as $product )
  <tbody>
      <td> {{$product->name}} </td>
      <td> R$ {{$product->price}}</td>
      <td> {{$product->quantity}} Unidades</td>
      <td> {{$product->description}} </td>
      <td>
        <img src="img_produtos/{{$product->path}}" alt="Imagem do Produto Selecionado" style="width:100px;"/>
      </td>
    </tbody>
    @endforeach
 </table>
</div>
{!!$products->render()!!}
@endsection
