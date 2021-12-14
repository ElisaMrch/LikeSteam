<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Edit Jeu</title>

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

<body>
<main>
  <h1>Update Poste</h1>

@if ($errors->any())
  <div class="width: 80%; magin:auto">
    <ul>
      @foreach ($errors->all() as $error)
        <li style="width: 20%; margin-bottom:4rem; color:white; background-color:red; border: raduis 1rem; padding: top 1rem;">
          {{$error}}
        </li>
      @endforeach
    </ul>
  </div>
@endif

  <div style="width: 80%; margin:auto; padding: top 5rem;">
    <form 
      action="/jeu/{{$jeu->slug}}"
      method="POST"
      enctype="multipart/form-data">
      @csrf
      @method('PUT')

      <input
        type="text"
        name="nom"
        value="{{ $jeu->nom}}"
        style="background-color:transparent; display:block; border: bottom w 1px; width:100%; font-size:2rem; outline:1px ">
      </input>

      <input 
        type="text"
        name="créateur"
        value="{{ $jeu->créateur}}"
        style="padding: top 5re; background-color:transparent; display:block; border: bottom width 2px; width:100%;  font: size 1.25rem; outline: 1px solid">
      </input>
        
      <input 
        type="textarea"
        name="description"
        value="{{$jeu->description}}"
        style="padding: top 5re; background-color:transparent; display:block; border: bottom width 2px; width:100%; height: 15rem/*2rem; font: size 1.25rem; outline: 2px solid">
      </input>

      <select name = "categorie">
        <option value = "">Catégorie</option>
        <option value = "Action">Action</option>
        <option value = "RPG">RPG</option>
        <option value = "Stratégie">Stratégie</option>
        <option value = "Aventure">Aventure</option>
        <option value = "Simulation">Simulation</option>
        <option value = "Sport">Sport</option>
        <option value = "VR">VR</option>
        <option value = "demo">demo</option>
      </select>

      <input 
        type="float"
        name="prix"
        value="{{$jeu->prix}}"
        style="padding: top 5re; background-color:transparent; display:block; border: bottom width 2px; width:100%;  font: size 1.25rem; outline: 1px solid">
      </input>

      <input 
        type="url"
        name="url"
        value="{{$jeu->url}}"
        style="padding: top 5re; background-color:transparent; display:block; border: bottom width 2px; width:100%;  font: size 1.25rem; outline: 1px solid">
      </input>

      <div style="background-color:gray-light; padding: top 3.75em; ">
        
        <span>Affiche du jeu : </span>
        <input 
          type="url"
          name="photo_principale"
          value="{{$jeu->photo_principale}}"
          style="padding: top 5re; background-color:transparent; display:block; border: bottom width 2px; width:100%;  font: size 1.25rem; outline: 1px solid">
        </input>
      </div>
      <button 
        type="submit"
        classe= "text-white"
        style=" margin-top:3.75rem; background-color:grey; font-weight: 800; padding: auto">
        Poster
      </button>
    </form>
  </div>

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