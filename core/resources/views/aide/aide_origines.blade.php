@section('aide')
<div id="{{$page}}" class="aide-bouton"></div>

<div class="aide-contenu ">

  <div id="texte-d-1" class="aide-contenu-container">
    <div class="close" style="font-size:2rem">
      <i class="fas fa-window-close "></i>
    </div>
    <div class="aide-contenu-texte bg-aide-trans">
      <h3>Liste des origines</h3>
      <p>Cette page liste toutes les origines de problème que vous avez cochées lors de la saisie</p>
      <p>Ils vous est possible de réorganiser cette liste pour mettre ensemble les éléments qui correspondent à un meme problème</p>
      <p>Pour cela vous pouvez cliquer-glisser chaque ligne vers le bas ou vers le haut</p>
      <div class="d-flex justify-content-center">
        <img class="aide-deplacement shadow" src="{{URL::asset(config('fichiers.images'))}}/deplacement.png" alt="déplacement">
      </div>
      <p>Pour faire des groupe, il suffit de glisser une ligne vers la droite. En la glissant vers la gauche, on sort la ligne du groupe</p>
      <p>A vous de jouer !</p>
    </div>
  </div>

</div>

@endsection
