<div class="d-flex alert bg-otobleu justify-content-between align-items-center">

  <div class="d-flex align-items-center">

    <img class="img-50" src="{{ url('storage/img/'.$indexTab->titre->icone) }}" alt="{{ $indexTab->titre->icone }}">

    <div class="ml-3">

      <h3 class="px-3">{{ ucfirst(__('tableaux.'.$indexTab->titre->titre ?? '')) }} </h3>

      <h5 class="px-3">{{ $indexTab->titre->soustitre ?? '' }}</h5>

    </div>

  </div>

  @if ($indexTab->titre->bouton)

    @annule()

  @endif

</div>