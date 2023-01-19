@extends('layouts.app')

@extends('menus.menuprincipal')

@extends('menus.soustitre', ['soustitre' => "Panse-Bêtes…", 'icone' => 'ampoule'])

@section('contenu')

<div class="container-fluid">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="ziehharmonika">
        <h3>@lang('pb.titre')</h3>
        <div>
          <p>@lang('pb.qui')</p>
          <p>@lang('pb.obj')</p>
          <p>@lang('pb.quand')</p>
          <p>@lang('pb.ou')</p>
        </div>

          <h3>Sept pôles d'observation</h3>
          <div>
            <p>Les informations sont organisées sous différents pôles d’indicateurs issus de votre observation et de vos analyses tout au long de l’année.</p>
            <ul>
              <li>Regard global sur le troupeau</li>
              <li>La reproduction du troupeau</li>
              <li>Les maladies métaboliques</li>
              <li>La santé des jeunes</li>
              <li>Le parasitisme</li>
              <li>La santé des mamelles</li>
              <li>La santé des pieds</li>
            </ul>
          </div>
          <h3>Mode d'emploi</h3>
          <div>
            <ol>
              <li>Sélectionner l'atelier correspondant à votre élevage.</li>
              <li>
                Choisir de faire une nouvelle saisie ou de revoir les anciennes.
              </li>
              <li>
                Passer en revue chaque pôle ou aller directement à celui qui vous préoccupe.
              </li>
              <li>
                Saisir les indicateurs d'alerte de chaque pôle.
              </li>
              <li>
                Puis répondre aux questions pour chaque indicateur à problème.
              </li>
              <li>
                Et enfin, consulter l'ensemble de vos observations.
              </li>
            </ol>
          </div>

    </div>
  </div>
</div>
  <div class="container d-flex justify-content-end" style="border:none;padding:0">
    <a href="{{URL::route('accueil')}}" class="btn btn-secondary text-light rounded-0">retour</a>
  </div>
</div>

@endsection
@push('js')
  <script src="{{asset(config('chemins.js'))}}/ziehharmonika.js"></script>
  <script src="{{asset(config('chemins.js'))}}/accordeon.js"></script>
@endpush
