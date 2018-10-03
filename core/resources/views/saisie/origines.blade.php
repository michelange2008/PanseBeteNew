@extends('layouts.app')

@extends('menus.sousmenu')

@section('contenu')
<div class="container-fluid bg-success titre">
  <img src="{{URL::asset('svg/saisie')}}/origine.svg" alt="origine" class="">
  <div>
    <h5>{{ucfirst(session()->get('alerte')->nom)}}</h5>
    <p>
      (d'où cela peut-il venir ?)
    </p>
  </div>
</div>

@endsection
