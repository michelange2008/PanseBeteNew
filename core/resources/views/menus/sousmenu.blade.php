@section('sousmenu')
@if(session()->get('espece'))
  <div class="espece-item bg-light d-flex flex-row justify-content-between">
    <div>
      <a href="{{route('accueil')}}"><img src="{{URL::asset('svg/especes')."/".session()->get('espece')->icone}}" alt="{{session()->get('espece')->nom}}" /></a>
      <h5 class="btn -btn-light btn-inactiv">{{session()->get('espece')->nom}}</h5>
    </div>
    <div class="d-flex flex-column justify-content-between">
      <a class="lien-nav" href="{{URL::route('accueil')}}"><img class = "icone-nav" src="{{URL::asset('/svg')}}/home.svg" alt="accueil" title="accueil" /></a>
      <a class="lien-nav" href="{{URL::previous()}}"><img class = "icone-nav" src="{{URL::asset('/svg')}}/retour.svg" alt="retour" title="page précédente" /></a>
    </div>
  </div>
@else()
  <div class="espece-item bg-light d-flex flex-row">
    <h5 class="btn -btn-light btn-inactiv">Retour</h5>
    <a href="{{URL::route('accueil')}}"><img src="{{URL::asset('/svg')}}/home.svg" alt="accueil" title="accueil" /></a>
  </div>
@endif()

@endsection()
