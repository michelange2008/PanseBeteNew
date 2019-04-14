@extends('layouts.app')


@extends('menus.menuprincipal')
@push('js')
  <script src="{{asset('js/admin.js')}}"></script>
@endpush

@section('contenu')
  <div id="totum" class="container-fluid">
    <div class="alert alert-success">
      <h1>Gestion des utilisateurs</h1>
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
        <tbody>
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
