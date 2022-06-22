{{-- Issu de pdfSaisie.blade.php
Présente les données par thème (global, repro, mamelle, etc.)
 --}}

<div class="row mt-3">
  <h2>Résultats par pôle</h2>
  @foreach($themes as $theme)

    @if($affiche)
      <div class="theme theme-ok">
        <h3>{{mb_strtoupper($theme->nom)}} (OK)</h3>
      </div>

    @else

      <div class="theme theme-pb">
        <h3>{{mb_strtoupper($theme->nom)}}</h3>
        @foreach($saisie->salertes->where('danger', 1) as $sAlerte)
          @if($sAlerte->alerte->theme->id === $theme->id)
            <div class="intitule-alerte">
              <h4 class="">{{ucfirst($sAlerte->alerte->nom)}}
                <span style="color:red" >
                  @if($sAlerte->alerte->type !== "liste")
                    : {{$sAlerte->valeur}} {{$sAlerte->alerte->unite}}
                </span>
                <span style="color:darkslategrey">
                  (seuil: {{$sAlerte->alerte->niveau}} {{$sAlerte->alerte->unite}})
                </span>
                  @else
                <span style="color:red">
                  : {{$sAlerte->alerte->critalertes[$sAlerte->valeur]->nom}}
                </span>
                  @endif()
              </span>
              </h4>
              <div class="question">
                @foreach($sAlerte->sorigines as $sorigine)
                  <p style="font-weight:light">
                    {{$sorigine->origine->reponse}}
                  </p>
                @endforeach
              </div>
            </div>
          @endif
        @endforeach
      </div>

    @endif
    <br />
  @endforeach

</div>
