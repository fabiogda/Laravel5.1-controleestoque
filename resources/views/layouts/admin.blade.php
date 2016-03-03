<!DOCTYPE html>
<html lang="pt-br">

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

<body>

    <div id="wrapper">

        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Admin</a>
            </div>


            <ul class="nav navbar-top-links navbar-right">
                 <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                      {!!Auth::user()->name!!}<i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Ajustes</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="{!!URL::to('/logout')!!}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                      @if(Auth::User()->id == 1)
                        <li>
                            <a href="#"><i class="fa fa-users fa-fw"></i> Usuario<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!!URL::to('/users/create')!!}"><i class='fa fa-plus fa-fw'></i>Registrar</a>
                                </li>
                                <li>
                                    <a href="{!!URL::to('/users')!!}"><i class='fa fa-list-ol fa-fw'></i> Listar Usuarios</a>
                                </li>
                            </ul>
                        </li>
                        @endif
                        <li>
                            <a href="#"><i class="fa fa-filter"> </i> Categoria <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!!URL::to('/categories/create/')!!}"><i class='fa fa-plus fa-fw'></i> Registrar uma categoria</a>
                                </li>
                                <li>
                                    <a href="{!!URL::to('/categories')!!}"><i class='fa fa-list-ol fa-fw'></i> Listar Categorias</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-barcode"> </i> Produto<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!!URL::to('/products/create')!!}"><i class='fa fa-plus fa-fw'></i> Registrar</a>
                                </li>
                                <li>
                                    <a href="{!!URL::to('/products')!!}"><i class='fa fa-list-ol fa-fw'></i> Listar Produtos</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-table"> </i> Estoque <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!!URL::to('/entries/create')!!}"><i class='fa fa-plus fa-fw'></i> Adicionar Item</a>
                                </li>
                                <li>
                                    <a href="{!!URL::to('/entrielist')!!}"><i class='fa fa-list-ol fa-fw'></i> Listar Entradas</a>
                                </li>
                                <li>
                                    <a href="{!!URL::to('/entries')!!}"><i class='fa fa-list-ol fa-fw'></i> Listar Estoque</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-tags"> </i> Vendas <span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{!!URL::to('/outputs')!!}"><i class='fa fa-list-ol fa-fw'></i> Listar Vendas</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
     </nav>

        <div id="page-wrapper">
            @yield('content')
        </div>

    </div>


    {!!Html::script('js/jquery.min.js')!!}
    {!!Html::script('js/bootstrap.min.js')!!}
    {!!Html::script('js/metisMenu.min.js')!!}
    {!!Html::script('js/sb-admin-2.js')!!}

    @section('scripts')

    @show

</body>

</html>
