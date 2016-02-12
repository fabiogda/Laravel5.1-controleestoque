@extends('layouts.login')
	@section('content')
  <h3 class="fa fa-sign-in"> Login Area</h3>
  </div>
  {!!Form::open(['route'=>'log.store', 'method'=>'POST'])!!}
  <div class="form-group">
  {!!Form::label('email','E-mail')!!}
  {!!Form::email('email',null,['class'=>'form-control', 'placeholder'=>'exemple@exemple.com'])!!}
  </div>
  <div class="form-group">
  {!!Form::label('password','Senha')!!}
  {!!Form::password('password',['class'=>'form-control', 'placeholder'=>'Password'])!!}
  </div>
  {!!Form::submit('Entrar',['class'=>'btn btn-success'])!!}
  {!!Form::close()!!}
  </div>
	@endsection
