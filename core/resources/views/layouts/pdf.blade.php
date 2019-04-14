<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Panses-Bêtes') }}</title>
    <link rel="icon" href="{{asset(config('chemins.images'))}}/favicon.ico" />
     <!-- Styles -->
     <link href="{{ asset(config('chemins.css'))}}/pdf.css" rel="stylesheet">
</head>
<body>

        @yield('entete')
        @yield('contenu')
        @yield('pied_de_page')


</body>
</html>
