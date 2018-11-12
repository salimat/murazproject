<?php

namespace App\Modeles\Assurance;

use Illuminate\Database\Eloquent\Model;

class Assurance extends Model
{
  protected $table = 'assurance';
    //on va massayene
    protected $fillable ['nom_assurance','adresse_assurance','tel_assurance','email_assurance','code_post_assurance','abreviation'] ;
    protected $guarded =['id_assurance'];
}
