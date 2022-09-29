@extends('layouts.app')

@extends('menus.menuprincipal')

@section('contenu')

  <div class="container-fluid">

    <div class="row my-3 justify-content-center">

      <div class="col-sm-11 col-md-10 col-lg-9">

        @include('fragments.flash')

      </div>

      <div class="col-sm-11 col-md-10 col-lg-9">

        @titre()

      </div>

      <div class="row my-3 justify-content-center">

        <div class="col-sm-11 col-md-10 col-lg-9">

          <form class="" action="{{ route('compare.choix') }}" method="post">

            @csrf

            <table class="table">

              <thead class="thead-dark">
                <tr>
                  <th>Choisir</th>
                  <th>Nom</th>
                  <th>Date</th>
                  <th>Nombre d'alertes</th>
                </tr>
              </thead>

              <tbody>
                @foreach ($saisies as $saisie)

                  <tr>
                    <td>
                      <input class="form-check-input case" type="checkbox"
                        name="{{ $saisie->id }}" value="{{ $saisie->id }}">
                    </td>
                    <td>{{ $saisie->elevage->nom }}</td>
                    <td>
                      {{ $saisie->created_at->day }}
                      {{ $saisie->created_at->monthName }}
                      {{ $saisie->created_at->year }}
                    </td>
                    <td>{{ $saisie->salertes->where('danger', 1)->count() }}</td>
                  </tr>

                @endforeach
              </tbody>

            </table>
            <div>Nombre de case cochées: <span id="nb"></span> </div>
            @enregistreAnnule(['id' => 'btn_compare'])

          </form>

        </div>

      </div>

    </div>

  </div>

@endsection
