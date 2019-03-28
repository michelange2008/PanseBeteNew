<?php

namespace App\Http\Controllers;

use App\Models\Espece;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function __construct()
    {
      $this->middleware('isAdmin');
    }

    public function index()
    {
      return redirect('utilisateur');
    }
}
