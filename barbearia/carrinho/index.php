<?php
if (!isset($_SESSION)) session_start(); //se a sessão n for iniciado
if (!isset($_SESSION["user"])) //se a sessão "user" n for iniciado 
{
  session_destroy(); //destroi a sessão
  header("Location: ../login/index.php"); //manda o user pro index
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Carrinho</title>
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
            <a class="nav-link active" aria-current="page" href="../home/index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../produtos/produtos.html">Produtos e Serviços</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../agendamento/agendamento.php">Realizar Agendamento</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Área do Cliente
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Meus dados</a></li>
              <li><a class="dropdown-item" href="#">Histórico de atendimentos</a></li>
              <li><a class="dropdown-item" href="../carrinho/index.php">Carrinho</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<br/>
    <center><h3>Carrinho</h3></center>
    <br/>
    <table class="table border border-black">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome Cliente</th>
      <th scope="col">Produto/Servico</th>
      <th scope="col">Quantidade</th>
      <th scope="col">Total</th>
    </tr>
  </thead>
    <?php

    include 'conecta.php';
    $query = mysqli_query($con, "SELECT * FROM carrinho");
    if ($query->num_rows > 0) {
        while ($carrinho = $query->fetch_array()) {
            $id = $carrinho['id'];
            echo '<tr>';
            echo '<th scope="row">' . $carrinho['id'] . '</th>';
            echo '<td>' . $carrinho['nome_cliente'] . '</td>';
            echo '<td>' . $carrinho['produto_servico'] . '</td>';
            echo '<td>' . $carrinho['quantidade'] . '</td>';
            echo '<td>' . $carrinho['total'] . '</td>';
           
        }
    }

    ?>
    

</body>
</html>