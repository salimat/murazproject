<?php

namespace App\Modeles\Examens;

use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{
    //
    protected $table = 'examens';
    protected $fillable =['nom_examen','montant_examen','abreviation'] ;
    protected $guarded =['id_examen'];

    public function patients()
      {
        return $this
            ->belongsToMany('App\Modeles\Patients\Patient', 'prestation_faites',
        'patients_id', 'examens_id')
        ->withPivot('datePrestation');

      }

}
