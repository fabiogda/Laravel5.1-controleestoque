@extends('layouts.admin')
@section('content')
<div class="panel panel-default">
  <b style="margin-left:40%;">Estoque de Produtos</b>
  <table class="table table-striped">
    <thead>
      <th>Nome</th>
      <th>Preço</th>
      <th>Quantidade</th>
      <th>Descrição</th>
      <th> Imagem </th>
      <th>Operações</th>
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
      <td>
        {!!link_to_route('outputs.edit', $title = ' Vender ',$parameters = $product->id, $atributes = ['class'=>'btn btn-warning fa fa-cart-plus','data-toggle'=>'tooltip','title'=>'Vender Produto'])!!}
      </td>
    </tbody>
    @endforeach
  </table>
</div>
{!!$products->render()!!}
@endsection
