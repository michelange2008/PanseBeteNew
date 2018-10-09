@section('menuprincipal')
<div id="app">
  <nav class="navbar navbar-nav navbar-expand-lg navbar-light bg-light navbar-static-top">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuAver" aria-controls="menuAver" aria-expanded="false" aria-label="Toggle-navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="decalage collapse navbar-collapse menu-on-right" id="menuAver">
      <ul class="nav navbar-nav navbar-left">
              <!-- Authentication Links -->
              @if (Auth::guest())
                  <li class="nav-item"><a class="nav-link" href="{{route('login')}}">Se connecter</a></li>
              @else
                  <li class="nav-item dropdown">
                      <a href="#" class="nav-link dropdown-toggle" id="utilisateur" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                          {{ Auth::user()->name }}

                      </a>

                      <div class="dropdown-menu" aria-labelledby="utilisateur">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                              onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                              Déconnection
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                        </div>
                    </li>
                @endif
                <div class="dropdown-divider"></div>
                <li class="nav-item"><a class="nav-link" href="{{route('accueil')}}">Démarrer</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('presentation')}}">Otoveil&nbsp?</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('credits')}}">Qui a fait quoi&nbsp?</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('instructions')}}">Mode d'emploi</a></li>

      </ul>
    </div>
    <a class="navbar-brand" href="{{ url('/') }}">
      {{ config('app.name', 'Panse-bête') }}
    </a>
    <img src="{{URL::asset('')}}otoveil.jpeg" alt="otoveil" class="otoveil"/>
    </div>
  </nav>
</div>
</div>
<br />
@endsection()
