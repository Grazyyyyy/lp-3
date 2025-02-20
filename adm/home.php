<?php
    include "topo.php";
?>


<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../home.css">

    <title>Olá, Compre um album da 1D!</title>
  </head>
  <body>
    <!-- Topo -->
    <div id="cimaheader" class="container-fluid text-light p-2 text-center"> 
      Álbuns da ONE DIRECTION 
    </div>

    <!-- Menu -->
    <nav id="header" class="navbar navbar-expand-lg ">
      <a class="navbar-brand" href="#">
        <a href="https://www.instagram.com/onedirection" target="_blank">1D</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home<span class="sr-only">(pag atual)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="comprar.html">Comprar</a>
          </li>
         </ul>

        <form class="form-inline my-2 my-lg-0">
            <a href="https://www.instagram.com/grazyy_veras" target="_blank">
              <img src="../img/bxl-instagram-alt.svg" alt="Instagram">
            </a>
        </form>
      </div>
    </nav>

    <h1 class="mt-4 mb- text-center">Compre álbuns da One Direction:</h1>

    <!-- carrossel -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="../img/1d.jpg" alt="Primeiro Slide">
          <div class="carousel-caption d-none d-md-block">
            <img src="../img/logo1db.png" alt="" class="logo1d">
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="../img/2d.jpg" alt="Segundo Slide">
          <div class="carousel-caption d-none d-md-block">
            <img src="../img/logo1dp.png" alt="" class="logo1d">
          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="../img/3d.jpg" alt="Terceiro Slide">
          <div class="carousel-caption d-none d-md-block">
            <img src="../img/logo1db.png" alt="" class="logo1d">
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Próximo</span>
      </a>
    </div>

    <h2 class="mt-4 mb-4 text-center">Temos:</h2>

    <!-- Cards -->
     <div class="container mt-2 mb-2">
      <div class="row">

        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 mt-2">
          <div class="card">
            <img class="card-img-top" src="../img/album1.webp" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title"><strong>Up All Night</strong></h5>
              <p class="card-text">Feito por One Direction em 2012.</p>
              <a href="comprar.html" class="btn btn-primary">Comprar</a>
            </div>
          </div>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 mt-2">
          <div class="card">
            <img class="card-img-top" src="../img/albumn2.avif" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title"><strong>Take Me Home</strong></h5>
              <p class="card-text">Feito por One Direction em 2012.</p>
              <a href="comprar.html" class="btn btn-primary">Comprar</a>
            </div>
          </div>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 mt-2">
          <div class="card">
            <img class="card-img-top" src="../img/album3.jpg" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title"><strong>Midnight Memories</strong></h5>
              <p class="card-text">Feito por One Direction em 2013.</p>
              <a href="comprar.html" class="btn btn-primary">Comprar</a>
            </div>
          </div>
        </div>

        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 mt-2">
          <div class="card">
            <img class="card-img-top" src="../img/album4.webp" alt="Imagem de capa do card">
            <div class="card-body">
              <h5 class="card-title "><strong>Midnight Memories</strong></h5>
              <p class="card-text">Feito por One Direction em 2014.</p>
              <a href="comprar.html" class="btn btn-primary">Comprar</a>
            </div>
          </div>
        </div>

        
      </div>
     </div>

     <h2 class="mt-4 mb-4 text-center">Integrantes:</h2>

    <!-- Grid -->
     <div class="container mt-3">
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 mt-2">
          <img src="img/niall.png" alt="">
        </div>

        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 mt-2">
          <img src="img/harry.png" alt="">
        </div>

        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 mt-2">
          <img src="img/louis.png" alt="">
        </div>
        
        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-3 mt-2">
          <img src="img/liam.png" alt="">
        </div>
      </div>
     </div>
     <div>
      <h3 class="mt-3 mb-3 text-center">Quer agendar um horario pra maquiagem? <a href="aplicação Jeany 1etapa/index.html">Aperte aqui!</a></h3>
    </div>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
  </body>
</html>

<?php
    include "rodape.php";
?>
