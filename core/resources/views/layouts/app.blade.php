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
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset(config('chemins.css'))}}/app.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css" />

    <!-- Matomo -->
      <script type="text/javascript">
        var _paq = window._paq || [];
        /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);
        (function() {
          var u="//panse-betes.fr/matomo/";
          _paq.push(['setTrackerUrl', u+'matomo.php']);
          _paq.push(['setSiteId', '1']);
          var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
          g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
        })();
      </script>
    <!-- End Matomo Code -->
</head>
<body>

        @yield('menuprincipal')
        @yield('menu')
        @yield('contenu')
        @yield('aide')

    <script type="text/javascript"
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.js">
    </script>
     <script
        src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
        integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
        crossorigin="anonymous"></script>

    @stack('js') <!-- Juste pour admin.js -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <script src="https://unpkg.com/popper.js/dist/umd/popper.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="{{asset(config('chemins.js'))}}/jquery.nestable.js"></script>
    <script src="{{asset(config('chemins.js'))}}/ziehharmonika.js"></script>
    <script src="{{asset(config('chemins.js'))}}/bootstrap/bootstrap.min.js"></script>
    <script src="{{asset(config('chemins.js'))}}/pansebetes.js"></script>
    <script src="{{asset(config('chemins.js'))}}/fab.js"></script>
    <script src="{{asset(config('chemins.js'))}}/ziehharmonika.js"></script>
    <script src="{{asset(config('chemins.js'))}}/app.js"></script>
    <script src="{{asset(config('chemins.js'))}}/origines.js"></script>
<!-- Compte à rebours à supprimer après le 4 juin -->
    <script src="{{asset(config('chemins.js'))}}/jquery.countdown.min.js"></script>
    <script src="{{asset(config('chemins.js'))}}/car.js"></script>
<!-- ############################################# -->
</body>
</html>
