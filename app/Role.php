<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
  public function users()
  {
  return $this->belongsToMany(User::class);
  }
}
//Fournissons maintenant une relation plusieurs-à-plusieurs entre utilisateur et rôle .
