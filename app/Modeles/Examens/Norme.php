<?php

namespace App\Modeles\Examens;

use Illuminate\Database\Eloquent\Model;

class Norme extends Model
{
    //
    protected $table = 'normes';
    protected $fillable =['valeur_max','valeur_min','valeur_normal','sexe','tranche_age'] ;
    protected $guarded =['id_norme'];
}
