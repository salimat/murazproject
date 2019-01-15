<?php

namespace App\Modeles\Patients;

use Illuminate\Database\Eloquent\Model;

class Code extends Model
{
  protected $table = 'codes';
  protected $fillable =['code_patient','date_code',];
    //
    public function patients()
  {
  return $this->hasOne('App\Modeles\Patients\Patient');
  }
}
