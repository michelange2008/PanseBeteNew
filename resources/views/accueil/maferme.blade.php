<div class="row justify-content-center my-3">

  <div class="col-sm-11 col-md-10 col-lg-9 px-3">

    <div class="card mb-3">

      <div class="row no-gutters">

        <div class="col-md-4 col-lg-3 col-xl-2">

          @if ($user->parafermes()->count() == 0)

            <img src="{{ url('storage/img/divers/ferme_rouge.svg') }}"
                  class="card-img d-none d-md-block" alt="...">

          @else

            <img src="{{ url('storage/img/divers/ferme.svg') }}"
                  class="card-img d-none d-md-block" alt="...">

          @endif

        </div>

        <div class="col-md-8 col-lg-9 col-xl-10">

          <div class="card-body">

            <h5 class="card-title">@lang('commun.parafermes')</h5>

            @if ($user->parafermes()->count() == 0)

              <p class="card-text">@lang('commun.parafermes_saisie')</p>

              <a class="btn btn-sm btn-danger rounded-0" href="{{ route('ferme.edit', $user) }}">
                <i class="fa-solid fa-user-pen"></i> @lang('commun.ma_ferme')
              </a>

            @else

              <p class="card-text">@lang('commun.parafermes_edit')</p>

              <a class="btn btn-sm btn-secondary rounded-0"
                  href="{{ route('ferme.edit', $user) }}">
                    <i class="fa-solid fa-user-pen"></i> @lang('commun.ma_ferme')
              </a>

              <a class="btn btn-sm btn-warning rounded-0"
                 href="{{ route('pdf.modeleExploitation') }}" target="_blank">
                  <i class="fa-solid fa-file-pdf"></i> @lang('commun.ma_ferme_pdf')
              </a>

          @endif

          </div>

        </div>

      </div>

    </div>

  </div>

</div>
