@extends('layouts.admin')
@include('alerts.success')
@section('content')
<div class="panel panel-default">
  <div class="panel-heading"><b style="margin-left:40%;">Iformações do produto</b></div>
  <table class="table">
    <thead>
      <th>Nome</th>
      <th>Preço</th>
      <th>Descrição</th>
      </thead>
    <tbody>
      <td> {{$product->name}} </td>
      <td> R$ {{$product->price}}</td>
      <td> {{$product->description}}</td>
    </tbody>
  </table>
  <div style="margin-left:50px;margin-top:150px;">
    {!!Form::open(['route'=>'outputs.store','method'=>'POST'])!!}
    {!!Form::hidden('product_id',$product->id,(['id'=> 'product_id']))!!}
    @include('outputs.forms.sale')
    {!!Form::submit('Vender',['class'=>'btn btn-success','data-toggle'=>'tooltip','title'=>'Vender'])!!}
    <a href="/entries"><i class='btn btn-primary fa fa-undo' data-toggle="tooltip" title="Pagina anterior">  Voltar</i></a>
    {!!Form::close()!!}
  </div>
  </div>


@endsection
