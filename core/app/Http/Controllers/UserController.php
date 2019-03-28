<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Espece;
use App\Models\User;

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
        return view('admin/admin', [
          'users' => User::orderBy('admin', 'desc')->get(),
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
}
