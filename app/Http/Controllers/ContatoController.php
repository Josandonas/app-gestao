<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteContato;
use App\Models\MotivoContato;
class ContatoController extends Controller{
    public function contato(Request $request){

        $contato = new SiteContato();
        $motivo_contatos = MotivoContato::all();
        return view('site.contato',['titulo'=>'Contato','motivo_contatos' => $motivo_contatos]);
    }
    public function salvar(Request $request){
        //para usar o unique para validação da informação precisa referenciar
        //a tabela junto do uso
        //por exemplo 'nome'=> 'required | min:3 | max:40'|unique:site_contatos,
        $request->validate([
            'nome'=> 'required | min:3 | max:40',
            'telefone'=> 'required',
            'email'=> 'email',
            'motivo_contatos_id'=> 'required',
            'mensagem'=> 'required | max:2000'
        ]);
        SiteContato::create($request->all());
            return redirect()->route('site.index');
        
        // SiteContato::create($request->all());
    }
}
