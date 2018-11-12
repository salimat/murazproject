<?php

namespace App\Modeles\Examens;

use Illuminate\Database\Eloquent\Model;

class Type_prelevement extends Model
{
    //
    protected $table = 'type_prelevements';
    protected $fillable ['nom_prelevement'] ;
    protected $guarded =['id_type_prelevement'];
}
