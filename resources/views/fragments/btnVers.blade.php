<a class="btn btn-{{ $couleur ?? 'otorange' }} rounded-0" href="{{ $route ?? route('accueil') }}">

    <i class="fas {{ $fa ?? 'fa-file-alt' }}"></i> {{ $libelle ?? __('boutons.valider') }}

</a>
