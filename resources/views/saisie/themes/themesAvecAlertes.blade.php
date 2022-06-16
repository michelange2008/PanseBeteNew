{{-- Issu de salertes.blade.php --}}
<div id="alert_{{$theme->id}}" class="deplie alert detail detail-otorange">

  <div class="d-flex flex-row align-items-center">

    <img class="img-40" src="{{ url('storage/img/saisie/'.$theme->icone) }}" alt="">

    <h5>{{ $theme->nom }} ({{ $theme->nb_salertes }})</h5>

  </div>

  <div class="icones">

    <img src="{{ url('storage/img/saisie/deplie.svg') }}" alt="deplie" class="icone otoveil" title="affiche les alertes" />

  </div>

</div>
