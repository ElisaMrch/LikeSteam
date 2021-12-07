<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Bienvenue sur Steam</title>

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
      .background-image
      {
        background-image: url('https://cdn.cloudflare.steamstatic.com/store/home/store_home_share.jpg');
        background-position: center center;
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        height: 600px
      }
      
    </style>

    
  </head>
  <body>
    
<header>
  
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><circle cx="12" cy="13" r="4"/></svg>
        <strong>Connectez vous</strong>
      </a>
      <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a class="text-white" href="{{ url('/autre') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Menu</a>
                    @else
                        <a class="text-white" href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Connecte toi</a>

                        @if (Route::has('register'))
                            <a class="text-white" href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Creer un compte</a>
                        @endif
                    @endauth
                </div>
            @endif
      </button>
    </div>
  </div>
</header>

<section>

  <div class="background-image grid grid-cols-1 m-auto">
  </div>

  <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200" style="display:flex; flex-direction:row">
          <div style="margin-left: 100px">
              <img src="https://l-agence-communication.fr/wp-content/uploads/2020/03/mascotte-logo.png" width="400" alt="">
          </div>

          <div class="m-auto sm:m-auto text-left w-4/5 block">
              <h2 class="text-3xl font-extrabold text-gray-600" style="text-align : center;font-size: 55px ">
                C'est quoi Steam ?
              </h2>
              
              <p style ="padding-left: 150px;padding-right: 150px;padding-top: 30px;">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
              </p>
          </div>
  </div>

</section>
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
