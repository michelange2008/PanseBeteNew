<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chiffre extends Model
{
    use HasFactory;

    protected $guarded = []; 

    public $timestamps = false;

    public function numalerte()
    {
      return $this->hasMany(Numalerte::class);
    }
}
