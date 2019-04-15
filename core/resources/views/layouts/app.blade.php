<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Panse-Bêtes') }}</title>
    <link rel="icon" href="{{asset('favicon.ico')}}" />
     <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
      crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset(config('chemins.css'))}}/app.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css" />
</head>
<body>

        @yield('menuprincipal')
        @yield('menu')
        @yield('contenu')
        @yield('aide')

    <script type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js">
    </script>
     <script
        src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
        integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
        crossorigin="anonymous"></script>

    @stack('js') <!-- Juste pour admin.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
    <script src="https://unpkg.com/popper.js/dist/umd/popper.min.js"></script>


    <script src="{{asset(config('chemins.js'))}}/jquery.nestable.js"></script>
    <script src="{{asset(config('chemins.js'))}}/ziehharmonika.js"></script>
    <script src="{{asset(config('chemins.js'))}}/bootstrap/bootstrap.min.js"></script>
    <script src="{{asset(config('chemins.js'))}}/origine.js"></script>
    <script src="{{asset(config('chemins.js'))}}/fab.js"></script>
    <script src="{{asset(config('chemins.js'))}}/ziehharmonika.js"></script>
    <script src="{{asset(config('chemins.js'))}}/app.js"></script>
<!-- Compte à rebours à supprimer après le 4 juin -->
    <script src="{{asset(config('chemins.js'))}}/jquery.countdown.min.js"></script>
    <script src="{{asset(config('chemins.js'))}}/car.js"></script>
<!-- ############################################# -->
</body>
</html>
