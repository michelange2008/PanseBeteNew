@extends('layouts.app')

@extends('menus.menuprincipal')

@section('contenu')

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10">
        <div class="alert alert-success">
          <h3>Donnez-nous votre avis sur Panse-Bêtes</h3>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-10">
        <p>Metuentes igitur idem latrones Lycaoniam magna parte campestrem cum se inpares nostris fore congressione stataria documentis frequentibus scirent, tramitibus deviis petivere Pamphyliam diu quidem intactam sed timore populationum et caedium, milite per omnia diffuso propinqua, magnis undique praesidiis conmunitam.
        </p>
        <h5>Merci de bien vouloir remplir ce petit questionnaire</h5>
      </div>
    </div>
    {{ Form::open(['route' => 'notes.store']) }}
    <div class="form-row align-items-center">
      <div class="col-md-1"></div>
      <div class="col-md-10">
        <p class='lead'>Sur quels type de production avez-vous utilisé Panse-Bêtes?</p>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-1"></div>
      <div class="col-md-10">
        @foreach ($especes as $espece)
        <div class="form-check">
            {{ Form::checkbox($espece->abbreviation, $espece->abbreviation) }}
            {{ Form::label($espece->abbreviation, $espece->nom) }}
        </div>
        @endforeach
      </div>
    </div>
  </div>
      {{ Form::close() }}


      </div>

@endsection
