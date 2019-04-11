@section('aide')
<div id="{{$page}}" class="aide-bouton"></div>

<div class="aide-contenu ">

  <div id="texte-d-1" class="aide-contenu-container">
    <p class="aide-contenu-chiffre bg-aide-trans">1</p>
    <div class="close" style="font-size:2rem">
      <i class="fas fa-window-close "></i>
    </div>
    <div class="aide-contenu-texte bg-aide-trans">
      <h3>Synthèse des observations</h3>
      <p>Les pôles pour lequels aucune alerte n'a été signalée sont marqués comme ci dessous</p>
      <div class="alert detail detail-otobleu">
        <h5>Pôle sans alerte</h5>
        <div class="icones">
          <img src="{{URL::asset(config('fichiers.saisie'))}}/ok.svg" class="otoveil" alt="ok">
        </div>
      </div>
      <p>Les pôles pour lesquels vous avez signalé des alertes sont marqués en orange</p>
      <div class="alert detail detail-otorange">
        <h5>Pôle avec alerte</h5>
        <div class="icones">
          <img class="otoveil" src="{{URL::asset(config('fichiers.saisie'))}}/deplie.svg" alt="deplie">
        </div>
      </div>
      <p></p>
      <div class="d-flex justify-content-end">
        <button id="affiche-texte-d-2" class="btn btn-otorange aide-contenu-texte-plus font-italic curseur">suite <i class="fa fa-angle-double-right"></i></button>
      </div>
    </div>
  </div>

  <div id="texte-d-2" class="desktop-only aide-contenu-container">
    <p class="aide-contenu-chiffre bg-aide-trans">2</p>
    <div class="close" style="font-size:2rem">
      <i class="fas fa-window-close"></i>
    </div>
    <div class="aide-contenu-texte bg-aide-trans text-light">
      <p>Vous pouvez aussi avoir une vision globale de vos observations en cliquant sur </p>
      <p class="aide-petit-bouton bg-otojaune">Liste de origines</p>
      <p>cela vous mènera à une page où toutes les causes possibles de problème que vous avez cochées seront listées quel que soit le pôle</p>
      <p></p>
      <p>Vous pouvez aussi revenir à l'accueil en cliquant sur </p>
      <p class="aide-petit-bouton bg-otobleu">Liste de origines</p>
    <p></p>
    <div class="d-flex justify-content-end">
      <button id="affiche-texte-d-1" class="btn btn-otorange aide-contenu-texte-plus font-italic"><i class="fa fa-angle-double-left"></i> précédent</button>
    </div>
  </div>
  </div>

</div>

@endsection
