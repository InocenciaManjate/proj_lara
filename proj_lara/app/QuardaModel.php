<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QuardaModel extends Model
{/**
   *
   *@var array
   */

   protected $fillable =[
   	'id', 'apelido', 'nome', 'data' , 'numero' , 'cadeia',

   ];
}
