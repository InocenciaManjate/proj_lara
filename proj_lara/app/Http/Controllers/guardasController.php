<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\QuardaModel;

class guardasController extends Controller
{
   public function home(){
    	$guarda_models = QuardaModel::all();
    	return view('home', ['guarda_models'=> $guarda_models]);
}


    public function adicionar(Request $request){
    	// $this->validate($request,[
     //     'apelido'=> 'required',
     //     'nome'=> 'required',
     //     'tipoCrime'=> 'required',
     //     'data'=> 'required',
     //     'numero'=> 'required',
     //     'cadeia'=> 'required'

    	// ]);

    	$guarda_models = new  QuardaModel();
    	$guarda_models->apelido = $request->apelido;
    	$guarda_models->nome = $request->nome;
    	$guarda_models->data = $request->data;
    	$guarda_models->numero = $request->numero;
    	$guarda_models->cadeia = $request->cadeia;
    	$guarda_models->save();

        $todos4 = QuardaModel::all();

    	return redirect('/')->back()->with('guarda_models', $todos4)->with('info','Salvo com sucesso');
        // return redirect()->back()->with('guarda_models', $todos4)->with('info','Salvo com sucesso');
    }	
}
