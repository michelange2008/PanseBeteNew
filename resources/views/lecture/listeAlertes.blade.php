{{-- issu de salertes.blade.php
Affiche la liste des alertes pour chaque thème quand il y en a --}}

<div  id="origine_{{ $theme->id }}" class="non-affiche">

  @foreach($salertes as $salerte)

    @if($salerte->alerte->theme->id === $theme->id && $salerte->danger)

      <div class="panneau-alerte alert alert-dark bg-otojaune rounded-0 d-flex justify-content-between flex-row">

        <div class="intitule-alerte">

            <p class="">{{$salerte->alerte->nom}}</p>

            <strong>{{ $salerte->valeur }} {{ $salerte->alerte->unite }}</strong>&nbsp( {{ $salerte->norme }} )

        </div>

        @if ($salerte->nbsorigine > 0)

          <div salerte_id = {{ $salerte->id }} class="element-alerte justify-content-between affiche-origine otoveil curseur">

            <p>{{ $salerte->nbsorigine }} @lang('saisie.causes')</p>

            <img src="{{ url('storage/img/saisie/oeil.svg') }}" alt="origine" class="" />

          </div>

      @endif

    </div>

    @endif

  @endforeach

</div>
