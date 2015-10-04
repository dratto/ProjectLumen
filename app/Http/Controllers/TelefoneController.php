<?php

namespace ProjectLumen\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Laravel\Lumen\Routing\Controller as BaseController;
use ProjectLumen\Entities\Pessoa;
use ProjectLumen\Entities\Telefone;

class TelefoneController extends BaseController
{
    public function update(Request $request, $id)
    {
        $telefone = Telefone::find($id);
        $validator = Validator::make($request->all(),[
            'descrição' => 'required|max:50|min:5|alpha',
            'codpaís'   => 'required|max:8',
            'ddd'       => 'required',
            'prefixo'   => 'required',
            'sufixo'    => 'required'
        ]);
        if($validator->fails()) {
            return redirect()->route('telefone.edit', ['id' => $telefone->id])->withErrors($validator)->withInput();
        }
        $telefone->fill($request->all())->save();
        return redirect()->route('agenda.index');
    }

    public function edit($id)
    {
        $telefone = Telefone::find($id);
        return view('telefone.edit', compact('telefone'));
    }
    public function create($id)
    {
        $pessoa = Pessoa::find($id);
        return view('telefone.create', compact('pessoa'));
    }

    /**
     * @param Request $request
     * @return $this|\Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'descrição' => 'required|max:50|min:5|alpha',
            'codpaís'   => 'required|max:8',
            'ddd'       => 'required',
            'prefixo'   => 'required',
            'sufixo'    => 'required'
        ]);
        if($validator->fails()) {
            return redirect()->route('telefone.create', ['id' => $request->input('pessoa_id')])->withErrors($validator)->withInput();
        }
        $telefone = Telefone::create($request->all());
        $pessoa   = Pessoa::find($request->input('pessoa_id'));
        $letra    = strtoupper(substr($pessoa->apelido, 0, 1));
        return redirect()->route('agenda.letra', ['letra' => $letra]);
    }
    public function delete($id)
    {
        $telefone = Telefone::find($id);
        $pessoa   = $telefone->pessoa;
        return view('telefone.delete', compact('pessoa', 'telefone'));
    }
    public function destroy($id)
    {
        Telefone::destroy($id);
        return redirect()->route('agenda.index');
    }
}
