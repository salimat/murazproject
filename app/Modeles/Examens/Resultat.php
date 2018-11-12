<?php

namespace App\Modeles\Examens;

use Illuminate\Database\Eloquent\Model;

class Resultat extends Model
{
    //
    protected $table = 'resultats';
    protected $fillable ['date_resultat','heure_resultat','observation','conclusion'] ;
    protected $guarded =['id_resultat'];
}
