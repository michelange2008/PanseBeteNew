<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class User extends Model 
{

    protected $table = 'users';
    public $timestamps = true;
    protected $fillable = array('name', 'email', 'password');

    public function salertes()
    {
        return $this->hasMany('Salerte', 'alerte_id');
    }
    
    public function slistes()
    {
        return $this->hasMany(Saisie::Class);
    }

}