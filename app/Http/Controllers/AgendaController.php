<?php

namespace ProjectLumen\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller as BaseController;
use ProjectLumen\Entities\Pessoa;

class AgendaController extends BaseController
{
    public function index($letra = 'A')
    {
        $pessoas = Pessoa::where('apelido', 'like', $letra.'%')->get();
        return view('agenda', compact('pessoas'));
    }
    public function getByName(Request $request)
    {
        $nome = $request->input('search');
        $pessoas = Pessoa::whereRaw("apelido like '%$nome%' or nome like '%$nome%'")->get();
        return view('agenda', compact('pessoas'));
    }
}
