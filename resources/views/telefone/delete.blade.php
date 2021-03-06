@extends('template')

@section('content')
    <div class="col-md-6">
        <h3>Deseja realmente apagar este telefone?<br>
            <small>{{ $telefone->descrição }}: {{ $telefone->numero }}</small>
        </h3>
        <form action="{{ route('telefone.destroy', ['id' => $telefone->id]) }}" method="POST">
            <input type="hidden" name="_method" value="DELETE">
            <button type="submit" class="btn btn-danger">Apagar</button>
            <a href="{{ route('agenda.index') }}" class="btn btn-primary">Voltar</a>
        </form>
    </div>
    <div class="col-md-6">
        @include('partials.contato')
    </div>
@endsection