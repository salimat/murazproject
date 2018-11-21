<?php

namespace App\Modeles\Examens;

use Illuminate\Database\Eloquent\Model;

class Materiel extends Model
{
    //
    protected $table = 'materiels';
    protected $fillable =['type_mat','nom_mat','couleur_bouchon'] ;
    protected $guarded =['id_mat'];
}
