{{-- Issu de saisieAccueil --}}
<div class="card-group">
  {{-- contenu du fichier saisie_accueil_fini.json --}}
  @foreach ($contenu->items as $item)

    <div class="card mx-3">

      <div class="card-header">

        <img class="img-75" src="{{ url('storage/img/saisie/'.$item->icone) }}" alt="">

      </div>

      <div class="card-body">

        <h5 class="card-title">{{ __('saisie.'.$item->titre) }}</h5>
        <p class="card-text">{{ __('saisie.'.$item->intro_1) }}</p>
        <p class="card-text">{{ __('saisie.'.$item->intro_2) }}</p>

      </div>

      <div class="card-footer">

        @vers([
          'couleur' => $item->couleur,
          'route' => route($item->route, $saisie->id),
          'libelle' => __('boutons.commencer'),
          "fa" => "fa-angles-right",
        ])

      </div>

    </div>

  @endforeach

</div>
