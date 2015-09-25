<?php

namespace ProjectLumen\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;
use ProjectLumen\Entities\Pessoa;
use ProjectLumen\Entities\Telefone;

class AgendaController extends BaseController
{
    public function index($letra = 'A')
    {
        $pessoas = Pessoa::where('apelido', 'like', $letra.'%')->get();
        return view('agenda', compact('pessoas'), ['nome' => '']);
    }
    public function getByName(Request $request)
    {
        $nome = $request->input('search');
        $pessoas = Pessoa::whereRaw("apelido like '%$nome%' or nome like '%$nome%'")->get();
        return view('agenda', compact('pessoas'), ['nome' => $nome]);
    }
    public function deleteTelefone($id)
    {
        Telefone::destroy($id);
        return redirect()->route('agenda.index');
    }
    public function deletePessoa($id)
    {
        Pessoa::destroy($id);
        return redirect()->route('agenda.index');
    }
}
