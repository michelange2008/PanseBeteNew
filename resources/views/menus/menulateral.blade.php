@section('menu')

  <div class="container-fluid">

    <nav class="navbar navbar-expand-lg navbar-light px-3 mb-3" style="background-color: #d4d4d4">

      <span class="navbar-brand navbar-text">

        @include('menus.nomDate')

      </span>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menulateral"
      aria-controls="navbarNavAltMarkup"
      aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="menulateral">

      <div class=navbar-nav>

        <a class="nav-link active" href="{{ route('saisie.accueil', $saisie->id) }}">
          <strong><i class="fa-solid fa-globe"></i> Synthèse globale</strong>
        </a>

        <a class="nav-link " href="{{ route('saisie.syntheseChiffres', $saisie->id) }}">
          <i class="fa-solid fa-chart-line"></i> Données chiffrées</a>

        <a class="nav-link " href="{{ route('lecture.originesListe', $saisie->id) }}">
          <i class="fa-solid fa-meteor"></i> Liste des origines</a>

        <div class="nav-item dropdown">

          <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"
              role="button" aria-haspopup="true" aria-expanded="false">
              <i class="fa-solid fa-pen-to-square"></i> Modifier la saisie
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="{{ route('saisie.chiffres', $saisie->id) }}">
              <i class="fa-solid fa-chart-line"></i> Modifier les chiffres
            </a>
            <a class="dropdown-item" href="{{ route('saisie.observations', $saisie->id) }}">
              <i class="fa-solid fa-eye"></i> Modifier les observations
            </a>
          </div>

      </div>

    </div>

  </div>

</nav>

</div>

@endsection
