<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class User extends Model
{

    protected $table = 'users';
    public $timestamps = true;
    protected $fillable = array('name', 'email', 'password','profession', 'region', 'admin', 'valide');

    public function salertes()
    {
        return $this->hasMany('Salerte', 'alerte_id');
    }

    public function slistes()
    {
        return $this->hasMany(Saisie::Class);
    }

    public function isAdmin()
    {
      if($user->isAdmin == 1)
      {
        return true;
      }
      else {
        return false;
      }
    }

    public function notes()
    {
        return $this->hasMany(Notes::class);
    }

    public function parafermes()
    {
      return $this->belongsToMany(Paraferme::class)
                  ->as('param')
                  ->withPivot('value');
    }
    public function saisies()
    {
      return $this->hasMany(Saisie::class);
    }

    public function amis()
    {
      return $this->hasMany(Ami::class);
    }

}
