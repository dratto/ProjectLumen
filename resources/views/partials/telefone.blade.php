<a href="{{ route('telefone.create', ['id' => $pessoa->id]) }}" class="btn btn-primary btn-xs" id="new-phone">Novo Telefone</a>
<table class="table table-hover">
    @foreach($pessoa->telefones as $telefone)
        <tr>
            <td>{{ $telefone->descrição }}</td>
            <td>{{ $telefone->numero }}</td>
            <td><a href="{{ route('telefone.edit', ['id' => $telefone->id]) }}" class="fa fa-edit text-success" data-toggle="tooltip" data-placement="top" title="Editar"></a></td>
            <td><a href="{{ route('telefone.delete', ['id' => $telefone->id]) }}" class="fa fa-minus-circle text-danger" data-toggle="tooltip" data-placement="top" title="Apagar"></a></td>
        </tr>
    @endforeach
</table>