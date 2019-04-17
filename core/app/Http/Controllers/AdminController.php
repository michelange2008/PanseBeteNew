<?php

namespace App\Http\Controllers;

use App\Models\Espece;
use App\Models\User;
use App\Models\Saisie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
      // accès limité aux administrateurs
      $this->middleware('isAdmin');
    }

    public function index()
    {
      $users =User::orderBy('admin', 'desc')->get();
      $saisies_groupees = Saisie::all()->mapToGroups(function($item, $key) {
        return [$item['user_id'] => $item['id']];
      });
      $users_saisies = $saisies_groupees->keys();

      foreach ($users as $user) {

        if(!$users_saisies->contains($user->id))
        {
          $saisies_groupees->put($user->id, collect([]));
        }
      }
      return view('admin.admin', [
        'users' => $users,
        'saisies_groupees' => $saisies_groupees,
      ]);

    }

}
