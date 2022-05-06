@extends('layouts.app')

@extends('menus.menuprincipal')

@extends('aide.aide_alertes')

@extends('menus.menulateral')

@section('contenu')

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

  <div class="row justify-content-center">

    <div class="ccol-sm-11 col-md-10 col-lg-9">

      <h3>@lang('titres.edit_observations')</h3>

        <form action="{{ route('saisie.enregistreObservations') }}" method="post">

        @csrf

        <input type="hidden" name="saisie_id" value="{{ $saisie->id }}">

        @foreach ($themes as $theme)

          <div class="ml-2 mt-3 d-flex flex-row align-items-center bg-otobleu">
            <img class="img-40" src="{{url('storage/img/saisie/'.$theme->icone)}}" alt="">
            <h5>{{ ucfirst($theme->nom) }}</h5>
          </div>

          @foreach ($alertes as $alerte)

            @if ($alerte->theme_id == $theme->id)

              <div class="row mb-3">


                  <div class="form-group">

                    <label class="m-2" for="A{{ $alerte->id }}">{{ $alerte->nom }}</label>

                    @if ($alerte->type == "liste")
                      <div class="col-sm-5 col-xl-3">

                      <select class="form-control" name="A{{ $alerte->id }}">

                        @foreach ($critalertes as $critalerte)

                          @if ($critalerte->alerte_id == $alerte->id)

                            <option value="{{ $critalerte->valeur }}">{{ $critalerte->nom }}</option>

                          @endif

                        @endforeach

                      </select>

                    </div>
                    @else

                      <div class="col-sm-5 col-xl-3 d-flex flex-row align-items-end">

                        <input class="form-control" type="number" min=0 step=1 name="A{{ $alerte->id }}" value="">

                        <div class="mx-3">

                          {{ $alerte->unite }}

                        </div>

                      </div>

                    @endif


                </div>

              </div>

            @endif

          @endforeach

        @endforeach


      </div>

    </div>
    <div class="row justify-content-center">

      <div class="col-sm-11 col-md-10 col-lg-9">

        @enregistreAnnule(['couleur' => 'btn-otorange'])

      </div>

    </form>

    </div>

  </div>

@endsection
