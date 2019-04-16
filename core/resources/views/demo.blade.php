@extends('layouts.app')

@section('contenu')
  <video controls="controls" style="width:79.5vw" poster="{{asset(config('chemins.images'))}}/otoveil_petit.jpeg" >
    <source src="{{asset(config('chemins.fichiers'))}}/demo.mp4" type="video/mp4" />
    Votre navigateur ne supporte pas le tag <video>
  </video>
@endsection
<div class="">
  <a href="{{route('front')}}">
    <button class="btn btn-otobleu rounded-0" type="button" name="button">Retour à l'accueil</button>
  </a>
</div>
