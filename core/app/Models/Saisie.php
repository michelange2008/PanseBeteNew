<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Saisie extends Model
{
    protected $table = 'saisies';
    
    public $timestamps = true;
    
    protected $fillable = ['user_id'];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function salertes()
    {
        return $this->hasMany(Salerte::class);
    }
}
