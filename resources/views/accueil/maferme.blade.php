<div class="row justify-content-center my-3">

  <div class="col-sm-11 col-md-10 col-lg-9 px-3">

    @if ($user->parafermes()->count() == 0)

      <div class="card bg-danger text-white">

        <div class="card-header">

          <h5 class="card-title">@lang('commun.parafermes')</h5>

        </div>

        <div class="card-body">

          <p class="card-text">@lang('commun.parafermes_saisie')</p>

          <a class="btn btn-light btn-sm rounded-0" href="{{ route('ferme.edit', $user) }}"><i class="fa-solid fa-user-pen"></i> @lang('commun.ma_ferme')</a>

        </div>

      </div>

    @else

      <div class="card bg-light">

        <div class="card-header">

          <h5 class="card-title">@lang('commun.parafermes')</h5>

        </div>

        <div class="card-body">

          <p class="card-text">@lang('commun.parafermes_edit')</p>

          <a class="btn btn-sm btn-secondary rounded-0" href="{{ route('ferme.edit', $user) }}"><i class="fa-solid fa-user-pen"></i> @lang('commun.ma_ferme')</a>

        </div>

      </div>

    @endif

  </div>

</div>
