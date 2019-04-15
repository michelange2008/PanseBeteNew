@extends('layouts.app')

@section('contenu')
  <div class="container-fluid">
    <div class="row justify-content-center">
      <div class="col-8">
        <div class="card m-3">
          <img class="card-img-top mb-3" src="{{asset(config('chemins.images'))}}/itab_otoveil.jpeg" alt="ITAB Otoveil">
          <div class="card-body">
            <div class="card-title color-otobleu">
              <h3>Demande d'un identifiant Panse-Bêtes</h3>
              <p class="card-text">Pour pouvoir vous envoyer une identifiant et un mot de passe, nous avons besoin de quelques renseignements</p>
              <p class="card-text">Nous vous demandons de remplir le formulaire ci-dessous et dès réception nous vous enverrons les éléments vous permettant d'utiliser Panse-Bêtes</p>
                {{Form::open(['route' => 'inscription.envoi'])}}
                <div class="form-group">
                  {{Form::text('nom', '', ['class' => 'form-control', 'placeholder' => 'votre nom', 'required' => 'required'])}}
                </div>
                <div class="form-group">
                  {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'votre adresse mail', 'required' => 'required'])}}
                </div><div class="form-group">
                  {{Form::password('mdp1', ['class' => 'form-control', 'placeholder' => 'votre mot de passe', 'required' => 'required'])}}
                </div><div class="form-group">
                    {{Form::password('mdp2', ['class' => 'form-control', 'placeholder' => 'retapez votre mot de passe', 'required' => 'required'])}}
                </div><div class="form-group">
                    <select class="custom-select">
                      <option selected>Vous êtes</option>
                      <option value="E">Eleveur</option>
                      <option value="T">Technicien</option>
                      <option value="A">Animateur</option>
                      <option value="V">Vétérinaire</option>
                      <option value="P">Enseignant</option>
                      <option value="S">Etudiant</option>
                      <option value="O">Autre</option>
                    </select>
                </div>

                <p>{{ captcha_img()}}</p>
                <p>{{captcha_src()}}</p>
                <p><input type="text" name="captcha"></p>
                <p><button type="submit" name="check">Check</button></p>

                {{Form::submit('Envoi')}}

                {{Form::close()}}

            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
