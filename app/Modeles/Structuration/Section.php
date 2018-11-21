<?php

namespace App\Modeles\Structuration;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    //
    protected $table = 'sections';
    protected $fillable =['nom_section'];
    //  protected $guarded =['id_section'];
}
