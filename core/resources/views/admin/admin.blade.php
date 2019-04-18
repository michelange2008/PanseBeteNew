@extends('layouts.app')


@extends('menus.menuprincipal')
@push('js')
  <script src="{{asset(config('chemins.js'))}}/admin.js"></script>
@endpush

@section('contenu')
  @if ($users->count() > 0)
    <div class="container-fluid">
      <div class="alert alert-warning">
        <h3>Demandes d'identifiant</h3>
      </div>
      <div class="table-responsive contenu">
        <table class="table table-hover">
          <thead class="table-dark">
            <th>nom</th>
            <th>email</th>
            <th>profession</th>
            <th>région</th>
            <th class="text-center">Supprimer</th>
            <th class="text-center">Envoyer un mail</th>
            <th class="text-center">Inscrire</th>
          </thead>
          <tbody id="nonvalide">
              @foreach ($users as $user)
                @if ($user->valide == 0)
                  <tr id="ligneNonValide_{{$user->id}}" class="ligne_nonvalide">
                    <td id="nomNonValide_{{$user->id}}">{{$user->name}}</td>
                    <td id="emailNonValide_{{$user->id}}">{{$user->email}}</td>
                    <td id="professionNonValide_{{$user->id}}">{{$user->profession}}</td>
                    <td id="regionNonValide_{{$user->id}}">{{str_replace('"', '', $user->region)}}</td> <!-- fallait enlever les doubles quotes des régions -->
                    <td id="suppr_{{$user->id}}" class="destroy cell-delmod curseur">
                      <img src="{{asset(config('chemins.admin'))}}/destroy.svg" alt="destroy" title = "Inscription de robot à détruire sans poser de question">
                    </td>
                    <td id="del_{{$user->id}}" class="delete cell-delmod">
                      <a class="d-block text-center"
                      href="mailto:{{$user->email}}?subject=Votre demande d'identifiant Panse-Bêtes&body=Bonjour {{$user->nom}}">
                      <img class="img-25" src="{{asset(config('chemins.admin'))}}/question.svg" alt="On sait pas"
                      title = "Inscription qui pose problème mais à qui on va envoyer un mail">
                      </a>
                    </td>
                    <td id="ok_{{$user->id}}" class="garder cell-delmod curseur">
                      <img src="{{asset(config('chemins.admin'))}}/plus.svg" alt="Garder" title="Inscription OK à valider">
                    </td>
                  </tr>
                @endif
              @endforeach
          </tbody>
        </table>
      </div>
    </div>

  @endif
  <div id="totum" class="container-fluid">
    <div class="alert alert-success">
      <h3>Gestion des utilisateurs</h3>
    </div>
    <div class="table-responsive contenu">
      <table class="table table-hover">
        <thead class="table-dark">
          <th>Nom</th>
          <th>Email</th>
          <th class="text-center">Saisies</th>
          <th class="text-center">Administrateur</th>
          <th class="text-center">Modifier</th>
          <th class="text-center">Supprimer</th>
        </thead>
        <tbody id="user">
          @foreach ($users as $user)
            @if ($user->valide == 1)
              <tr id="ligne_{{$user->id}}" class="ligne {{($user->admin) ? "text-danger": ""}}">
                <td id="nom_{{$user->id}}" class="nom">{{$user->name}}</td>
                <td id="email_{{$user->id}}" class="modifEmail">{{$user->email}}</td>
                <td id="saisies_{{$user->id}}" class="text-center saisies">{{count($saisies_groupees[$user->id])}}</td>
                <td id="admin_{{$user->id}}" class="text-center">{{($user->admin) ? "OUI" : "NON"}}</td>
                <td id="modifier_{{$user->id}}" class="modifier cell-delmod curseur">
                  <img src="{{asset(config('chemins.admin'))}}/modifie.svg" alt="Modifier" title="Modifier cet utilisateur">
                </td>
                <td id="moins_{{$user->id}}" class="supprimer cell-delmod curseur" title="Supprimer cet utilisateur">
                  <img src="{{asset(config('chemins.admin'))}}/moins.svg" alt="Supprimer">
                </td>
              </tr>
            @endif
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="d-flex justify-content-end">
      <img id="plus" class="curseur" src="{{asset(config('chemins.admin'))}}/plus_rond.svg" alt="Ajouter" title="Ajouter un utilisateur">
    </div>
  </div>
@endsection
