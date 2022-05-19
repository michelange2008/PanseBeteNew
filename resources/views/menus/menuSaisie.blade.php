{{-- Menu destiné à la saisie: il affiche le nom et la date la saisie
Pour les saisies pour lesquelles il y a déjà des salertes (saisie antérieure)
le menu permet de voir  les différents résultats et de la modiers
Pour les saisies nouvelles sans salertes, le menu n'affiche rien d'autre
--}}
@section('menu')

  <div class="container-fluid">

    <nav class="navbar navbar-expand-lg navbar-light px-3 mb-3" style="background-color: #d4d4d4">

      <span class="navbar-brand navbar-text">

        @include('menus.nomDate')

      </span>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuSaisie"
      aria-controls="navbarNavAltMarkup"
      aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="menuSaisie">

      <div class=navbar-nav>

        @if ($saisie->hasnum && $saisie->hasobs)

          <a class="nav-link active" href="{{ route('saisie.accueil', $saisie->id) }}"
            title="Voir la synthèse de vos résultats">
            <i class="fa-solid fa-globe"></i> @lang('titres.synth_globale')
          </a>

          <a class="nav-link " href="{{ route('schiffre.show', $saisie->id) }}"
            title="Voir les paramètres chiffrés du troupeau">
            <i class="fa-solid fa-chart-line"></i> @lang('titres.d_chiffrees')
          </a>

          <a class="nav-link " href="{{ route('sorigines.index', $saisie->id) }}"
            title="Voir la liste des origines des alertes">
            <i class="fa-solid fa-meteor"></i> @lang('titres.l_origines')
          </a>

          <a class="nav-link " href="{{ route('sorigines.show', $saisie->id) }}"
            title="Ajouter ou modifier des origines des alertes">
            <i class="fa-solid fa-pen-to-square"></i> @lang('titres.s_origines')
          </a>

          <div class="nav-item dropdown">

            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#"
              role="button" aria-haspopup="true" aria-expanded="false"
              title="Ajouter ou modifier les informations">
              <i class="fa-solid fa-pen-to-square"></i> @lang('titres.edit_saisie')
            </a>

            <div class="dropdown-menu">

              <a class="dropdown-item" href="{{ route('schiffre.edit', $saisie->id) }}">
                <i class="fa-solid fa-chart-line"></i> @lang('titres.edit_chiffres')
              </a>

              <a class="dropdown-item" href="{{ route('saisie.observations', $saisie->id) }}">
                <i class="fa-solid fa-eye"></i> @lang('titres.edit_observations')
              </a>

            </div>

          </div>

        @endif

      </div>

    </div>

  </nav>

</div>


@endsection
