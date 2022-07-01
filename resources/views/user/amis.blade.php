<div class="card" style="width: 18rem;">

  <div class="card-header">

    <h5 class="card-title">@lang('commun.amis')</h5>


  </div>

  <div class="card-body">

    @if ($amis->count() > 0)

      @foreach ($amis as $ami)

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
