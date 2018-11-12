<?php

namespace App\Modeles\Examens;

use Illuminate\Database\Eloquent\Model;

class Resultat_multi_colonne extends Model
{
    //
    protected $table = 'resultat_multi_colonnes';
    protected $fillable ['detail','valeur','item1','item2','item2','item3'] ;
    protected $guarded =['id_rmc'];
}
