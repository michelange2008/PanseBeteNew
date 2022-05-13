{{-- Issu de accueilSaisieVide.blade.php --}}
<div class="card-header bg-otobleu">

  <img class="img-75" src="{{ url('storage/img/saisie/chiffres_clair.svg') }}" alt="">

</div>


<div class="card-body">

  <h5 class="card-title">{{ __('saisie.saisie_chiffres') }}</h5>
  <p class="card-text">{{ __('saisie.saisie_chiffres_intro_1') }}</p>
  <p class="card-text">{{ __('saisie.saisie_chiffres_intro_2') }}</p>

</div>

<div class="card-footer">

  @vers([
  'couleur' => 'otojaune',
  'route' => route('saisie.chiffres', $saisie->id),
  'libelle' => __('boutons.chiffres'),
  "fa" => "fa-pen-to-square",
  ])

</div>
