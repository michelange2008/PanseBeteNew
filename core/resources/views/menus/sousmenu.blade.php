@section('sousmenu')
@if(session()->get('espece'))
  <div class="espece-item bg-light d-flex flex-row justify-content-between">

      <a href="{{route('lecture.liste', session()->get('espece'))}}"><img src="{{URL::asset('svg/especes')."/".session()->get('espece')->icone}}" alt="{{session()->get('espece')->nom}}" title="revenir à la liste des saisies" /></a>
      <div class="d-flex flex-column justify-content-center align-items-start">
        @if(session()->has('elevage'))
        <h5 class="btn -btn-light btn-inactiv">{{session()->get('elevage')->nom}}</h5>
        @endif
        <p class="btn -btn-light btn-inactiv">{{session()->get('espece')->nom}}</p>
    </div>
    <div class="d-flex flex-column justify-content-center">
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
