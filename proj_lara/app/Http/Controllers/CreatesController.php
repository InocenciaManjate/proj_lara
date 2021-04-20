<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class CreatesController extends Controller
{
    public function home(){
    	$articles = Article::all();
    	return view('home', ['articles'=> $articles]);
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

    	$articles = new Article();
    	$articles->apelido = $request->apelido;
    	$articles->nome = $request->nome;
    	$articles->tipoCrime = $request->tipoCrime;
    	$articles->data = $request->data;
    	$articles->numero = $request->numero;
    	$articles->cadeia = $request->cadeia;
    	$articles->save();
    	return redirect('/')->with('info','Salvo com sucesso');
    }	
}
