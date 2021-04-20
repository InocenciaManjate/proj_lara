<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
   /**
   *
   *@var array
   */

   protected $fillable =[
   	'id', 'apelido', 'nome', 'tipoCrime', 'data' , 'numero' , 'cadeia',

   ];

}
