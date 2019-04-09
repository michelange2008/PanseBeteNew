@section('aide')
<div id="{{$page}}" class="aide-bouton">
</div>
<img id="aide-image" class="" src="{{URL::asset('svg/aide').'/'.$page.'.svg'}}" alt="">
<div class="aide-contenu">
  <div class="aide-contenu-texte desktop-only">
    <p>Si vous voulez travailler sur une nouvelle grille, cliquez sur l'icone correspondant au type de troupeau</p>
  </div>
  <div id="texte-1" class="aide-contenu-container">
    <p class="aide-contenu-chiffre bg-otobleu-trans">1</p>
    <div class="aide-contenu-texte smartphone-only bg-otobleu-trans">
      <p>Si vous voulez travailler sur une nouvelle grille, cliquez sur le bouton + en bas à droite.</p>
      <p>Puis, choisissez l'icone correspondant au type de troupeau.</p>
      <p id="affiche-texte-2" class="aide-contenu-texte-plus font-italic">(suite) <i class="fa fa-angle-double-right"></i></p>
    </div>
  </div>
  <div id="texte-2" class="aide-contenu-container">
    <p class="aide-contenu-chiffre bg-otorange">2</p>
    <div class="aide-contenu-texte smartphone-only bg-secondary text-light">
      <p>Vous pouvez aussi travailler sur des grille existantes:</p>
      <p>les <span class="bg-otorange"><i class='fa fa-trash-alt'></i> supprimer </span>, les <span class='bg-otobleu'> <i class="far fa-eye"> Voir </i></span> , les <span class="bg-otojaune"><i class="fa fa-pencil-alt"></i> Modifier </span> ou réimprimer le pdf <i class="far fa-file-pdf"></i></p>
      <p id="affiche-texte-1" class="aide-contenu-texte-plus font-italic">(précédent) <i class="fa fa-angle-double-left"></i></p>
    </div>
  </div>
</div>
@endsection
