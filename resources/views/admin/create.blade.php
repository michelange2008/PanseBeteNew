@extends('layouts.app')

@extends('menus.menuprincipal')

@section('contenu')

  <div class="container-fluid">

    <div class="row mt-3 justify-content-center">

      <div class="col-sm-11 col-md-10 col-lg-9">

        @titre(['titre'=> __($elements->titre->texte), 'icone' => $elements->titre->icone])

      </div>

    </div>

    <form class="" action="{{ route($elements->route) }}" method="post">

      @csrf

      <div class="row justify-content-center">

        @foreach ($elements->liste as $champ)

          <div class="col-sm-11 col-md-10 col-lg-9">


            @if ($champ->type == "text")

              @inputText([
                'name' => $champ->name,
                'label' => $champ->label,
                'isName' => $champ->isName ?? '',
              ])

            @elseif ($champ->type == "select")

              @inputSelect([
                'name' => $champ->name,
                'label' => $champ->label,
                'options' => $champ->options,
                'isOption' => $champ->isOption ?? '',
              ])


            @endif

          </div>

        @endforeach

      </div>

      <div class="row justify-content-center">

        <div class="col-sm-11 col-md-10 col-lg-9">

          @enregistreAnnule()

        </div>


      </div>

    </form>

  </div>

@endsection
