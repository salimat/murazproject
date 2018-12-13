<?php

namespace App\Modeles\Examens;

use Illuminate\Database\Eloquent\Model;

class Echantillon extends Model
{
    //
    protected $table='echantillons';
    protected $fillable=['nom_echantillon' ,'type_prelevement'];
}
