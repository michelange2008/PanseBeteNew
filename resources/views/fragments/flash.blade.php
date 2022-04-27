@if (session('message'))

    <div class="alert {{  session('couleur')  ?? 'alert-success'}} ">

        {!! session('message') !!}

    </div>

@endif
