@extends('layouts.admin')
@include('alerts.success')
@section('content')
<div class="panel-heading"><b style="margin-left:40%;">Vendas Realizadas </b></div>
<table class="table">
  <thead>
    <tr>
      <th>Vendedor</th>
      <th>Produto</th>
      <th>Quantidade</th>
    </tr>
      </thead>
    <tbody>
      @foreach($outputs as $output)
      <tr>
        <td> {{$output->user->name}} </td>
        <td> {{$output->product->name}} </td>
        <td> {{$output->quantity}} </td>
      </tr>
      @endforeach
    </tbody>
</table>

@endsection
