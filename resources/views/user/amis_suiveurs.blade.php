<div class="card" style="width: 18rem;">

  <div class="card-header">

    <h5 class="card-title">@lang('commun.amis')</h5>
    <p>{{ ucfirst(__('commun.amis_suiveurs')) }}</p>


  </div>

  <div class="card-body">

    @if ($amis_suiveurs->count() > 0)

      @foreach ($amis_suiveurs as $ami)

        <p>{{ $ami->ami->name }}</p>

      @endforeach

    @endif

  </div>

  <div class="card-footer">

    @edit([
    'route' => route('amis.edit', $user),
    ])

  </div>

</div>
