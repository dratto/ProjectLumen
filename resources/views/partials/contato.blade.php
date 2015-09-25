<div class="panel panel-default">
    @if($pessoa->sexo == 'F')
    <div class="panel-heading panel-gender female">
        <i class="fa fa-female pull-left"></i>
        <h3 class="panel-title pull-left">{{ $pessoa->apelido }}</h3>
    @else
    <div class="panel-heading panel-gender male">
        <i class="fa fa-male pull-left"></i>
        <h3 class="panel-title pull-left">{{ $pessoa->apelido }}</h3>
    @endif
        <span class="pull-right">
            <a href="#" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" title="Editar"><i class="fa fa-edit"></i></a>
            <a href="{{ route('agenda.deleta.pessoa', ['id' => $pessoa->id]) }}" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" title="Apagar"><i class="fa fa-minus-circle"></i></a>
        </span>
    </div>
    <div class="panel-body">
        <h3>{{ $pessoa->nome }}</h3>
        <table class="table table-hover">
            @foreach($pessoa->telefones as $telefone)
                <tr>
                    <td>{{ $telefone->descrição }}</td>
                    <td>{{ $telefone->numero }}</td>
                    <td><a href="{{ route('agenda.deleta.telefone', ['id' => $telefone->id]) }}" class="fa fa-minus-circle text-danger" data-toggle="tooltip" data-placement="top" title="Apagar"></a></td>
                </tr>
            @endforeach
        </table>
    </div>
</div>