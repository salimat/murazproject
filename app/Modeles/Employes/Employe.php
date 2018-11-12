<?php

namespace App\Modeles\Employes;

use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
  protected $table = 'employes';
    //
    protected $fillable ['nom_per','prenom_per','date_naissance','sexe_per','contact_per','adresse_per','mail_per','date_emb','login_emp','mot_de_passe'] ;
    protected $guarded =['matricule_emp'];
}
