<?php

namespace App\Modeles\Examens;

use Illuminate\Database\Eloquent\Model;

class Composant_examen extends Model
{
    //
    protected $table = 'composant_examens';
    protected $fillable ['nom_composant'] ;
    protected $guarded =['id_composant'];
}
