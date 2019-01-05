<?php

namespace App\Modeles\Employes;

use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
  protected $table = 'employes';
   //protected $primaryKey= 'matricule_emp';
   //protected $primaryKey = 'matricule_emp';
    //
    protected $fillable =['name','prenom_per','date_naissance','sexe_per','contact_per',
    'adresse_per','email','date_emb','password'] ;
  //  protected $guarded =['matricule_emp'];
  public function roles()
  {
    return $this->belongsToMany(Role::class);
  }
}
