@extends('layouts.app')


@extends('menus.menuprincipal')
@push('js')
  <script src="{{asset('js/admin.js')}}"></script>
@endpush
@push('css')
  <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
@endpush

@section('contenu')
  <div class="container-fluid">
    <div class="alert alert-success">
      <h1>Gestion des utilisateurs</h1>
    </div>
    <div class="contenu">
      <table class="table table-hover">
        <thead class="table-dark">
          <th>Nom</th>
          <th>Email</th>
          <th class="text-center">Administrateur</th>
          <th class="text-center">Modifier</th>
          <th class="text-center">Supprimer</th>
        </thead>
        <tbody>
          @foreach ($users as $user)
            <tr id="ligne_{{$user->id}}" class="{{($user->admin) ? "text-danger": ""}}">
              <td>{{$user->name}}</td>
              <td id="email_{{$user->id}}" class="modifEmail curseur">{{$user->email}}</td>
              <td id="admin_{{$user->id}}" class="text-center">{{($user->admin) ? "OUI" : "NON"}}</td>
              <td id="modifier_{{$user->id}}" class="modifier cell-delmod curseur">
                <img src="{{URL::asset('svg')}}/modifie.svg" alt="Modifier" title="Modifier cet utilisateur">
              </td>
              <td id="moins_{{$user->id}}" class="supprimer cell-delmod curseur" title="Supprimer cet utilisateur">
                <img src="{{URL::asset('svg')}}/moins.svg" alt="Supprimer">
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div id="plus" class="d-flex justify-content-end curseur">
      <img src="{{URL::asset('svg')}}/plus_rond.svg" alt="Ajouter" title="Ajouter un utilisateur">
    </div>
  </div>
@endsection
