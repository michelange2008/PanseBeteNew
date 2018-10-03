@extends('layouts.app')


@extends('menus.menuprincipal')

@section('contenu')

<div class="container-fluid" >
<h5>ACCUEIL</h5>
<p>
Hae duae provinciae bello quondam piratico catervis mixtae praedonum a Servilio pro consule missae sub iugum factae sunt vectigales. et hae quidem regiones velut in prominenti terrarum lingua positae ob orbe eoo monte Amano disparantur.
</p>
<div>
  @foreach($especes as $espece)
  <div class="espece-item bg-light">
    <img src="{{URL::asset('svg/especes')."/".$espece->icone}}" alt="{{$espece->nom}}" />
    <a href="{{route('choix', ['espece_id' => $espece->id])}}" class="btn btn-light">{{$espece->nom}}</a>
  </div>
  @endforeach()

</div>

</div>
@endsection()
