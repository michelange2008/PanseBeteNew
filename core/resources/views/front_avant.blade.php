@extends('layouts.app')

@section('contenu')
  <div class="acces">
    <div class="acces-logo">
      <img src="{{config('chemins.images')}}otoveil.jpeg" alt="Panse-Bêtes" class="img-rounded center-block" />

    </div>
    <div class="row">
      <div class="col-lg-2"></div>
      <div class=" p-3 col-lg-8 bg-otobleu shadow">
        <h4>Attention ! dans ...</h4>
        <div id="car" class="p-2 text-center"><h3></h3></div>
        <h4 class=""><span class="color-otojaune">Panse-bêtes</span> sera opérationnel !!!</h4>
        <p></p>
        <h5>Rendez-vous le 4 juin 2019 à l'ESA d'Angers, au Colloque de restitution du casdar Otoveil <a href="http://www.itab.asso.fr/programmes/otoveil.php"> <i class='fa fa-external-link-alt'></i> </a></h5>
      </div>
    </div>
    <div class="acces-entete">
      <h2 class="">Panse bête...</h2>
      <p class="align-items-end">
        Viser l’équilibre de santé de mon troupeau
      </p>
      </h3>

    </div>
</div>
@endsection
