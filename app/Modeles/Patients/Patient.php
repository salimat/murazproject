<?php

namespace App\Modeles\Patients;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    //
    protected $table = 'patients';
    protected $fillable =['nom_per','prenom_per','date_naissance','sexe_per','contact_per','adresse_per','email_per','code_postal_pat','age_pat','profession_pat'] ;
    protected $guarded =['id_patient'];
}
