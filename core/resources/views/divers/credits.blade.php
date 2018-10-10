@extends('layouts.app')

@extends('menus.menuprincipal')

@section('contenu')
<div class="container">
  <h5>Le CASDAR OTOVEIL, fruit d'un projet collectif</h5>
</div>
<div class="ziehharmonika">
  <h3>Chef de projet</h3>
  <div>
    <p><span class="font-weight-bold">Catherine EXPERTON</span> - ITAB</p>
</div>
  <h3>Coordination de la rédaction des livrets</h3>
  <div>
    <p>
      <span class="font-weight-bold">Thierry MOUCHARD</span> - ITAB
    </p>
  </div>
  <h6>Ont participé à la rédaction, aux relectures et aux tests de ce document:</h6>
  @foreach($especes as $espece)

    <h3>{{$espece->nom}}</h3>
    <div>
        @foreach($participants as $participant)

          @foreach($participant->especes as $especeParticipant)

            @if($especeParticipant->id == $espece->id)

            <p>
              <span class="font-weight-bold">{{$participant->nom}}</span> ({{trim($participant->institution)}})
            </p>

            @endif

          @endforeach

        @endforeach
    </div>
  @endforeach
  <div>
    <p>
      Des méthodes pour la prévention et la surveillance des troupeaux, adaptées à l’AB et transposables en élevage conventionnel, étaient attendues à la fin du projet.
    </p>

  </div>
  <div class="container d-flex justify-content-end" style="border:none;padding:0">
    <a href="{{URL::route('accueil')}}" class="btn btn-secondary text-light rounded-0">retour</a>
  </div>
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
