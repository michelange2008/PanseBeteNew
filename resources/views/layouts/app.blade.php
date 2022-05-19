<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Panse-Bêtes') }}</title>
    <link rel="icon" href="{{url('favicon.ico ')}}" />
    <!-- Styles -->
    <link rel="stylesheet" href="{{ url('css/app.css') }}" />
    <link rel="stylesheet" href="{{url('css/bootstrap-table.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css" />

  </head>
  <body>

    @yield('menuprincipal')
    @yield('menu')
    @yield('sousmenu')
    @yield('soustitre')
    @yield('contenu')
    @yield('aide')


    {{-- <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script> --}}
    <script src="{{ url('js/jquery.min.js') }}"></script>
    <script src="{{ url('js/app.js') }}"></script>
    <script src="{{ url('js/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ url('js/bootstrap-table.min.js') }}"></script>

    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    @stack('js')

    {{-- <script src="{{asset(config('chemins.js'))}}/pansebetes.js"></script> --}}

  </body>
</html>
