<?php

namespace App\Modeles\Patients;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    //
    protected $table = 'patients';
    protected $fillable =['nom_per','prenom_per','date_naissance','sexe_per','contact_per','adresse_per','email_per','code_postal_pat','age_pat','profession_pat'] ;
    protected $guarded =['id_patient'];

    public function scopeSearch($q)
 {
    return empty(request()->search) ? $q : $q->where('contact_per', 'like', '%'.request()->search.'%');
  }

  public function examens()
		{
			return $this
					->belongsToMany('App\Modeles\Examens\Examen', 'prestation_faites',
      'patients_id', 'examens_id')
      ->withPivot('datePrestation');
		}
    public function codes()
  {
      return $this->hasMany('App\Modeles\Patients\Code','codes_id','patients_id'); 
  }

}
