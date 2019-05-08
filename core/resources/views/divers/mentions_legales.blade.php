@extends('layouts.app')

@extends('menus.menuprincipal')

@section('contenu')

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div class="alert alert-success rounded-0">
        <h1>Mentions légales</h1>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-1">

    </div>
    <div class="col-md-10">
      <div class="alert bg-otobleu d-flex">
        <img class="mr-3 img-40" src="{{asset(config('chemins.note'))}}/count_blanc.svg" alt="">
        <h5 class="mt-2">Suivi de la fréquentation du site</h5>
      </div>
      <p>Nous avons mis en place un outil de suivi de la fréquentation de Panse-Bêtes afin de connaître l'utilisation de cet outil.</p>
      <p>Il s'agit d'un logiciel libre, nommé Matomo <a href="https://matomo.org/" title="site de Matomo"><i class="fas fa-external-link-square-alt"></i></a>, qui n'est pas intrusif, qui anonymise votre adresse IP et respecte la réglementation actuelle sur la protection de la vie privée.
       Pour plus d'information, vous pouvez consulter le site de la CNIL <a href="https://www.cnil.fr/fr/solutions-pour-les-cookies-de-mesure-daudience" title="Site de la CNIL"><i class="fas fa-external-link-square-alt"></i></a> </p>
      <p>Il vous est possible de décider de ne pas être suvi. Il vous suffit de décocher la case ci-dessous. Dans ce cas, merci de nous dire ce que vous avez pensé de Panse-Bêtes en allant au menu <a href="{{route('contact')}}">"Nous contacter"</a>.</p>
      <iframe
        style="border: 0; width: 100%;"
        src="https://panse-betes.fr/matomo/index.php?module=CoreAdminHome&action=optOut&language=fr&backgroundColor=efeded&fontColor=&fontSize=15px&fontFamily=PT%20Sans">
      </iframe>
    </div>
  </div>
</div>



@endsection
