@section('aide')
<div id="{{$page}}" class="aide-bouton">
</div>
<!-- <img id="aide-image" class="" src="{{URL::asset('svg/aide').'/'.$page.'.svg'}}" alt=""> -->
<div class="aide-contenu">

  <div id="texte-1" class="aide-contenu-container">
<!-- nombre -->
    <p class="aide-contenu-chiffre bg-otobleu-trans">1</p>
<!-- affichage desktop-->
    <div class="aide-contenu-texte desktop-only bg-otobleu-trans">
      <p>Si vous voulez travailler sur une nouvelle grille, cliquez sur l'icone correspondant au type de troupeau</p>
      <div class="d-flex flex-row justify-content-around">
        @foreach($especes as $espece)
        <img class="aide-icones" src="{{config('fichiers.especes').'/'.$espece->icone}}" alt="">
        @endforeach
      </div>
    </div>
<!-- affichage smartphone -->
    <div class="aide-contenu-texte smartphone-only bg-otobleu-trans">
      <p>Si vous voulez travailler sur une nouvelle grille, cliquez sur le bouton</p>
      <div class="d-flex justify-content-center"><img src="{{config('fichiers.images')}}/plus_rond_bord_blanc.svg" alt=""></div>
      <p>en bas à droite.</p>
      <p>Puis, choisissez l'icone correspondant au type de troupeau.</p>
      <div class="d-flex flex-row justify-content-around">
        @foreach($especes as $espece)
        <img class="aide-icones" src="{{config('fichiers.especes').'/'.$espece->icone}}" alt="">
        @endforeach
      </div>
      <p></p>
      <div class="d-flex justify-content-end">
        <button id="affiche-texte-2" class="btn btn-otorange aide-contenu-texte-plus font-italic curseur">suite <i class="fa fa-angle-double-right"></i></button>
      </div>
    </div>
  <div id="texte-2" class="aide-contenu-container">
    <p class="aide-contenu-chiffre bg-otorange">2</p>
    <div class="aide-contenu-texte smartphone-only bg-otobleu-trans text-light">
      <p>Vous pouvez aussi travailler sur des grilles existantes:</p>
      <p>les <span class="bg-otorange"> <i class='far fa-trash-alt'></i> supprimer </span> </p>
      <p>les <span class='bg-otobleu'> <i class="far fa-eye"></i> Voir </span> </p>
      <p>les <span class="bg-otojaune"> <i class="fa fa-pencil-alt"></i> Modifier </span> </p>
      <p>ou rouvrir le pdf <span style="color:red"><i class="far fa-file-pdf"></i></span></p>
      <p></p>
      <div class="d-flex justify-content-end">
        <button id="affiche-texte-1" class="btn btn-otorange aide-contenu-texte-plus font-italic"><i class="fa fa-angle-double-left"></i> précédent</button>
      </div>
    </div>
  </div>
  </div>
</div>
@endsection
