@extends('layouts.admin')
@include('alerts.success')
@section('content')
<div class="panel ">
<b style="margin-left:40%;">Catalogo de Produtos</b>
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
          <img src="img_produtos/{{$product->path}}" alt="Não prossue imagem" style="width:100px;"/>
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
