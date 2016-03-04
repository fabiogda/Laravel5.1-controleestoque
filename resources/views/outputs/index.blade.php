@extends('layouts.admin')
@include('alerts.success')
@section('content')
<div class="panel">
<div class="panel-heading"><b style="margin-left:40%;">Vendas Realizas</b></div>
<table class="table table-striped">
  <thead>
    <tr>
      <th>Vendedor</th>
      <th>Produto</th>
      <th>Quantidade</th>
      <th> Ações  </th>
    </tr>
      </thead>
    <tbody>
      @foreach($outputs as $output)
      <tr>
        <td> {{$output->user->name}} </td>
        <td> {{$output->product->name}} </td>
        <td> {{$output->quantity}} </td>
        <td>
          {!!Form::open(['route'=> ['outputs.destroy',$output->id],'method'=>'DELETE'])!!}
          {!! Form::button('',['class' => 'btn btn-danger fa fa-trash-o','data-toggle' => 'modal',
                'data-target' => '#confirm',
                'data-title' => 'Delete Package Type',
                'data-message' => 'Excluir Registro?'])
          !!}
          @include('alerts.delete_confirm')
        	{!!Form::close()!!}
        </td>
      </tr>
      @endforeach
      </tbody>
    </table>
  </div>
{!!$outputs ->render()!!}
@endsection
