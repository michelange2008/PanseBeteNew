@section('menuprincipal')
  <div id="app">
    <nav class="navbar navbar-nav navbar-expand-lg navbar-light bg-light navbar-static-top">
      <div class="container-fluid flex-nowrap">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuAver" aria-controls="menuAver" aria-expanded="false" aria-label="Toggle-navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="decalage collapse navbar-collapse menu-on-right" id="menuAver">
          <ul class="nav navbar-nav navbar-left">

            @include('menus.menuConnexion')

          <div class="dropdown-divider"></div>
          <li class="nav-item" title="Pour démarrer"><a class="nav-link" href="{{route('accueil')}}">Accueil</a></li>
          <li class="nav-item"><a class="nav-link" href="{{route('aide')}}">Aide</a></li>
          @if (!Auth::user()->admin)
            <li class="nav-item"><a class="nav-link" href="{{route('notes.create')}}">Votre avis</a></li>
          @endif
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" id="infos" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              A propos
            </a>
            <div class="dropdown-menu" aria-labelledby="infos">
              <a class="dropdown-item" href="{{route('instructions')}}">Panse-Bêtes&nbsp?</a>
              <a class="dropdown-item" href="{{route('description')}}">Otoveil&nbsp?</a>
              <a class="dropdown-item" href="{{route('credits')}}">Qui a fait quoi&nbsp?</a>
              <a class="dropdown-item" href="{{route('contact')}}">Nous contacter</a>
              <a class="dropdown-item" href="{{route('mentions_legales')}}">Mentions légales</a>
            </div>
          </li>
          @if (Auth::user()->admin)
            <li class="nav-item"><a class="nav-link" href="{{route('admin.index')}}">Administration</a></li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" id="coeur" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Gestion des indicateurs
              </a>
              <div class="dropdown-menu" aria-labelledby="coeur">
                <a class="dropdown-item" href="{{route('chiffre.index')}}">
                  <img class="img-40" src="{{url('storage/img/saisie/chiffres.svg')}}" alt="">
                  Chiffres
                </a>

                <a class="dropdown-item dropdown-toggle" id="alertes" data-toggle="dropdown" aria-haspopup="true  " aria-expanded="true" href="{{route('alerte.index')}}">
                  <img class="img-40" src="{{url('storage/img/saisie/alertes.svg')}}" alt="">
                  Alertes
                </a>
                <div class="dropdown-menu" aria-labelledby="alertes">
                  <a class="dropdown-item" href="{{route('alerte.indexParEspece', "Vaches laitières")}}">
                    <img class="img-40" src="{{url('storage/img/especes/VL.svg')}}" alt="">
                    Vaches laitières</a>
                  <a class="dropdown-item" href="{{route('alerte.indexParEspece', "Vaches allaitantes")}}">
                    <img class="img-40" src="{{url('storage/img/especes/VA.svg')}}" alt="">
                    Vaches allaitantes</a>
                  <a class="dropdown-item" href="{{route('alerte.indexParEspece', "Brebis allaitantes")}}">
                    <img class="img-40" src="{{url('storage/img/especes/OA.svg')}}" alt="">
                    Brebis allaitantes</a>
                  <a class="dropdown-item" href="{{route('alerte.indexParEspece', "Chèvres laitières")}}">
                    <img class="img-40" src="{{url('storage/img/especes/CP.svg')}}" alt="">
                    Chèvres laitières</a>
                  <a class="dropdown-item" href="{{route('alerte.indexParEspece', "Brebis laitières")}}">
                    <img class="img-40" src="{{url('storage/img/especes/OL.svg')}}" alt="">
                    Brebis laitières</a>
                </div>

                <a class="dropdown-item" href="{{route('paraferme.index')}}">
                  <img class="img-40" src="{{url('storage/img/categories/logement.svg')}}" alt="">
                  Exploitations
                </a>

              </div>
            </li>

          @endif

        </ul>
      </div>
      <a class="navbar-brand" href="{{ url('/') }}">
        {{ config('app.name', 'Panse-bêtes') }}
      </a>
      <img src="{{asset(config('chemins.images'))}}/itab_otoveil.jpeg" alt="otoveil" class="otoveil"/>
    </div>
  </nav>
</div>
</div>

@endsection()
