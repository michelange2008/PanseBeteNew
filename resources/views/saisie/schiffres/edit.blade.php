@extends('layouts.app')

@extends('menus.menuprincipal')

@extends('aide.aide_alertes')

@extends('menus.menuSaisie')

@section('contenu')


  <div class="container-fluid">

    <div class="row justify-content-center">

      <div class="col-md-10">

        @include('fragments.flashCollect')

      </div>

    </div>

    <div class="row justify-content-center">

      <div class="col-sm-11 col-md-10 col-lg-9">

        <h3>@lang('titres.chiffres_edit')</h3>

        <form class="" action="{{route('schiffre.store')}}" method="post">

          @csrf

          @enregistreAnnule([
          'couleur' => 'btn-otorange',
          'route' => route('saisie.show', $saisie->id),
          ])

          @foreach ($groupes as $groupe)
            <div class="bg-otobleu px-3 py-1">
              <h4 class="p-0">
                {{ ucfirst($groupe->nom) }}
              </h4>
            </div>

            <input type="hidden" name="saisie_id" value="{{ $saisie->id }}">

            @foreach ($chiffres as $element)
              @if ($element->groupe_id == $groupe->id)

                <div class="form-group row my-2">

                  <label class="col-sm-8 col-form-label"
                  for="{{ $element->id }}">

                  {{$element->nom}}

                </label>
                <div class="col-sm-4">

                  <input class="form-control chiffre text-center "
                  type="number"
                  min= "{{ $element->min ?? 0}}"
                  step="{{ $element->step }}"
                  name="C{{ $element->id }}"
                  @isset($element->requis)
                    @if ($element->requis)
                      required
                    @endif
                  @endisset
                  value="{{ $chiffresSaisis->where('id', $element->id)->first()->valeur  ?? old($element->id) }}"
                  >
                </div>

              </div>
              @endif
            @endforeach

          @endforeach

          @enregistreAnnule([
          'couleur' => 'btn-otorange',
          'route' => route('saisie.show', $saisie->id),
          ])

        </form>

      </div>

    </div>

  </div>



@endsection
