<?php

namespace App\Modeles\Examens;

use Illuminate\Database\Eloquent\Model;

class Resultat_norme_calcule extends Model
{
    //
    protected $table = 'resultat_norme_calcules';
    protected $fillable ['detail','valeur','taux','valeur_calcule','valeur_absolu'] ;
    protected $guarded =['id_rnc'];
}
