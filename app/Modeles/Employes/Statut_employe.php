<?php

namespace App\Modeles\Employes;

use Illuminate\Database\Eloquent\Model;

class Statut_employe extends Model
{
  protected $table = 'statut_employes';
    //
    protected $fillable =['nom_statut_emp'] ;
    protected $guarded =['id_statut_emp'];
}
