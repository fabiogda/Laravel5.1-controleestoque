<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>


  <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
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
              <h3>Login Area</h3>
            </div>
            {!!Form::open(['route'=>'log.store', 'method'=>'POST'])!!}
            <div class="form-group">
              {!!Form::label('correo','E-mail')!!}
              {!!Form::email('email',null,['class'=>'form-control', 'placeholder'=>'exemple@exemple.com'])!!}
            </div>
            <div class="form-group">
              {!!Form::label('contrasena','Senha')!!}
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

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>
