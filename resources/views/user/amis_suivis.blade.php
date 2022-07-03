<div class="card" style="width: 18rem;">

  <div class="card-header">

    <h5 class="card-title">@lang('commun.amis')</h5>
    <p>{{ ucfirst(__('commun.amis_suivis')) }}</p>


  </div>

  <div class="card-body">

    @if ($amis_suivis->count() > 0)

      @foreach ($amis_suivis as $ami)

        <a href="{{ route('saisiesAmi', $ami) }}">

          <p>
            {{ $ami->name }}
            @if ($ami->saisies->count() == 1)
              ({{ $ami->saisies->count() }} saisie)
              <i class="fa-solid fa-up-right-from-square"></i>
            @elseif ($ami->saisies->count() > 1)
              ({{ $ami->saisies->count() }} saisies)
              <i class="fa-solid fa-up-right-from-square"></i>
            @endif
          </p>

        </a>

      @endforeach

    @endif

  </div>

</div>
