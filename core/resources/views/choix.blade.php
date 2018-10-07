@extends('layouts.app')

@extends('menus.menuprincipal')

@extends('menus.sousmenu')

@section('contenu')

<div class="container-fluid">

  <div class="card d-flex flex-row">
    <div class="col-3 d-flex flex-column justify-content-center" style="padding:0">
        <img class="card-img-top" src="{{URL::asset('svg')}}/saisie.svg" alt="Card image cap">
    </div>
    <div class="card-body d-flex flex-column">
        <p class="card-text">Vous êtes prêts pour l'utilisation de Panse-bête... </p>
        <div class="col-12 d-flex justify-content-end align-items-baseline">
            <a href="{{route('saisie.nouvelle')}}" class="btn btn-lg bg-otobleu rounded-0 text-light">
                <h6>nouvelle saisie</h6>
            </a>
        </div>
    </div>
  </div>
  <br />
  <div class="card d-flex flex-row">
    <div class="col-3 d-flex flex-column justify-content-center" style="padding:0">
        <img class="card-img-top" src="{{URL::asset('svg')}}/lecture.svg" alt="Card image cap">
    </div>
    @if($nbSaisies > 0)
    <div class="card-body d-flex flex-column">
        <p class="card-text">Vous souhaitez revoir vos saisies précédentes&nbsp? </p>
        <div class="col-12 d-flex justify-content-end align-items-baseline">
            <a href="{{route('lecture.liste')}}" class="btn btn-lg bg-otorange rounded-0 text-light">
                <h6>lecture ({{$nbSaisies}} saisies)</h6>
            </a>
        </div>
    </div>
    @else
    <div class="card-body d-flex flex-column">
        <p class="card-text">il n'y a pas encore de saisie </p>
        <div class="col-12 d-flex justify-content-end align-items-baseline">
            <a class="btn btn-lg rounded-0 text-light">
                <h6>Aucune saisie à voir</h6>
            </a>
        </div>
    </div>
    @endif
  </div>

</div>
@endsection()
