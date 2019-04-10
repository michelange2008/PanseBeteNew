@section('aide')
<div id="{{$page}}" class="aide-bouton"></div>

<div class="aide-contenu aide-contenu-saisie">
  <div id="texte-d-1" class="desktop-only aide-contenu-container acc-saisie">
    <p class="aide-contenu-chiffre bg-aide-trans">1</p>
    <div class="aide-contenu-texte bg-aide-trans">
      <p>Il y a 6 à 7 pôles d'observation. Vous pouvez tous les passer en revue les uns après les autres ou simplement ceux qui vous intéressent.</p>
      <p>Pour cela, il suffit de cliquer sur le titre du pôle que l'on veut explorer.</p>
      <p>Il est tout de même nécessaire dans tous les cas de commencer par le premier pôle: </p>
      <p class="bg-otobleu"><img class="aide-icones" src="{{config('fichiers.saisie')}}global.svg" alt="global"> Regard global sur le troupeau</p>
    </div>


</div>

@endsection
