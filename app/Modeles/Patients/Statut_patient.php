<?php

namespace App\Modeles\Patients;

use Illuminate\Database\Eloquent\Model;

class Statut_patient extends Model
{
    //
    protected $table = 'statut_patients';
    protected $fillable =['nom_statut_patient'] ;
    protected $guarded =['id_statut_patient'];
}
