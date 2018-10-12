@section('sousmenu')
@if(session()->get('espece'))
  <div class="espece-item bg-light d-flex flex-row justify-content-between">
    <div>
      <a href="{{route('lecture.liste', session()->get('espece'))}}"><img src="{{URL::asset('svg/especes')."/".session()->get('espece')->icone}}" alt="{{session()->get('espece')->nom}}" /></a>
      <h5 class="btn -btn-light btn-inactiv">{{session()->get('espece')->nom}}</h5>
    </div>
    <div class="d-flex flex-column justify-content-center">
      <a class="lien-nav" href="{{URL::route('accueil')}}"><img class = "icone-nav" src="{{URL::asset('/svg')}}/home.svg" alt="choix" title="revenir aux début" /></a>
    </div>
  </div>
@else()
  <div class="espece-item bg-light d-flex flex-row">
    <h5 class="btn -btn-light btn-inactiv">Retour</h5>
    <a href="{{URL::route('accueil')}}"><img src="{{URL::asset('/svg')}}/home.svg" alt="accueil" title="accueil" /></a>
  </div>
@endif()

@endsection()
