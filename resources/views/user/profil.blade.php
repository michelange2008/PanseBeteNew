{{-- issu de la vue user.show
affiche les infos du profil de l'utilisateur (nom, origine, fonction)
 --}}
<div class="card" style="width: 18rem;">

  <div class="card-header">

    <h5 class="card-title">{{ ucfirst($user->name) }}</h5>


  </div>

  <div class="card-body">

    <p class="card-text fst-italic">{{ $user->email }}</p>
    <p class="card-text">{{ $user->profession }}</p>
    <p class="card-text">{{ $user->region }}</p>
    @if ($user->admin)
      <p class="card-text fw-bold">@lang('commun.admin')</p>
    @endif

  </div>

  <div class="card-footer">

    @edit([
    'route' => route('user.edit', $user),
    ])

  </div>

</div>
