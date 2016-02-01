@extends('layouts.admin')
@section('content')
<table class="table">
  <thead>
    <th>Nome</th>
    <th>Preço</th>
    <th>Quantidade</th>
    <th>Descrição</th>
    <th> Opções </th>
  </thead>
  <tbody>
    <td> Coca-cola </td>
    <td> 5,50</td>
    <td> 10 </td>
    <td> Bebida Refescante </td>
    <td>
      || {!!link_to_route('product.edit', $title = 'Editar',$attributes = ['class'=>'btn btn-primary'])!!} ||
      || {!!link_to_route('product.destroy', $title = 'Excluir',$attributes = ['class'=>'btn btn-danger'])!!} ||
    </td>
  </tbody>
</table>
@endsection
