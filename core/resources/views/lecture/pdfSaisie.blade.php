@extends('layouts.pdf')

@section('contenu')
<br />
<div class="entete">
  <img src="{{URL::asset('/')}}otoveil.jpeg" alt="otoveil" class="logo">
  <h1 class="titre">PANSE-BETE</h1>
  </div>
</div>

<div>
    <h1>{{session()->get('espece')->nom}}</h1>
    <h2>Saisie du {{$saisie->created_at->day}}/{{$saisie->created_at->month}}/{{$saisie->created_at->year}}</h2>
</div>
@foreach($themes as $theme)

    <?php $affiche = true;
    $i = 0;  ?>
      @foreach($saisie->salertes as $sAlerte)
        @if($sAlerte->alerte->theme->id === $theme->id)
        <?php $affiche = false;
          $i++;?>
        @endif
      @endforeach

  @if($affiche)
    <div class="theme theme-ok">
      <h4>{{strtoupper($theme->nom)}} (OK)</h4>
    </div>

    @else

    <div class="theme theme-pb">
      <h4>{{strtoupper($theme->nom)}}</h4>
      @foreach($saisie->salertes as $sAlerte)
      @if($sAlerte->alerte->theme->id === $theme->id)
      <div class="intitule-alerte">
        <h4 class="">{{ucfirst($sAlerte->alerte->nom)}}</h4>
        <div class="question">
        @foreach($sAlerte->sorigines as $sorigine)
            <p>
              {{$sorigine->origine->question}}
            </p>
        @endforeach
      </div>
      </div>
      @endif
      @endforeach
    </div>

  @endif
  <br />
@endforeach

@endsection
