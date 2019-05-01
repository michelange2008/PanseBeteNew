@extends('layouts.app')

@extends('menus.menuprincipal')

@extends('aide.aide_saisie')

@section('contenu')
  <div class="container-fluid">
    <div class="alert bg-otobleu">
      <h3><i class="fas fa-eye"></i> Saisie des observations</h3>
    </div>
  </div>

  @if($errors->any())

    <div class="alert alert-danger">

      <strong>Oups, nous n'avons pas pu valider votre saisie pour la raison suivante</strong>

      <ul class="list-unstyled">
        @foreach($errors->all() as $error)

          <li>
            {{ $error }}
          </li>

        @endforeach
      </ul>

    </div>

  @endif

  <div class="container-fluid">

    {{Form::open(['route' => 'saisie.enregistre'])}}
    @foreach ($themes as $theme)
      <div class="ml-2 mt-3 d-flex flex-row align-items-center bg-otobleuclair">
        <img class="img-40" src="{{asset(config('chemins.saisie')).'/'.$theme->icone}}" alt="">
        <h5>{{$theme->nom}}</h5>
      </div>
      @foreach($alertes as $alerte)
        @if ($theme->id == $alerte->theme_id)
          <?php
          $value ="";
          $attention = "";
          foreach ($sAlertes as $sAlerte ) {
            if($sAlerte->alerte_id === $alerte->id)
            {
              $value = $sAlerte->valeur;
              $attention = "attention";
            }
          }
          ?>
          <div class="affiche alerte-item ml-3 pl-3">
            <p class="{{$attention}}">{{ucfirst($alerte->nom)}}</p>
            <div>
              @if($alerte->type = "liste" && $alerte->critalertes->count() > 0)
                <?php // construction du tableau pour la liste déroulante
                $liste = [];
                foreach($alerte->critalertes as $crit){
                  $liste[] = $crit->nom;
                }
                ?>
                {{Form::select('alerte_'.$alerte->id, $liste, $value)}}
              @else()
                <input
                name="alerte_{{$alerte->id}}"
                type="number"
                placeholder="{{ old('alerte_'.$alerte->id) }}"
                class="zone-saisie"
                value = "{{$value}}"
                />
                {{Form::label('alerte_'.$alerte->id, $alerte->unite)}}
              @endif()
            </div>
          </div>

        @endif

      @endforeach


    @endforeach()

    {{Form::submit('envoyer', ['class' => 'btn btn-otorange rounded-0'])}}
    <a href="{{route('saisie.accueil')}}" class="btn btn-otobleu rounded-0" title="revenir à la liste">retour</a>
    {{Form::close()}}
  </div>

@endsection