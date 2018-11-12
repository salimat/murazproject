<?php

namespace App\Modeles\Facturation;

use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    //
    protected $table = 'factures';
    protected $fillable ['date_facture','net_payer'] ;
    protected $guarded =['id_facture'];
}
