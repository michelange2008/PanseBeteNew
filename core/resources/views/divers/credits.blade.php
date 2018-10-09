@extends('layouts.app')

@extends('menus.menuprincipal')

@section('contenu')
<div class="container">
  <h5>Le CASDAR OTOVEIL, fruit d'un projet collectif</h5>
</div>
<div class="ziehharmonika">
  <h3>Chef de projet</h3>
  <div>
    <p>Catherine EXPERTON - ITAB</p>
</div>
  <h3>Coordination de la rédaction des livrets</h3>
  <div>
    <p>
      Thierry MOUCHARD - ITAB
    </p>
  </div>
  <h3>Des méthodes pour la prévention et la surveillance</h3>
  <div>
    <p>
      Des méthodes pour la prévention et la surveillance des troupeaux, adaptées à l’AB et transposables en élevage conventionnel, étaient attendues à la fin du projet.
    </p><p>
      C’est ce que nous présentons sous la forme de 4 livrets, un pour chaque principale espèce : bovins lait, bovins viande, ovins lait et viande et caprins.
    </p>
  </div>
</div>

<div class="container d-flex justify-content-end" style="border:none;padding:0">
  <a href="{{URL::route('accueil')}}" class="btn btn-secondary text-light rounded-0">retour</a>
</div>

@endsection


@push('js')

<script src="{{asset('js/ziehharmonika.js')}}"></script>

<script>
$(document).ready(function() {
		$('.ziehharmonika').ziehharmonika({
			collapsible: true,
			prefix: ''
		});
	});
</script>


@endpush

@push('css')

<link href="{{asset('css/ziehharmonika.css')}}" rel="stylesheet" type="text/css">

@endpush
