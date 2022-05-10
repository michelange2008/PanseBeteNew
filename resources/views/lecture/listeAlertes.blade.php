{{-- issu de salertes.blade.php --}}
<div  id="origine_{{ $theme->id }}" class="non-affiche">
  @foreach($saisie->salertes as $sAlerte)
    @if($sAlerte->alerte->theme->id === $theme->id && $sAlerte->danger)
      <input type="hidden" id="route_{{$sAlerte->id}}" action ="{{route('lecture.observations', $sAlerte->id)}}" />
      <div class="panneau-alerte alert alert-dark bg-otojaune rounded-0">
        <div class="intitule-alerte">
          <p class="">{{$sAlerte->alerte->nom}}</p>
        </div>
        <div class="element-alerte justify-content-between">
          <div class="d-flex">

            <p>
              @if($sAlerte->alerte->type === 'liste')
                <span class="text-danger font-weight-bold">
                  <?php
                  foreach($sAlerte->alerte->critalertes as $crit)
                  {
                    if($crit->valeur == $sAlerte->borne_sup)
                    echo $crit->nom;
                  }
                  ?>
                </span>
              @else
                <span class="font-weight-bold">{{$sAlerte->valeur}} {{$sAlerte->alerte->unite}}</span>
              @endif
            </p>
            @if($sAlerte->alerte->type !== 'liste')
              <p>
                @if($sAlerte->alerte->borne_sup === 0)
                  &nbsp&nbsp({{$sAlerte->alerte->borne_sup}} {{$sAlerte->alerte->unite}})
                @else
                  @if($sAlerte->alerte->modalites === 'inverse')
                    &nbsp&nbsp( > {{$sAlerte->alerte->borne_sup}} {{$sAlerte->alerte->unite}})
                  @else
                    &nbsp&nbsp( < {{$sAlerte->alerte->borne_sup}} {{$sAlerte->alerte->unite}})
                  @endif
                @endif
              </p>
            @endif
          </div>
          <img id = "icone-origine_{{$saisie->id}}_{{$sAlerte->id}}" src="{{asset(config('chemins.saisie'))}}/oeil.svg" alt="origine" class="affiche-origine otoveil curseur" />
        </div>

      </div>

    @endif

  @endforeach

</div>
