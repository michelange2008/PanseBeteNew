<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Espece extends Model
{

    protected $table = 'especes';
    public $timestamps = true;
    protected $fillable = array('nom', 'icone');

    public function alertes()
    {
        return $this->hasMany(Alerte::class);
    }

    public function participants()
    {
      return $this->belongsToMany(Participant::class);
    }

}
