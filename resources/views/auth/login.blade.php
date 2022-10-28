@extends('layouts.app')

@section('contenu')
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-sm-10 col-md-9 col-lg-8 col-xl-7">
        <div class="card" style="margin-top:10px">
          <div>
            <img src="{{asset(config('chemins.images'))}}/itab_otoveil_long.jpeg" class="" alt="otoveil" style="width:100%"/>

          </div>
          <div class="card-header">
            <h5>{{ __("Il faut d'abord vous connecter")}}</h5>
            <p>
              {{ __("avec une adresse mail et un mot de passe")}}
            </p>
          </div>

          <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
              @csrf

              <div class="form-group row my-3">
                <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('Adresse mail') }}</label>

                <div class="col-md-8">
                  <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                  @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('email') }}</strong>
                    </span>
                  @endif
                </div>
              </div>

              <div class="form-group row my-3">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mot de passe') }}</label>

                <div class="col-md-6 d-flex group-password">
                  <input id="password" type="password" autocomplete="off" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                  @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('password') }}</strong>
                    </span>
                  @endif
                  <div class="oeil oeil-ouvert" alt="affiche le mot de passe" title="afficher/cacher le mot de passe"></div>
                </div>
              </div>

              <div class="form-group row my-3">
                <div class="col-md-6 offset-md-4">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                      {{ __('Se souvenir de Moi') }}
                    </label>
                  </div>
                </div>
              </div>

              <div class="form-group row my-3">
                <div class="col-md-8 offset-md-4">
                  <button type="submit" class="btn btn-otobleu">
                    <i class="fas fa-sign-in-alt"></i> {{ __('Connection') }}
                  </button>

                </div>
              </div>
              <div class="form-group row my-3 text-end">
                <div class="col">
                  <a class="d-block my-3" href="{{ route('password.request') }}">
                    {{ __('Mot de passe oublié ?') }}
                  </a>

                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  <hr class="divider">

    <div class="row justify-content-center">
      <div class="col-sm-10 col-md-9 col-lg-8 col-xl-7">
        <div class="card">
          <div class="card-header">
            <h5>@lang('commun.first_time')</h5>
          </div>
          <div class="card-body d-flex justify-content-end">
            <a href="{{route('visiteur.index')}}">
              <button class="btn btn-otorange" type="button" name="button"><i class="far fa-id-card"></i> @lang('commun.demande_acces')</button>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection
