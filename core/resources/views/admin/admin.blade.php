@extends('layouts.app')


@extends('menus.menuprincipal')
@push('js')
  <script src="{{asset(config('chemins.js'))}}/admin.js"></script>
@endpush

@section('contenu')
  @if ($inscriptions->count() > 0)
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
          <tbody id="inscription">
              @foreach ($inscriptions as $inscription)
                <tr id="ligneInsc_{{$inscription->id}}" class="ligne_inscription">
                  <td id="nomInsc_{{$inscription->id}}">{{$inscription->nom}}</td>
                  <td id="emailInsc_{{$inscription->id}}">{{$inscription->email}}</td>
                  <td id="professionInsc_{{$inscription->id}}">{{$inscription->profession}}</td>
                  <td id="regionInsc_{{$inscription->id}}">{{str_replace('"', '', $inscription->region)}}</td> <!-- fallait enlever les doubles quotes des régions -->
                  <td id="suppr_{{$inscription->id}}" class="destroy cell-delmod curseur">
                    <img src="{{asset(config('chemins.admin'))}}/destroy.svg" alt="destroy" title = "Inscription de robot à détruire sans poser de question">
                  </td>
                  <td id="del_{{$inscription->id}}" class="delete cell-delmod">
                    <a class="d-block text-center"
                        href="mailto:{{$inscription->email}}?subject=Votre demande d'identifiant Panse-Bêtes&body=Bonjour {{$inscription->nom}}">
                      <img class="img-25" src="{{asset(config('chemins.admin'))}}/question.svg" alt="On sait pas"
                          title = "Inscription qui pose problème mais à qui on va envoyer un mail">
                    </a>
                  </td>
                  <td id="ok_{{$inscription->id}}" class="garder cell-delmod curseur">
                    <img src="{{asset(config('chemins.admin'))}}/plus.svg" alt="Garder" title="Inscription OK à valider">
                  </td>
                </tr>
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
            <tr id="ligne_{{$user->id}}" class="ligne {{($user->admin) ? "text-danger": ""}}">
              <td id="nom_{{$user->id}}" class="nom">{{$user->name}}</td>
              <td id="email_{{$user->id}}" class="modifEmail curseur">{{$user->email}}</td>
              <td id="saisies_{{$user->id}}" class="text-center saisies">{{count($saisies_groupees[$user->id])}}</td>
              <td id="admin_{{$user->id}}" class="text-center">{{($user->admin) ? "OUI" : "NON"}}</td>
              <td id="modifier_{{$user->id}}" class="modifier cell-delmod curseur">
                <img src="{{asset(config('chemins.admin'))}}/modifie.svg" alt="Modifier" title="Modifier cet utilisateur">
              </td>
              <td id="moins_{{$user->id}}" class="supprimer cell-delmod curseur" title="Supprimer cet utilisateur">
                <img src="{{asset(config('chemins.admin'))}}/moins.svg" alt="Supprimer">
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="d-flex justify-content-end">
      <img id="plus" class="curseur" src="{{asset(config('chemins.admin'))}}/plus_rond.svg" alt="Ajouter" title="Ajouter un utilisateur">
    </div>
  </div>
@endsection
