<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chamado;

class ChamadoController extends Controller
{
    
    public function index() {

        $pesquisar_cliente = request('pesquisar_cliente');
        $pesquisar_categoria = request('pesquisar_categoria');
        $pesquisar_status = request('pesquisar_status');

        if($pesquisar_cliente OR $pesquisar_categoria OR $pesquisar_status) {
            
            $chamados = Chamado::where(
                [
                    ['cliente', 'like', '%'.$pesquisar_cliente.'%'],
                    ['categoria', 'like', '%'.$pesquisar_categoria.'%'],
                    ['status', 'like', '%'.$pesquisar_status.'%']
                ])->get();

        }else {
            $chamados = Chamado::all();
        }

        return view('chamados.index', ['chamados' => $chamados]);
    }

    public function create() {

        return view('chamados.create');

    }

    public function store(Request $request) {

        $chamado = new Chamado;

        $chamado->cliente     = $request->cliente;
        $chamado->data_inicio = $request->data_inicio;
        $chamado->categoria   = $request->categoria;
        $chamado->problema    = $request->problema;
        $chamado->descricao   = $request->descricao;
        $chamado->status      = $request->status;
        $chamado->data_fim    = $request->data_fim;

        $chamado->save();

        return redirect('/chamados/index')->with('msg', 'Um novo Chamado para '. $chamado->cliente .' foi Criado!');

    }

    public function show($id) {

        $chamado = Chamado::findOrFail($id);
        return view('chamados.show', ['chamado' => $chamado]);

    }

    public function destroy($id) {

        Chamado::findOrFail($id)->delete();
        return redirect('/chamados/index')->with('msg', 'O Chamado foi Excluído com Sucesso!');

    }

    public function edit($id) {

        $chamado = Chamado::findOrFail($id);
        return view('chamados.edit', ['chamado' => $chamado]);

    }

    public function update(Request $request) {

        Chamado::findOrFail($request->id)->update($request->all());
        return redirect('/chamados/index')->with('msg', 'Chamado Atualizado com Sucesso!');

    }

}
