<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salerte extends Model
{

    protected $table = 'salertes';
    public $timestamps = false;
    protected $fillable = array('saisie_id', 'alerte_id', 'valeur', 'danger');

    public function saisie()
    {
        return $this->belongsTo(Saisie::class);
    }

    public function alerte()
    {
        return $this->belongsTo(Alerte::class);
    }

    public function sorigines()
    {
        return $this->hasMany(Sorigine::class);
    }

}
