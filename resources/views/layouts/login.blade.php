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
                @yield('content')
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
