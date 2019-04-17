<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Mail\Accepte;
use App\Mail\Refuse;
use Mail;
use App\Models\Espece;
use App\Models\User;
use App\Models\Saisie;
use App\Models\Inscription;

class UserController extends Controller
{

  public function __construct()
  {
    $this->middleware('isAdmin');
  }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        return view('admin/admin', [
          'users' => $users,
          'saisies_groupees' => $saisies_groupees,
        ]);
      }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return redirect()->route('utilisateur.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datas = $request->all();
        $user = new User();
        $user->name = $datas['nom'];
        $user->email = $datas['email'];
        $user->password = bcrypt($datas['mdp']);
        $user->save();
        return response()->json([
          "id" => $user->id,
          "nom" => $user->name,
          "email" => $user->email
        ]);
    }

    // tranferre une inscription dans la base des utilisateurs
    public function transferre(Request $request)
    {
      $datas = $request->all();
      // retourver le mot de passe de l'inscription
      $inscription = Inscription::find($datas['id']);

      // vérifier que ce email n'existe pas dans la base de donnée
      if(User::where('email', $datas['email'])->count() == 0) {
        $user = User::create([
          'name' => $datas['nom'],
          'email' => $datas['email'],
          'password' => $inscription->mdp,
        ]);

        $user->save();

        Mail::to($user)
                ->bcc(auth()->user())
                ->send(new Accepte($user));

        Inscription::destroy($datas['id']);

        return response()->json([
          "id" => $user->id,
        ]);
      } else {
        return response()->json([
          "id" => "estDeja",
          "message" => "Un utilisateur avec l'email ".$datas['email']." existe déjà.",
        ]);
      }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect()->route('utilisateur.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      return redirect()->route('utilisateur.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $datas = $request->all();
      $user = User::find($id);
      $user->name = $datas['nom'];
      $user->email = $datas['email'];
      $user->save();
      return response()->json([
        "id" => $user->id,
      ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);

        return response()->json(['message' => 'OK']);
    }

    public function tousSauf($id)
    {
      $users = User::select('id', 'name')->where('id', '!=', $id)->get();

      return response()->json(json_encode($users));
    }

    public function changeSaisieUser($ancien_user_id, $nouveau_user_id)
    {
      $saisies = Saisie::where('user_id', $ancien_user_id)->get();
      foreach ($saisies as $saisie) {
        $saisie->user_id = $nouveau_user_id;
        $saisie->save();
      }

      return response()->json(["nombre_saisies" => Saisie::where('user_id', $nouveau_user_id)->count()]);
    }
}
