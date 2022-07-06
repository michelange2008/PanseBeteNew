<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = ['nom'];

    public $timestamps = false;

    public function alertes()
    {
      return $this->hasMany(Origine::class);
    }

}
