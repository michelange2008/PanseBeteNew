<?php

namespace App\Http\Controllers;

use App\Models\Espece;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
      if(!Auth::user()->admin)
      {
        return view('accueil', [
          'especes' => Espece::all(),
        ]);
      }
      else
      {
        return view('admin/admin', [
          'users' => User::orderBy('admin', 'desc')->get(),
        ]);
      }

    }
}
