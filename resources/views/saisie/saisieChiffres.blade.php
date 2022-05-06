@extends('layouts.app')

@extends('menus.menuprincipal')

@extends('aide.aide_alertes')

@extends('menus.menulateral')

@section('contenu')


  <div class="container-fluid">

    <div class="row justify-content-center">

      <div class="col-md-10">

        @include('fragments.flashCollect')

      </div>

    </div>

    <div class="row justify-content-center">

      <div class="col-sm-11 col-md-10 col-lg-9">

        <h3>@lang('titres.edit_chiffres')</h3>

        <form class="" action="{{route('saisie.enregistreChiffres')}}" method="post">

          @csrf

          @enregistreAnnule([
          'couleur' => 'btn-otorange'
          ])

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

                  <input class="form-control chiffre" type="number"
                  min= {{ $element->min ?? 0}}
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
