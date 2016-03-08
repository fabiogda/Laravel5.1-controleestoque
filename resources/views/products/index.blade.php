@extends('layouts.admin')
@include('alerts.success')
@section('content')
<div class="panel panel-default">
  <div class="panel-heading"><b style="margin-left:40%;text-decoration: underline;">Catalogo de Produtos</b></div>
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
          {!!link_to_route('products.edit', $title = ' Ajustes ',$parameters  = $product->id, $atributes = ['class'=>'btn btn-success fa fa-cog','data-toggle'=>'tooltip','title'=>'Editar Produto'])!!}
        </td>
      </tr>
    </tbody>
    @endforeach
  </table>
</div>
{!!$products->render()!!}
@endsection
