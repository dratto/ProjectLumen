<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <link href="{{ url('css/app.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-lg-12 page-header">
            <h1>
                Code.Education<br>
                <a href="{{ route('agenda.index') }}" class="text-primary">
                    <small><i class="glyphicon glyphicon-phone-alt"></i> Agenda Telefônica</small>
                </a>
                <span class="pull-right search">
                    <form class="form-line" action="{{ route('agenda.nome') }}" method="post">
                        <div class="input-group">
                            <input type="text" class="form-control" id="search" name="search" value="<?=$nome?>" placeholder="Pesquisar...">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="submit"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                </span>
            </h1>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            @foreach(range('A','Z') as $letra)
                @if(\ProjectLumen\Entities\Pessoa::where('apelido','like', $letra.'%')->count())
                    <a href="{{ route('agenda.letra', ['letra' => $letra]) }}" class="btn btn-primary btn-xs">{{ $letra }}</a>
                @endif
            @endforeach
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 btn-row">
            <a href="{{ route('pessoa.create') }}" class="btn btn-primary">Novo Contato</a>
        </div>
    </div>
    <div class="row">
        @yield('content')
    </div>
</div>


<script src="{{ url('js/script.js') }}"></script>
</body>
</html>