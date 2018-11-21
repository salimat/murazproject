<?php

namespace App\Modeles\Structuration;

use Illuminate\Database\Eloquent\Model;
use App\Modeles\Structuration\Departement;

class Laboratoire extends Model
{
    //
    protected $table = 'laboratoires';
    protected $fillable = ['nom_labo'] ;
    //  protected $guarded =['id_labo'];

    public function departement()

    {

        return $this->belongsTo(Departement::class);

    }
}
