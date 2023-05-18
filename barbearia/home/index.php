
<?php
if (!isset($_SESSION)) session_start(); //se a sessão n for iniciado
if (!isset($_SESSION["user"])) //se a sessão "user" n for iniciado 
{
    session_destroy(); //destroi a sessão
    header("Location: index.php"); //manda o user pro index
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="css/style1.css">
  <title>Document</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" ><span style="color:blue">M</span>oderna</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../home/index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../produtos/produtos.html">Produtos e Serviços</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../agendamento/agendamento.php">Realizar Agendamento</a>
          </li>
        <!--  <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Área do Cliente
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Meus dados</a></li>
              <li><a class="dropdown-item" href="#">Histórico de atendimentos</a></li>
              <li><a class="dropdown-item" href="../carrinho/index.php">Carrinho</a></li>
            </ul>-->
            <li class="nav-item">
            <a class="nav-link" href="../login/index.html">Login / Sign Up</a>
          </li>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <!--Nav-->

  <!--Carrousel-->
  <section class="carousel">
   
      <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="imagens/img1.jfif" class="d-block w-100" alt="">
          </div>
          <div class="carousel-item">
            <img src="imagens/img2.jpeg" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="imagens/img3.jpeg" class="d-block w-100" alt="">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

  </section>
  <!--Carrousel-->

  <!--Sobre nós-->
  <section class="sobre-nos">
    <center>
      <h1>Sobre Nós</h1>
    </center>
    <ul>
      <p>Somos a barbearia Moderna, nossa missão é com você!<br /> Desde 1910 atendendo os mais diversos gostos e
        estilos. Venha fazer parte dessa expêriencia única!</p>
      <br />
    </ul>

    <div class="card w-50 mb-3 shadow p-3 mb-5 bg-body-tertiary rounded" style="margin-left: 100px;">
      <div class="card-body">
        <h5 class="card-title">A barbearia tech!</h5>
        <p class="card-text" style="color: black;">Eleita a barbaberia mais conectada da região</p>
        <a href="#" class="btn btn-primary">Conheça nossos serviços -></a>
      </div>
    </div>
    <div class="card w-50 mb-3 shadow p-3 mb-5 bg-body-tertiary rounded" style=" margin-left: 600px;">
      <div class="card-body">
        <h5 class="card-title">Produtos originais!</h5>
        <p class="card-text" style="color: black;">A única com a maior classificação de satisfação nos produtos produzidos...</p>
        <a href="#" class="btn btn-primary">Conheça nossos produtos -></a>
      </div>
    </div>

  </section>
  <!--Sobre nós-->

  <!--Nossos Profissionais-->

  <section class="nossos-profissionais" style="color: white;">
    <div class="container">
      <center>
        <h1>Nossos Profissionais</h1>
      </center>
      <div class="cards">
        <div class="row">
          <div class="col-3">
            <div class="card" style="width: 18rem;">
              <img src="imagens/img4.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Mais de 10 anos de experiência, ja participou de diversos cursos e palestras na
                  área.
                </p>
              </div>
            </div>
          </div>

          <div class="col-3">
            <div class="card" style="width: 18rem;">
              <img src="imagens/img5.jpg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Já realizou diversos casamentos, inclusive o dele! Apaixonado pelo que faz.</p>
              </div>
            </div>
          </div>

          <div class="col-3">
            <div class="card" style="width: 18rem;">
              <img src="imagens/img6.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Além de suas habilidades como barbeiro é capaz de realizar diversos sonhos!</p>
              </div>
            </div>
          </div>

          <div class="col-3">
            <div class="card" style="width: 18rem;">
              <img src="imagens/img7.jpeg" class="card-img-top" alt="...">
              <div class="card-body">
                <p class="card-text">Um dos nossos dinossauros! Essa peça de museu já foi responsável por diversos
                  sorrisos!</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!--Nossos Profissionais-->

  <!--Onde nos encontrar-->
  <section class="onde-encontrar">
    <div class="container">
      <center>
        <h1>Onde nos encontrar?</h1>
      </center>

      <center>
        <iframe style="padding-top: 50px;"
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3660.0952670777474!2d-51.92285928418741!3d-23.457027863634615!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ecda095581d0cb%3A0xfddddcec0150f256!2sSenai%20-%20Maring%C3%A1%20CTM!5e0!3m2!1spt-BR!2sbr!4v1679514110325!5m2!1spt-BR!2sbr"
          width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"></iframe>
      </center>

    </div>

    <!--Roda Pé-->
    <section class="rodape">
      <footer class="bg-dark text-light">
        <div class="container-fluid py-3">
          <div class="row">
            <div class="col-4">
              <ul class="nav flex-column">

                <li>
                  <h4>Contato</h4>
                </li>
                <li class="nav-link"><a href="#"></a>4002-8922</li>
              </ul>
            </div>
            <div class="col-4">
              <h4>
                Nos siga em nossas redes sociais
              </h4>
              <ul class="nav">
                <li class="nav-link"><img style="width: 40px; height: 40px;" src="imagens/facebook.png" alt=""></li>
                <li class="nav-link"><img style="width: 40px; height: 40px;" src="imagens/instagram.png" alt=""></li>
                <li class="nav-link"><i class="fab fa-twitter fa-3x"></i></li>
                <li class="nav-link"><i class="fab fa-whatsapp fa-3x"></i></li>
              </ul>
            </div>
            <!--col-4-->
            <div class="col-4">
              <ul class="nav flex-column">
                <li>
                  <h4>Suporte</h4>
                </li>
                <li class="nav-link">4002-8923</li>
              </ul>
            </div>
          </div>
        </div><!--container-->
        
        
        
        <div class="text-center" style="background-color: #333; padding: 20px;">
          <P>&copy 2023 Copyright: Equipe 1, Senai TDS08</P>
      </footer>
    </section>
    <!--Roda Pé-->
</body>
</html>