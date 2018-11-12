<?php

namespace App\Modeles\Examens;

use Illuminate\Database\Eloquent\Model;

class Resultat_norme extends Model
{
    //
    protected $table = 'resultat_normes';
    protected $fillable ['detail','valeur'] ;
    protected $guarded =['id_rn'];
}
