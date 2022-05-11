{{-- issu de salertes.blade.php
Affiche la liste des alertes pour chaque thème quand il y en a --}}

<div  id="origine_{{ $theme->id }}" class="non-affiche">

  @foreach($salertes as $salerte)

    @if($salerte->alerte->theme->id === $theme->id && $salerte->danger)

      <input type="hidden" id="route_{{$salerte->id}}" action ="{{route('lecture.observations', $salerte->id)}}" />

      <div class="panneau-alerte alert alert-dark bg-otojaune rounded-0">

        <div class="intitule-alerte">

          <p class="">{{$salerte->alerte->nom}}</p>

        </div>

        <div class="element-alerte justify-content-between">

          <div class="d-flex">

            <strong>{{ $salerte->valeur }} {{ $salerte->alerte->unite }}</strong>&nbsp( {{ $salerte->norme }} )

          </div>

          <img id = "icone-origine_{{$saisie->id}}_{{$salerte->id}}" src="{{asset(config('chemins.saisie'))}}/oeil.svg" alt="origine" class="affiche-origine otoveil curseur" />

        </div>

      </div>

    @endif

  @endforeach

</div>
