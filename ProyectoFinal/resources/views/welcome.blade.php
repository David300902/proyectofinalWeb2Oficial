<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.8.3/angular.min.js" integrity="sha512-KZmyTq3PLx9EZl0RHShHQuXtrvdJ+m35tuOiwlcZfs/rE7NZv29ygNA8SFCkMXTnYZQK2OX0Gm2qKGfvWEtRXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Profile">
    <meta name="description" content>
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <script class="u-script" type="text/javascript" src="//static.nicepage.com/shared/assets/jquery-1.9.1.min.js" defer></script>
    <script class="u-script" type="text/javascript" src="//capp.nicepage.com/1fd39372a624e5db9973af25d76427670e3deec8/nicepage.js" defer></script>
    <meta name="generator" content="Nicepage 3.12.2, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Josefin+Sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i">
  

        @yield('script')
    </head>
    <body class="antialiased container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Inicio</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
        <a class="nav-item nav-link active" href="#">Criticas</a>
        <a class="nav-item nav-link" href="#">Restaurantes</a>
        <a class="nav-item nav-link" href="/criticos_view">Conoce a nuestros Criticos</a>
        <a class="nav-item nav-link" href="/perfil" tabindex="-1">Otros</a>
        </div>
    </div>
    </nav>
    @yield('content')
</body>
</html>
