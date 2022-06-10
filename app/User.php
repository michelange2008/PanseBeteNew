<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Models\Saisie;
use App\Models\Note;
use App\Models\Paraferme;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function notes()
    {
      return $this->hasMany(Note::class);
    }

    public function saisies()
    {
      return $this->hasMany(Saisie::class);
    }

    public function parafermes()
    {
      return $this->belongsToMany(Paraferme::class)->withPivot('value');
    }

}
