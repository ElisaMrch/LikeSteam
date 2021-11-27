<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Welcome Steam</title>

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
        background-image: url('https://www.journaldugeek.com/files/2013/11/Steam-OS.jpg');
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
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
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
        <div class="flex text-white pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                  Steam
                </h1>
            </div>
        </div>
  </div>

  <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200" style="display:flex; flex-direction:row">
          <div>
              <img src="https://cdn.cloudflare.steamstatic.com/store/home/store_home_share.jpg" width="700" alt="">
          </div>

          <div class="m-auto sm:m-auto text-left w-4/5 block">
              <h2 class="text-3xl font-extrabold text-gray-600">
                C'est quoi Steam ?
              </h2>
              
              <p class="py-8 text-gray-500 text-s">
                Steam est une plateforme qui propose de jouer à des jeux vidéo sans avoir besoin d'acheter un support physique.
              </p>
          </div>
  </div>


    <div class="text-center py-15">
        <h1 class="uppercase text-s text-gray-400">
            Jeux
        </h1>

        <h2 class="text-4xl font-bold py-10">
            Poste recent
        </h2>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto" style="background-color:purple; width:70%; display:flex; flex-direction:row" >
        <div>
            <img src="https://s1.gaming-cdn.com/images/products/9990/271x377/the-elder-scrolls-v-skyrim-anniversary-upgrade-anniversary-edition-pc-jeu-steam-cover.jpg" alt="">
        </div>    
        <div class="flex text-gray-100 pt-10">
            <div class="flex m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-white" >
                <h2 class="uppercase text-xs">
                    NOM JEUX
                </h2>

                <h3 class="text-xl font-bold py-10">
                    DESCRIPTION JEUX
                </h3>
            </div>
        </div>
        
    </div>

</section>
</body>


<footer class="text-muted py-5">
  <div class="container">
    <p class="float-end mb-1">
      <a href="#">Back to top</a>
    </p>
    <p class="mb-1">Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
    <p class="mb-0">New to Bootstrap? <a href="/">Visit the homepage</a> or read our <a href="/docs/5.1/getting-started/introduction/">getting started guide</a>.</p>
  </div>
</footer>     
<script src="{{asset('js/bootstrap.bundle.min.js')}}" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>
