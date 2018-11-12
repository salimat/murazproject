<?php

namespace App\Modeles\Examens;

use Illuminate\Database\Eloquent\Model;

class Unite_mesure extends Model
{
    //
    protected $table = 'unite_mesures';
    protected $fillable ['unite','abreviation'] ;
    protected $guarded =['id_unite'];

}
