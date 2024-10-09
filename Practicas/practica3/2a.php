<?php

$idolos = [
    [
        "nombre" => "Anuel AA",
        
        "imagen" => "https://portales.vanguardia.com/binrepository/717x717/0c21/716d477/none/12204/ULKP/sin-titulo_7753070_20221209094650.jpg",

        "descripcion" => "Es cantante de regueaton, es de Puerto Rico"
    ],

    [
        "nombre" => "Mireia Belmonte",
        
        "imagen" => "https://static.diariofemenino.com/pictures/galerias/205000/205150-4.jpg",

        "descripcion" => "Es una nadadora de Badalona, es campeona olímpica"
    ],

    [
        "nombre" => "Andrés Iniesta",
        
        "imagen" => "https://th.bing.com/th/id/R.659beb4be333cd06e7161f202a37bd21?rik=yIuVBzW%2fmq%2b8IA&pid=ImgRaw&r=0",

        "descripcion" => "Es un ex jugador español, es campeón del mundo en 2010"
    ],

    [
        "nombre" => "Dani Ferrer",
        
        "imagen" => "https://www.paralympic.org/sites/default/files/styles/image_crop_1_1_200x200_/public/athlete_sdms_image/39334-Daniel%20Ferrer%20Robles%20photo.jpg?itok=8r9foMkG",

        "descripcion" => "Nadador paralímpico de Badalona, es subcampeón del mundo"
    ],

    [
        "nombre" => "Pedri",
        
        "imagen" => "https://image.ondacero.es/clipping/cmsimages01/2024/07/06/DF3EDB22-5F7F-42D6-9176-26EE00F4CADF/pedri-abandona-campo-lesion-partido-cuartos-final-eurocopa-2024-que-enfrento-espana-alemania_98.jpg?crop=1920,1080,x0,y0&width=1900&height=1069&optimize=high&format=webply",

        "descripcion" => "Es un jugador español, es campeón del Europa en 2024"
    ],

    [
        "nombre" => "Dani Olmo",
        
        "imagen" => "https://s1.ppllstatics.com/burgosconecta/www/multimedia/2024/07/12/dani-olmo-reloj-kTtG-U220698172984g3D-1200x840@Burgosconecta.jpg",

        "descripcion" => "Es un jugador español, del Barça y es de Terrassa, es campeón del Europa en 2024"
    ],


    [
        "nombre" => "Zidane",
        
        "imagen" => "https://img.a.transfermarkt.technology/portrait/big/3111-1478769687.jpg?lm=1",

        "descripcion" => "Es un ex jugador de Francia"
    ],

    [
        "nombre" => "Ronalinho",
        
        "imagen" => "https://img.olympics.com/images/image/private/t_1-1_300/f_auto/primary/tb2pkyp8ptonorju1uvw",

        "descripcion" => "Es un ex jugador de Brasil"
    ],

    [
        "nombre" => "Iker Casillas",
        
        "imagen" => "https://images.ecestaticos.com/5_3MiKX26MkkfqDkPE2_m_mdIXw=/0x0:0x0/1200x900/filters:fill(white):format(jpg)/f.elconfidencial.com%2Foriginal%2Ff53%2Fe26%2F240%2Ff53e26240f4ef2bd8f9036e60093d5a8.jpg",

        "descripcion" => "Es un ex jugador español, campeón del mundo de 2010"
    ],
];
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.72.0">
  <title>Album Idolos</title>

  <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/album/">



  <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
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
            <h4 class="text-white">About</h4>
            <p class="text-muted">Add some information about the album below, the author, or any other background
              context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off
              to some social networking sites or contact information.</p>
          </div>
          <div class="col-sm-4 offset-md-1 py-4">
            <h4 class="text-white">Contact</h4>
            <ul class="list-unstyled">
              <li><a href="#" class="text-white">Follow on Twitter</a></li>
              <li><a href="#" class="text-white">Like on Facebook</a></li>
              <li><a href="#" class="text-white">Email me</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="navbar navbar-dark bg-dark shadow-sm">
      <div class="container">
        <a href="#" class="navbar-brand d-flex align-items-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor"
            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="mr-2"
            viewBox="0 0 24 24">
            <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />
            <circle cx="12" cy="13" r="4" /></svg>
          <strong>Album</strong>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader"
          aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </div>
  </header>

  <main>

    <section class="py-5 text-center container">
      <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
          <h1 class="font-weight-light">ÍDOLOS</h1>
            <a href="#" class="btn btn-primary my-2">Main call to action</a>
            <a href="#" class="btn btn-secondary my-2">Secondary action</a>
          </p>
        </div>
      </div>
    </section>

    <div class="album py-5 bg-light">
      <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <?php

        foreach ($idolos as $idolo){
    echo '
    
        <div class="col">
        <div class="card shadow-sm">
        <h1>' . ($idolo['nombre']) . '</h1>
        <img class="bd-placeholder-img card-img-top" width="100%" height="225" 
            src=" '. ($idolo['imagen']) . '"
        >

        <div class="card-body">
            <p class="card-text">' . ($idolo['descripcion']). '</p>
        </div>
        </div>
    </div>';
}
?>

  </main>

  <footer class="text-muted py-5">
    <div class="container">
      <p class="float-right mb-1">
        <a href="#">Back to top</a>
      </p>
      <p class="mb-1">Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
      <p class="mb-0">New to Bootstrap? <a href="/">Visit the homepage</a> or read our <a
          href="/docs/5.0/getting-started/introduction/">getting started guide</a>.</p>
    </div>
  </footer>

</body>

</html>
