<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Menu</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/album/">

    

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/docs/5.1/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="{{asset('img/favicon.png')}}" sizes="32x32" type="image/png">
    <link rel="icon" href="{{asset('img/favicon.png')}}" sizes="16x16" type="image/png">
    <link rel="manifest" href="/docs/5.1/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="/docs/5.1/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
    <link rel="icon" href="/docs/5.1/assets/img/favicons/favicon.ico">
    <meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
  </head>
<body>
    
<header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">Quelques informations :</h4>
          <p class="text-muted">Steam est une plateforme de distribution de contenu en ligne, de gestion des droits et de communication développée par Valve et disponible depuis le 11 septembre 2003. </p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white">Pages</h4>
          <ul class="list-unstyled">
            <li><form method="POST" action="{{ route('logout') }}">
              @csrf
              <button type="submit" style="border:none;text-decoration: underline;background-color:transparent;color: white">
                  {{ __('Log Out') }}
              </button>
            </form></li>
            <li><a href="{{ url('/profile') }}" class="text-white">Page Utilisateur</a></li>
            @if(Auth::check())
              <li ><a href="{{ url('/poste') }}" class="text-white">Poster votre jeu</a></li>
            @endif     
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="/autre" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><circle cx="12" cy="13" r="4"/></svg>
        <strong>Acceuil</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>
</header>

<main>

<section class="py-5 text-center container">
  <div class="row py-lg-5">
    <div class="col-lg-6 col-md-8 mx-auto">
      <h1 class="fw-light">Les derniers jeux poster sur notre site</h1>
      <p class="lead text-muted">Vous trouverez ici la totalité de nos jeux, de maniere a voir le dernier posté.</p>
       @include('recherche')
    </div>
  </div>
</section>

@if (count($errors)>0)
  <div class="alert alert-danger">
    <ul class = "mb-0 mt-0">
      @foreach ($errors->all() as $error)
        <li> {{$error}} </li>
      @endforeach
  </div>
@endif

@if(session()->has('message'))
  <div style="width:80%; margin:auto; margin: top 10rem; padding: left 2rem;">
    <p style="width:50%; margin: bottom 4rem; color:gray-50; background-color:green-500; border: radius 1rem; padding: top 4rem;">
      {{session()->get('message')}}
    </p>
  </div>
@endif

@yield('content')

</main>
</body>

<footer class="text-muted py-5">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#">Retourner en haut</a>
    </p>
    <p class="mb-1">Fait par : &copy; Elisa Marchand et Ciriane Vergnaud</p>
  </div>
</footer>

<script src="{{asset('js/bootstrap.bundle.min.js')}}" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>      

</html>