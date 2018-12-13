<?php

namespace App\Modeles\Reactif;

use Illuminate\Database\Eloquent\Model;

class Etat_reactif extends Model
{
    //
    protected $table = 'etat_reactifs';
    protected $fillable = ['valeur_jour','date_jour','etat_jour'] ;
    protected $guarded =['id_etat'];
}
