<div class="card mb-3">

  <div class="card-body">

    <div class="row no-gutters">

      <div class="col-md-4 col-lg-3 col-xl-2">

        <img src="{{ url('storage/img/divers/compare.svg') }}"
        class="card-img d-none d-md-block" alt="...">

      </div>

      <div class="col-md-8 col-lg-9 col-xl-10">

        <h5 class="card-title">@lang('commun.compare_titre')</h5>

        <p class="card-text">@lang('commun.compare_texte')</p>

      </div>

    </div>

  </div>

  <div class="card-footer">

    <a class="btn btn-sm btn-otobleu rounded-0" href="{{ route('compare.index') }}">
      <i class="fa-solid fa-user-pen"></i> @lang('boutons.go')
    </a>

  </div>

</div>
