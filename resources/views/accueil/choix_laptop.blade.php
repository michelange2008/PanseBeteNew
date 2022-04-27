<div class="row justify-content-center">

  <div class="col-md-10">

    <div class="nouvelle-saisie-liste alert desktop-only btn-otobleu" style="padding:0">

      <div class="d-flex flex-column">

        <h6>Nouvelle saisie</h6>

        <p><em>(choisir le type d'élevage) <i class="fas fa-arrow-right"></i></em></p>

      </div>

      @foreach ($especes as $espece)

        <img src="{{ 'storage/img/especes/'.$espece->icone}}"
          id="nouvelle_{{$espece->id}}" name="{{auth()->user()->name}}" class="nouvelle-saisie-item shadow curseur"
          route= "{{url('/')}}"
          alt="{{$espece->nom}}" title="{{$espece->nom}}">

      @endforeach

    </div>

  </div>

</div>
