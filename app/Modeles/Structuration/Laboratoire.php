<?php

namespace App\Modeles\Structuration;

use Illuminate\Database\Eloquent\Model;

class Laboratoire extends Model
{
    //
    protected $table = 'laboratoires';
    protected $fillable ['nom_labo'] ;
      protected $guarded =['id_labo'];
}
