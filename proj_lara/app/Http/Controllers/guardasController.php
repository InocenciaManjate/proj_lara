<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class guardasController extends Controller
{
   public function home(){
    	$guarda_models = QuardaModel::all();
    	return view('home', ['guarda_models'=> $guarda_models]);
}


    public function add(Request $request){
    	// $this->validate($request,[
     //     'apelido'=> 'required',
     //     'nome'=> 'required',
     //     'tipoCrime'=> 'required',
     //     'data'=> 'required',
     //     'numero'=> 'required',
     //     'cadeia'=> 'required'

    	// ]);

    	$guarda_models = new Article();
    	$guarda_models->apelido = $request->apelido;
    	$guarda_models->nome = $request->nome;
    	$guarda_modelss->data = $request->data;
    	$guarda_models->numero = $request->numero;
    	$guarda_models->cadeia = $request->cadeia;
    	$guarda_models->save();
    	return redirect('/')->with('info','Salvo com sucesso');
    }	
}
