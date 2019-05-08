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
      <iframe
        style="border: 0; height: 200px; width: 600px;"
        src="https://panse-betes.fr/matomo/index.php?module=CoreAdminHome&action=optOut&language=fr&backgroundColor=efeded&fontColor=&fontSize=15px&fontFamily=PT%20Sans">
      </iframe>
    </div>
  </div>
</div>



@endsection
