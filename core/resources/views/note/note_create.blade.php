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
    </div>
    <div class="form-row">
      <div class="col-md-1"></div>
      <div class="col-md-6 border p-3 mr-1">
        <p class='lead'>Sur quels type de production avez-vous utilisé Panse-Bêtes?</p>
        @foreach ($especes as $espece)
        <div class="custom-control custom-switch">
          <input id="espece_{{$espece->id}}" class="custom-control-input" type="checkbox" name="{{$espece->id}}" value="">
          <label for="espece_{{$espece->id}}" class="custom-control-label">{{ $espece->nom }}</label>
        </div>
        @endforeach
      </div>
      <div class="col-md-4 border p-3">
        <p class='lead'>Combien de fois avez-vous utilisé Panse-Bêtes?</p>
        <div class="custom-control custom-radio">
          <input id="une" type="radio" name="utilisation" value="" class="custom-control-input">
          <label for="une" class="custom-control-label">Une fois</label>
        </div>
        <div class="custom-control custom-radio">
          <input id="quelques" type="radio" name="utilisation" value="" class="custom-control-input">
          <label for="quelques" class="custom-control-label">Quelques fois</label>
        </div>
        <div class="custom-control custom-radio">
          <input id="souvent" type="radio" name="utilisation" value="" class="custom-control-input">
          <label for="souvent" class="custom-control-label">Souvent</label>
        </div>
      </div>
    </div>
    <div class="form-row">
      <div class="col-md-1"></div>
      <div class="col-md-10">
        <p class='lead'>Sur le fond, que pensez-vous de Panse-Bêtes?</p>
      </div>
      <div class="col-md-1"></div>
      <div class="col-md-1"></div>
      <div class="col-md-3">
        <label for="customRange1">Quelle note donnez vous</label>
        @for ($i=0; $i < 6; $i++)
          <div class="custom-control custom-radio">
            <input id="{{$i}}" type="radio" name="note_fond" value="" class="custom-control-input">
            <label for="{{$i}}" class="custom-control-label">{{$i}}</label>
          </div>
        @endfor
    </div>
    <div class="col-md-7">
      <label for="avis_fond">Si vous le souhaitez, vous pouvez détailler votre appréciation</label>
      <textarea id="avis_fond" rows="6" columns="10" style="width:100%" name="" value=""></textarea>
    </div>

  </div>
      {{ Form::close() }}


      </div>

@endsection
