<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  {!!Html::style('css/bootstrap.min.css')!!}
  {!!Html::style('css/metisMenu.min.css')!!}
  {!!Html::style('css/sb-admin-2.css')!!}
  {!!Html::style('css/font-awesome.min.css')!!}
  {!!Html::style('https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css')!!}
</head>
<body style="background:#eee;">

  <div class="container">
    <p><br/></p>
    <div class="row">
      <div class="col-md-8"></div>
      <div class="col-md-4">
        <div class="panel panel-default">
          <div class="panel-body">
            <div class="page-header">
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
            {!!link_to('password/email', $title = 'Esqueceu a senha?', $attributes = null, $secure = null)!!}
          </div>
          <p><br/></p>
        </div>
      </div>
    </div>
  </div>
</div>
{!!Html::script('js/jquery.min.js')!!}
{!!Html::script('js/bootstrap.min.js')!!}
{!!Html::script('js/metisMenu.min.js')!!}
{!!Html::script('js/sb-admin-2.js')!!}
</body>
</html>
