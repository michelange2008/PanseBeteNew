<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\AsArrayObject;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\User;
/**
 * parametres descriptifs d'une ferme
 */
class Paraferme extends Model
{
    use HasFactory;

    protected $casts = [
      'liste' => AsArrayObject::class,
    ];

    protected $guarded = [];
    public $timestamps = [];

    public function users()
    {
      return $this->belongsToMany(User::class)->as('param')->withPivot('value');
    }
}
