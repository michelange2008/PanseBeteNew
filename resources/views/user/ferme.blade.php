<div class="card" style="width: 18rem;">

  <div class="card-header">

    <h5 class="card-title">@lang('commun.exploitation')</h5>


  </div>

  <div class="card-body">

    @if ($user->parafermes()->count() == 0)

      <div class="card-text fst-italic">

        <p>@lang('commun.no_info')</p>

        <p>@lang('commun.clic_button_sub')</p>

      </div>

    @else

    @foreach ($user->parafermes->sortBy('ordre') as $paraferme)

      <div class="card-text d-flex flex-row justify-content-between">

        <p>
          {{ ucfirst($paraferme->nom) }} :
        </p>

        <p class="fw-bold">
          {{ ucfirst($paraferme->param->value) }} {{ $paraferme->unite }}
        </p>

      </div>

    @endforeach

  @endif

  </div>

  <div class="card-footer">

    @edit([
    'route' => route('ferme.edit', $user),
    ])

  </div>

</div>
