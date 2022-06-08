@extends('layouts.app')

@extends('menus.menuprincipal')

@section('contenu')

  <div class="container-fluid">

    <div class="row my-3 justify-content-center">

      <div class="col-sm-11 col-md-10 col-lg-9">

        @titre()

      </div>

    </div>

    <div class="row my-3 justify-content-center">

      <div class="col-sm-11 col-md-10 col-lg-9">

        <div class="card" style="width: 18rem;">

          <div class="card-header">

            <h5 class="card-title">{{ ucfirst($user->name) }}</h5>

          </div>

          <div class="card-body">

            <p class="card-text">{{ $user->email }}</p>
            <p class="card-text">{{ $user->profession }}</p>
            <p class="card-text">{{ $user->région }}</p>
            @if ($user->admin)
              <p class="card-text">Administrateur du site</p>
            @endif

          </div>

          <div class="card-footer">

            @edit([
              'route' => route('user.edit', $user->id),
            ])

          </div>

        </div>

      </div>

    </div>
  </div>

@endsection
