<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class VisiteurController extends Controller
{
  public function index()
  {
    return view('admin.inscription');
  }

  public function envoi(Request $request)
  {
    $datas = request()->validate([
      'nom' => 'required|max:191',
      'email' => 'required|email|max:191|unique:users',
      'mot_de_passe' => 'required|min:6',
      'retapez_votre_mot_de_passe' => 'required|min:6|same:mot_de_passe',
      'profession' => 'max:191',
      'region' => 'max:191',
      'captcha' => 'required|in:agriculture biologique, agriculture bio',
    ]);
    $datas['profession'] = (array_key_exists('profession', $datas) && $datas['profession'] != "Votre profession ?") ? $datas['profession'] : "non précisé";
    $datas['region'] = (array_key_exists('region', $datas) && $datas['region'] != "Votre région ?") ? $datas['region'] : "non précisé";

    if(User::where('email', $datas['email'])->count() == 0) {
      $nouveau = User::firstOrCreate([
        'name' => $datas['nom'],
        'email' => $datas['email'],
        'password' => bcrypt($datas['mot_de_passe']),
        'profession' => $datas['profession'],
        'region' => $datas['region'],
        'valide' => 0,
      ]);

      $message = "Nous avons bien enregistré votre demande, nous allons vous répondre dès que possible";
      return view('admin.reception')->with(['message' => $message]);
    } else {
      $message = "Une demande avec cette adresse mail a déjà été faite. Ne vous inquiétez pas, nous allons vous répondre dès que possible";
      return view('admin.reception')->with(['error' => $message]);
    }
  }

  public function afficheNonValide()
  {
    $message = "Une demande avec cette adresse mail a déjà été faite. Ne vous inquiétez pas, nous allons vous répondre dès que possible";
    return view('admin.reception')->with(['error' => $message]);
  }

  public function presentation()
  {
    return view('divers.video', [
      'theme' => 'PBpresentation',
      'bouton' => "retour à l'accueil",
      'route' => 'front'
    ]);
  }
}
