@extends('template')

@section('content')
    <div class="col-md-6">
        <form action="{{ route('telefone.store') }}" method="post" class="form-horizontal">
            <input type="hidden" name="pessoa_id" value="{{$pessoa->id}}">
            <div class="form-group">
                <label for="nome" class="col-sm-2 control-label">Descrição</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="descrição" value="{{ old('descrição') }}" id="descrição" placeholder="Descrição do Telefone" data-toggle="tooltip" data-placement="right" title="Ex: Celular, Residencial, Comercial...">
                </div>
            </div>
            <div class="form-group">
                <label for="apelido" class="col-sm-2 control-label">Telefone</label>
                <div class="col-sm-2">
                    <input type="text" class="form-control" name="codpaís" id="codpaís" value="{{ old('codpaís') }}" placeholder="Codigo país">
                </div>
                <div class="col-sm-2">
                    <input type="text" class="form-control" name="ddd" id="ddd" value="{{ old('ddd') }}" placeholder="DDD">
                </div>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="prefixo" id="prefixo" value="{{ old('prefixo') }}" placeholder="Prefixo">
                </div>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="sufixo" id="sufixo" value="{{ old('sufixo') }}" placeholder="Sufixo">
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
    </div>
@endsection