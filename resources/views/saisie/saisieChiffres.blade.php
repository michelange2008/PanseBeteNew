@extends('layouts.app')

@extends('menus.menuprincipal')

@extends('aide.aide_alertes')

@extends('menus.sousmenu', [
  'titre' => 'Saisie des données chiffrées',
  'bouton1' => true,
  'route1' => route('saisie.observations', $saisie->id),
  'libelle1' => __('boutons.observations'),
  'fa1' => 'fa-angles-right',
])

@section('contenu')


  <div class="container-fluid">

    <div class="row justify-content-center">

      <div class="col-md-10">

        @include('fragments.flashArray')

      </div>

    </div>

    <div class="row justify-content-center">

      <div class="col-md-8">

        <form class="" action="{{route('saisie.enregistreChiffres')}}" method="post">

          @csrf

          @foreach ($chiffresGroupes as $groupe => $elements)
            <div class="bg-otobleu px-3 py-1">
              <h4 class="p-0">
                {{ ucfirst($groupe) }}
              </h4>

            </div>
            <input type="hidden" name="saisie_id" value="{{ $saisie->id }}">
            @foreach ($elements as $element)
              <div class="form-group row my-2">
                <label class="col-sm-8 col-form-label" for="{{ $element->id }}">{{$element->libelle}}</label>
                <div class="col-sm-4">

                  <input class="form-control" type="number"
                  min=0
                  step={{ $element->step }}
                  name="{{ $element->id }}"
                  value="{{ $chiffresSaisis->get($element->id)  ?? 0 }}">
                </div>

              </div>
            @endforeach

          @endforeach

          @enregistreAnnule([
          'couleur' => 'btn-otorange'
          ])

        </form>

      </div>

    </div>

  </div>



@endsection
