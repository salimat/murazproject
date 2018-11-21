<?php

namespace App\Modeles\Employes;

use Illuminate\Database\Eloquent\Model;

class Fonction extends Model
{
    //
    protected $table = 'fonctions';

    protected $fillable= ['nom_fonction'] ;
  //  protected $guarded =['id_fonction'];
}
