@extends('layouts.admin')
@section('content')
<div class="panel">
<div class="panel-heading"><b style="margin-left:40%;">Entradas de Estoque</b></div>
<table class="table table-striped">
  <thead>
    <th>Usuario</th>
    <th>Produto</th>
    <th>Quantidade</th>
    <th>Operações</th>
  </thead>
    @foreach($entries as $entrie )
  <tbody>
      <td> {{$entrie->user->name}} </td>
      <td> {{$entrie->product->name}}</td>
      <td> {{$entrie->quantity}} Unidades</td>
      <td>
        {!!Form::open(['route'=> ['entries.destroy',$entrie->id],'method'=>'DELETE'])!!}
        {!! Form::button('Deletar',['class' => 'btn btn-danger','data-toggle' => 'modal',
              'data-target' => '#confirm',
              'data-title' => 'Delete Package Type',
              'data-message' => 'Deseja Realmente Deletar Venda?'])
        !!}
        @include('alerts.delete_confirm')
        {!!Form::close()!!}
      </td>
    </tbody>
    @endforeach
 </table>
</div>
{!!$entries->render()!!}
@endsection
