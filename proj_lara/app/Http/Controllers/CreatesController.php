<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\QuardaModel;

class CreatesController extends Controller
{
    public function home(){
    	$articles = Article::all();
        $guarda_models = QuardaModel::all();
    	// return view('home')->with('articles',$articles);

        return view('home')->with('articles',$articles)->with('guarda_models',$guarda_models);
}


    public function add(Request $request){

    	$articles = new Article();
    	$articles->apelido = $request->apelido;
    	$articles->nome = $request->nome;
    	$articles->tipoCrime = $request->tipoCrime;
    	$articles->data = $request->data;
    	$articles->numero = $request->numero;
    	$articles->cadeia = $request->cadeia;
    	$articles->save();

        $todos = Article::all();
    	return redirect('/')->with('articles', $todos)->with('info','Salvo com sucesso');
        // return redirect()->back()->with('articles', $todos)->with('info','Salvo com sucesso');
    }	
}
