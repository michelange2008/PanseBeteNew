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
    <div class="col-md-10">
      <h6>Suivi de la fréquentation du site</h6>
      <p>Nous avons mis en place un outil de suivi de la fréquentation de Panse-Bêtes afin de connaître l'utilisation de cet outil.</p>
      <p>Il s'agit d'un logiciel libre, nommé Matomo, qui non intrusif, qui anonymise votre adresse IP et respecte la réglementation française</p>
      <p>Pour plus d'information, vous pouvez consulter le site de la CNIL <a href="https://www.cnil.fr/fr/solutions-pour-les-cookies-de-mesure-daudience" title="Site de la CNIL"><i class="fas fa-external-link-square-alt"></i></a> </p>
      <p>Il vous est possible de décider de ne pas être suvi. Il vous suffit de décocher la case ci-dessous</p>
      <iframe
        style="border: 0; height: 200px; width: 100%;"
        src="https://panse-betes.fr/matomo/index.php?module=CoreAdminHome&action=optOut&language=fr&backgroundColor=efeded&fontColor=&fontSize=15px&fontFamily=PT%20Sans">
      </iframe>
    </div>
  </div>
</div>



@endsection
