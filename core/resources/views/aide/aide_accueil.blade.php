@section('aide')
<div id="{{$page}}" class="aide-bouton"></div>

<div class="aide-contenu ">

  <div id="texte-d-1" class="desktop-only aide-contenu-container">
    <p class="aide-contenu-chiffre bg-aide-trans">1</p>
    <div class="close" style="font-size:2rem">
      <i class="fas fa-window-close "></i>
    </div>
    <div class="aide-contenu-texte bg-aide-trans">
      <h3>Nouvelle grille</h3>
      <p>Si vous voulez travailler sur une nouvelle grille, cliquez sur l'icone correspondant au type de troupeau</p>
      <div class="d-flex flex-row justify-content-around ">
        @foreach($especes as $espece)
        <img class="aide-icones shadow" src="{{config('fichiers.especes').$espece->icone}}" alt="">
        @endforeach
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
      <p>Vous pouvez aussi travailler sur des grilles existantes:</p>
      <p>les <span class="bg-otorange aide-petit-bouton"> <i class='far fa-trash-alt'></i> supprimer </span> </p>
      <p>les <span class='bg-otobleu aide-petit-bouton'> <i class="far fa-eye"></i> Voir </span> </p>
      <p>les <span class="bg-otojaune aide-petit-bouton"> <i class="fa fa-pencil-alt"></i> Modifier </span> </p>
      <p>ou rouvrir le pdf <span style="font-size: 2rem; color:red"><i class="far fa-file-pdf"></i></span></p>
      <p></p>
      <div class="d-flex justify-content-end">
        <button id="affiche-texte-d-1" class="btn btn-otorange aide-contenu-texte-plus font-italic"><i class="fa fa-angle-double-left"></i> précédent</button>
      </div>
    </div>
  </div>
</div>

<div class="aide-contenu ">
  <div id="texte-s-1" class="smartphone-only aide-contenu-container">
    <p class="aide-contenu-chiffre bg-aide-trans">1</p>
    <div class="close" style="font-size:2rem">
      <i class="fas fa-window-close"></i>
    </div>
    <div class="aide-contenu-texte smartphone-only bg-aide-trans">
      <h3>Nouvelle grille</h3>
      <p>Si vous voulez travailler sur une nouvelle grille, cliquez sur le bouton</p>
      <div class="d-flex justify-content-center"><img src="{{config('fichiers.images')}}plus_rond_bord_blanc.svg" alt=""></div>
      <p>en bas à droite.</p>
      <p>Puis, choisissez l'icone correspondant au type de troupeau.</p>
      <div class="d-flex flex-row justify-content-around">
        @foreach($especes as $espece)
        <img class="aide-icones" src="{{config('fichiers.especes').$espece->icone}}" alt="">
        @endforeach
      </div>
      <p></p>
      <div class="d-flex justify-content-end">
        <button id="affiche-texte-s-2" class="btn btn-otorange aide-contenu-texte-plus font-italic curseur">suite <i class="fa fa-angle-double-right"></i></button>
      </div>
    </div>
  </div>

  <div id="texte-s-2" class="smartphone-only aide-contenu-container">
    <p class="aide-contenu-chiffre bg-aide-trans">2</p>
    <div class="close" style="font-size:2rem">
      <i class="fas fa-window-close"></i>
    </div>
    <div class="aide-contenu-texte smartphone-only bg-aide-trans text-light">
      <p>Vous pouvez aussi travailler sur des grilles existantes:</p>
      <p>les <span class="bg-otorange aide-petit-bouton"> <i class='far fa-trash-alt'></i> supprimer </span> </p>
      <p>les <span class='bg-otobleu aide-petit-bouton'> <i class="far fa-eye"></i> Voir </span> </p>
      <p>les <span class="bg-otojaune aide-petit-bouton"> <i class="fa fa-pencil-alt"></i> Modifier </span> </p>
      <p>ou rouvrir le pdf <span style="font-size: 2rem; color:red"><i class="far fa-file-pdf"></i></span></p>
      <p></p>
      <div class="d-flex justify-content-end">
        <button id="affiche-texte-s-1" class="btn btn-otorange aide-contenu-texte-plus font-italic"><i class="fa fa-angle-double-left"></i> précédent</button>
      </div>
    </div>
  </div>
</div>


@endsection
