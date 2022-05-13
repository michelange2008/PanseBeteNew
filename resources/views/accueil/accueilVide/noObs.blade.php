{{-- Issu de accueilSaisieVide.blade.php --}}
<div class="card-header bg-otobleu">

  <img class="img-75" src="{{ url('storage/img/saisie/observations_clair.svg') }}" alt="">

</div>


<div class="card-body">

  <h5 class="card-title">{{ __('saisie.saisie_observations') }}</h5>
  <p class="card-text">{{ __('saisie.saisie_obs_intro_1') }}</p>
  <p class="card-text">{{ __('saisie.saisie_obs_intro_2') }}</p>

</div>

<div class="card-footer">

  @vers([
  'couleur' => 'otojaune',
  'route' => route('saisie.observations', $saisie->id),
  'libelle' => __('boutons.observations'),
  "fa" => "fa-pen-to-square",
  ])

</div>
