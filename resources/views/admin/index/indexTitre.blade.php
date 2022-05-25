<div class="d-flex alert bg-otobleu align-items-center">

  <img class="img-50" src="{{ url('storage/img/'.$indexTab->titre->icone) }}" alt="{{ $indexTab->titre->icone }}">

  <div class="ml-3">

    <h3 class="px-3">{{ ucfirst(__('tableaux.'.$indexTab->titre->titre ?? '')) }}</h3>

  </div>


</div>
