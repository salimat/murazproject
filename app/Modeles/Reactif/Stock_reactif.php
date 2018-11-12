<?php

namespace App\Modeles\Reactif;

use Illuminate\Database\Eloquent\Model;

class Stock_reactif extends Model
{
    //
    protected $table = 'stock_reactifs';
    protected $fillable ['valeur_initiale','valeur_restante','date_stockage'] ;
      protected $guarded =['id_stock_reactif'];
}
