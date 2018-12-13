<?php

namespace App\Modeles\Reactif;

use Illuminate\Database\Eloquent\Model;


class Reactif extends Model
{
    //
    protected $table = 'reactifs';
    protected $fillable =['nom_reactif','valeur_min','valeur_max'] ;
    //protected $guarded =['id_reactif'];
}
