@extends('layouts.app')

@extends('menus.menuprincipal')

@section('contenu')

  <div class="container-fluid">
    <div class="alert alert-success">
      <h3>Donnez-nous votre avis sur Panse-Bêtes</h3>
    </div>
    <div class="row">
      <div class="col-1"></div>
      <div class="col-md-8">
        <p>Metuentes igitur idem latrones Lycaoniam magna parte campestrem cum se inpares nostris fore congressione stataria documentis frequentibus scirent, tramitibus deviis petivere Pamphyliam diu quidem intactam sed timore populationum et caedium, milite per omnia diffuso propinqua, magnis undique praesidiis conmunitam.
        </p>
        <p class="lead">Merci de bien vouloir remplir ce petit questionnaire</p>
        {{ Form::open(['route' => 'notes.store']) }}
          <p class='lead'>Sur quels type de production avez-vous utilisé Panse-Bêtes?</p>
          @foreach ($especes as $espece)
            {{Form::label($espece->abbreviation, $espece->nom)}}
            {{Form::checkbox($espece->abbreviation, $espece->abbreviation)}}

          @endforeach

        {{ Form::close() }}
      </div>
    </div>
  </div>

@endsection
