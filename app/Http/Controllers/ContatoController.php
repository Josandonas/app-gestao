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


        $regras=[
            'nome'=> 'required | min:3 | max:40',
            'telefone'=> 'required',
            'email'=> 'email',
            'motivo_contatos_id'=> 'required',
            'mensagem'=> 'required | max:2000'
        ];
        $feedback=[
            'nome.required' => 'O campo Nome precisa ser preenchido',
            'nome.min' => 'O Nome precisa ter mais de 3 letras',
            'nome.max' => 'O Nome precisa ter no máximo 50 letras',
            'telefone.required' => 'O campo telefone precisa ser preenchido',
            'email' => 'O campo requer um e-mail válido',
            'motivo_contatos_id.required' => 'Precisa escolher um motivo de contato',
            'mensagem.required' => 'O campo mensagem precisa ser preenchido'
            //posso instanciar a mensagem junto de seu atributo assim :atribute
        ];
        //para usar o unique para validação da informação precisa referenciar
        //a tabela junto do uso
        //por exemplo 'nome'=> 'required | min:3 | max:40'|unique:site_contatos,
        $request->validate( $regras, $feedback);      
        
        SiteContato::create($request->all());
            return redirect()->route('site.index');
        
        // SiteContato::create($request->all());
    }
}
