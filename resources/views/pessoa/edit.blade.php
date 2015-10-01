@extends('template')

@section('content')
    <div class="col-md-6">
        <form action="{{ route('pessoa.update', ['id' => $pessoa->id] ) }}" method="post" class="form-horizontal">
            <input type="hidden" name="_method" value="PUT">
            <div class="form-group">
                <label for="nome" class="col-sm-2 control-label">Nome</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nome" value="{{ $pessoa->nome }}" id="nome" placeholder="Nome Completo">
                </div>
            </div>
            <div class="form-group">
                <label for="apelido" class="col-sm-2 control-label">Apelido</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="apelido" id="apelido" value="{{ $pessoa->apelido }}" placeholder="Apelido">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="radio">
                        <label>
                            <input type="radio" name="sexo" value="F" @if($pessoa->sexo == 'F') checked @endif> <i class="fa fa-female"></i><br>
                            <input type="radio" name="sexo" value="M" @if($pessoa->sexo == 'M') checked @endif> <i class="fa fa-male"></i>
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-6">
        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @include('partials.telefone')
    </div>
@endsection