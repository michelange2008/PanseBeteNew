@extends('layouts.app')

@extends('menus.menuprincipal')

@section('contenu')

  <div class="container-fluid">

    <div class="row my-3 justify-content-center">

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
                    <td></td>
                    <td>{{ $saisie->elevage->nom }}</td>
                    <td>{{ $saisie->created_at }}</td>
                    <td>{{ $saisie->salertes->count() }}</td>
                  </tr>

                @endforeach
              </tbody>

            </table>

            @enregistreAnnule()

          </form>

        </div>

      </div>

    </div>

  </div>

@endsection
