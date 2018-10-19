@section('sousmenu')
@if(session()->get('espece'))
  <div class="espece-item bg-light d-flex flex-row justify-content-between">

      <a href="{{route('lecture.liste', session()->get('espece'))}}"><img src="{{URL::asset('svg/especes')."/".session()->get('espece')->icone}}" alt="{{session()->get('espece')->nom}}" title="revenir à la liste des saisies" /></a>
      <div class="sousmenu-intitule d-flex flex-column justify-content-center align-items-start" style="flex:1">
        @isset($saisie)
            <h5 class="" style="padding-bottom:0">{{ucfirst($saisie->elevage->nom)}}</h5>
        @endisset
        <p class="">{{session()->get('espece')->nom}}</p>
    </div>
    <div class="d-flex flex-column justify-content-center" style="padding-bottom:0">
      <a class="lien-nav" href="{{URL::route('accueil')}}"><img class = "icone-nav" src="{{URL::asset('/img')}}/accueil.png" alt="choix" title="revenir à l'accueil" /></a>
    </div>
  </div>
@else()
  <div class="espece-item bg-light d-flex flex-row">
    <h5 class="btn -btn-light btn-inactiv">Retour</h5>
    <a href="{{URL::route('accueil')}}"><img src="{{URL::asset('/img')}}/accueil.png" alt="accueil" title="accueil" /></a>
  </div>
@endif()

@endsection()
