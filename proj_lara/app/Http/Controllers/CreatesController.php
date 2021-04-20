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
    	$this->validate($request,[
         'apelido'=> 'required',
         'nome'=> 'required',
         'tipoCrime'=> 'required',
         'data'=> 'required',
         'numero'=> 'required',
         'cadeia'=> 'required'

    	]);

    	$articles = new Article;
    	$articles ->apelido = $request-> input('apelido');
    	$articles ->nome = $request-> input('nome');
    	$articles ->tipoCrime = $request-> input('tipoCrime');
    	$articles ->data = $request-> input('data');
    	$articles ->numero = $request-> input('numero');
    	$articles ->cadeia = $request-> input('cadeia');
    	$articles ->save();
    	return redirect('/')->with('info','Salvo com sucesso');
    }	
}
