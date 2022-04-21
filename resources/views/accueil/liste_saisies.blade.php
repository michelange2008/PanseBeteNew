<div class="row justify-content-center">
  <div class="col-md-10">
    <div>
      @foreach ($saisies as $saisie)
        <div class="alert alert-secondary pb-0">
          <div class="d-flex flex-row align-items-start">
            <img src="{{ 'storage/img/especes/'.$saisie->espece->icone }}" alt="">
            <div class="saisie-info d-flex flex-column">
              <h5 class="attention">{{$saisie->elevage->nom}}</h5>
              <!-- information sur la saisie: date et nombre d'alertes s'il y en a -->
              <p><em>({{$saisie->created_at->day}} {{$saisie->created_at->locale('fr')->monthName}} {{$saisie->created_at->year}})</em>
                @if ($saisie->salertes->count() === 0)
                  Pas d'alerte</p>
                @elseif ($saisie->salertes->count() === 1)
                  <strong>{{$saisie->salertes->count()}} alerte</strong>
                @else
                  <strong>{{$saisie->salertes->count()}} alertes</strong>
                @endif
              </div>
            </div>
            <!-- Boutons: supprimer, pdf, voir, modifier -->
            <div class="d-flex flex-row justify-content-between mb-2 mt-2">
              <div class="d-flex flex-column justify-content-center">
                <a id="supprime_{{$saisie->id}}" href="{{route('lecture.supprimer', $saisie->id)}}" class=" supprime justify-self-end btn btn-sm btn-otorange rounded-0"><i class="far fa-trash-alt"></i> Suppr.</a>
              </div>
              <div>
                @if($saisie->salertes->count() > 0)
                    <a href="{{route('pdf', $saisie->id)}}" target="_blank" class="btn btn-sm btn-danger rounded-0 m-1">
                      <span class="smartphone-only"><i class="far fa-file-pdf"></i> pdf</span>
                      <span class="desktop-only"><i class="far fa-file-pdf"></i> Afficher le pdf</span>
                    </a>
                    <a href="{{route('lecture.detail', $saisie->id)}}" class="btn btn-sm btn-otobleu rounded-0 m-1">
                      <span class="smartphone-only"><i class="far fa-eye"></i> Voir</span>
                      <span class="desktop-only"><i class="far fa-eye"></i> Voir la synthèse</span>
                @endif
                <a href="{{route('saisie.modifier', $saisie->id)}}" class="btn btn-sm btn-otojaune rounded-0 m-1">
                  <span class="smartphone-only"><i class="fa fa-pencil-alt"></i> Modifier</span>
                  <span class="desktop-only"><i class="fa fa-pencil-alt"></i> Modifier la saisie</span>
                </a>
              </div>
            </div>
          </div>
        @endforeach

  </div>
</div>
</div>
