<?php

namespace App\Modeles\Structuration;

use Illuminate\Database\Eloquent\Model;
use App\Modeles\Structuration\Laboratoire;

class Departement extends Model
{
    //
    protected $table = 'departements';
    protected $fillable = ['nom_departement'] ;

    public function laboratoires()
   {

       return $this->hasMany(Laboratoire::class);

   }


}
