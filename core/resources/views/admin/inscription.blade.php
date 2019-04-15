@extends('layouts.app')


@section('contenu')
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-10">
        <div class="card m-3">
          <img class="card-img-top mb-3" src="{{asset(config('chemins.images'))}}/itab_otoveil_long.jpeg" alt="ITAB Otoveil">
          <div class="card-body">
            <div class="card-title color-otobleu">
              <h3>Demande d'un identifiant Panse-Bêtes</h3>
              <p class="card-text">Pour pouvoir vous envoyer une identifiant et un mot de passe, nous avons besoin de quelques renseignements</p>
              <p class="card-text">Nous vous demandons de remplir le formulaire ci-dessous et dès réception nous vous enverrons les éléments vous permettant d'utiliser Panse-Bêtes</p>
                {{Form::open(['route' => 'inscription.envoi'])}}
                <div class="form-group">
                  {{Form::text('nom', '', ['class' => 'form-control', 'placeholder' => 'votre nom*', 'required' => 'required'])}}
                </div>
                <div class="form-group">
                  {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'votre adresse mail*', 'required' => 'required'])}}
                </div><div class="form-group">
                  {{Form::password('mot_de_passe', ['class' => 'form-control', 'placeholder' => 'votre mot de passe (6 caractères mini)*', 'required' => 'required'])}}
                </div><div class="form-group">
                    {{Form::password('retapez_votre_mot_de_passe', ['class' => 'form-control', 'placeholder' => 'retapez votre mot de passe*', 'required' => 'required'])}}
                </div><div class="form-group">
                  <h5>Dites-en nous un plus sur vous...(c'est facultatif)</h5>
                    <select class="custom-select" name="profession">
                      <option selected>Votre profession ?</option>
                      <option value="Eleveur">Eleveur</option>
                      <option value="Technicien">Technicien</option>
                      <option value="Animateur">Animateur</option>
                      <option value="Vétérinaire">Vétérinaire</option>
                      <option value="Enseignant">Enseignant</option>
                      <option value="Etudiant">Etudiant</option>
                      <option value="Autre">Autre</option>
                    </select>
                  </div><div class="form-group">
                    <select class="custom-select" name="region">
                      <option selected>Votre région ?</option>
                      <option value= 'Auvergne-Rhône-Alpes'>Auvergne-Rhône-Alpes</option>
                      <option value= 'Bourgogne-Franche-Comté'>Bourgogne-Franche-Comté</option>
                      <option value= 'Bretagne'>Bretagne</option>
                      <option value= 'Centre-Val_de_Loire'>Centre-Val de Loire</option>
                      <option value= 'Corse'>Corse</option>
                      <option value= 'Grand_Est'>Grand Est</option>
                      <option value= 'Guadeloupe'>Guadeloupe</option>
                      <option value= 'Guyane'>Guyane</option>
                      <option value= 'Hauts-de-France'>Hauts-de-France</option>
                      <option value= 'Île-de-France'>Île-de-France</option>
                      <option value= 'La_Réunion'>La Réunion</option>
                      <option value= 'Martinique'>Martinique</option>
                      <option value= 'Mayotte'>Mayotte</option>
                      <option value= 'Normandie'>Normandie</option>
                      <option value= 'Nouvelle-Aquitaine'>Nouvelle-Aquitaine</option>
                      <option value= 'Occitanie'>Occitanie</option>
                      <option value= 'Pays_de_la_Loire'>Pays de la Loire</option>
                      <option value= "Provence-Alpes-Côte_d'Azur">Provence-Alpes-Côte d'Azur</option>
                      <option value= 'Hors_de_France'>Hors de France</option>
                    </select>
                </div>
                <div class="form-group">
                  <h5>Et bien sûr, vous n'êtes pas un robot. Donc vous pourrez nous dire ce que veulent dire les deux lettres du logo bien connu ci-dessous:</h5>
                  <p>(tout en minuscule et pas en abbrégé)</p>
                  <div class="d-flex flex-row align-items-end">
                    <img src="{{asset(config('chemins.images'))}}/logobio.png" alt="">
                    {{Form::text('captcha','',['required' => 'required', 'class' => 'form-control ml-3', 'style' => 'width:50%'])}}
                  </div>
                </div>

                <div class="d-flex justify-content-end">
                  {{Form::submit('Envoi',['class' => 'btn btn-otorange rounded-0'])}}
                </div>

                {{Form::close()}}

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
