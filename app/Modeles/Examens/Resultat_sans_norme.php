<?php

namespace App\Modeles\Examens;

use Illuminate\Database\Eloquent\Model;

class Resultat_sans_norme extends Model
{
    //
    resultat_sans_normes
    protected $fillable ['detail','valeur'] ;
    protected $guarded =['id_rsn'];

}
