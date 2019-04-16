@extends('layouts.app')

@section('contenu')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin-top:10px">
              <div>
                <img src="{{asset(config('chemins.images'))}}/otoveil.jpeg" class="" alt="otoveil" style="height:130px"/>

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

                        <div class="form-group row">
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

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mot de passe') }}</label>

                            <div class="col-md-6 d-flex group-password">
                                <input id="password" type="password" autocomplete="off" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                  <div class="oeil oeil-ouvert" alt="affiche le mot de passe"></div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check d-flex">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label label-remember-modif" style = margin-left:0 for="remember">
                                        {{ __('Se souvenir de Moi') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-otobleu">
                                    {{ __('Connection') }}
                                </button>

                                <a class="d-block" href="{{ route('password.request') }}">
                                    {{ __('Mot de passe oublié ?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container mt-3">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">
          <h5>Vous n'avez pas d'identifiant et de mot de passe ?</h5>
          <h5>Savez-vous ce qu'est Panse-Bêtes ?</h5>
        </div>
        <div class="card-body d-flex flex-column">
          <p class="text-break">Panse-Bêtes est un outil permettant une approche globale la situation sanitaire d'un troupeau. Il est destiné aux éleveurs, aux techniciens et aux vétérinaires </p>
          <p class="text-break">Cet outil permet de passer en revue les différentes composantes d'un élevage (santé globale, métabolisme, santé des jeunes, mamelle, pieds, etc.) et d'objectiver les causes possibles de problèmes.</p>
          <div class="row mb-3">
            <div class="col-md-8">
              <p class="text-break">Pour voir une démo de Panses-Bêtes <i class="fas fa-arrow-right"></i></p>
            </div><div class="col-md-4">
              <a class="align-middle" href="{{route('demo')}}">
                <button class="btn btn-otobleu rounded-0" type="button" name="button"><i class="fas fa-video"></i> Voir une démonstration</button>
              </a>
            </div>
          </div>
          <div class="row">
            <div class="col-md-8">
              <p>Pour pouvoir utiliser Panse-Bêtes  <i class="fas fa-arrow-right"></i></p>
            </div><div class="col-md-4">
              <a class="align-middle" href="{{route('inscription.index')}}">
                <button class="btn btn-otorange rounded-0" type="button" name="button"><i class="far fa-id-card"></i> Demander un identifiant</button>
              </div>
            </a>
          </div>

          </div>
      </div>

    </div>
  </div>
</div>
@endsection
