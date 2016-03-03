@extends('layouts.admin')
@include('alerts.success')
@section('content')
<div class="panel panel-default">
<div class="panel-heading"><b style="margin-left:40%;text-decoration: underline;">Estoque de Produtos</b></div>
<table class="table">
  <thead>
    <tr>
      <th>Nome</th>
      <th>Preço</th>
      <th>Descrição</th>
      <th> Imagem </th>
      <th> Operações </th>
    </tr>
    </thead>
    @foreach($products as $product )
    <tbody>
    <tr>
      <td> {{$product->name}} </td>
      <td> R$ {{$product->price}}</td>
      <td> {{$product->description}}</td>
      <td>
      <img src="img_produtos/{{$product->path}}" alt="Imagem do Produto Selecionado" style="width:100px;"/>
      </td>
      <td>
       {!!link_to_route('products.edit', $title = ' ',$parameters  = $product->id, $atributes = ['class'=>'btn btn-primary fa fa-pencil','data-toggle'=>'tooltip','title'=>'Editar Produto'])!!}
       {!!link_to_route('products.edit', $title = ' ',$parameters  = $product->id, $atributes = ['class'=>'btn btn-danger fa fa-trash-o','data-toggle'=>'tooltip','title'=>'Deletar produto'])!!}
      </td>
    </tr>
    </tbody>
    @endforeach
</table>
</div>
{!!$products->render()!!}
@endsection
