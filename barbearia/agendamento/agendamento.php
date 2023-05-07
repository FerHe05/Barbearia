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
<html>

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand"><span style="color:blue">M</span>oderna</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
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


    <?php

    include 'conecta.php';

    $query = mysqli_query($con, "SELECT * FROM usuario");
    if ($query->num_rows > 0) {
        while ($usuario = $query->fetch_array()) {
            $id = $usuario['id'];
        }
    }

    $resultado = mysqli_query($con, "SELECT nome FROM usuario WHERE id = $id");

    if (!$resultado) {
        echo "Erro ao executar a consulta: " . mysqli_error($con);
        exit;
    }
    $linha = mysqli_fetch_assoc($resultado);

    $resultado2 = mysqli_query($con, "SELECT cpf FROM usuario WHERE id = $id");

    if (!$resultado2) {
        echo "Erro ao executar a consulta: " . mysqli_error($con);
        exit;
    }
    $linha2 = mysqli_fetch_assoc($resultado2);
    //trazer dados do usuario

    ?>

    <div class="container">
        <div class="row ">
            <div class="col-sm-6 offset-sm-3 ">
                <div class="shadow p-3 mb-5 bg-dark rounded ">
                    <!--Cliente-->

                    <center>
                        <h4 style="color:white;">Cliente</h4>
                    </center>
                    <form class="row g-3" action="cadastra_agendamento.php" method="post">
                        <div class="col-md-6">
                            <label class="form-label text-white">Nome</label>
                            <input type="text" value="<?php echo $linha['nome']; ?>" placeholder="" class="form-control" id="nome">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label text-white">CPF</label>
                            <input type="number" value="<?php echo $linha2['cpf']; ?>" class="form-control" id="cpf">
                        </div>
                        <!--Cliente-->
                        <center>
                            <h4 style="color:white;">Agendamento</h4>
                        </center>
                        <label class="text-white"><b>Data</b></label>
                        <input type="date" name="data" placeholder="Digite a data para agendar" required="required" class="form-control" />
                        <br />
                        <label class="text-white"><b>Hora</b></label>
                        <input type="time" name="hora" placeholder="Digite a hora para agendar" required="required" class="form-control" />
                        <br />
                        <!--<input type="submit" value="Cadastrar" class="btn btn-outline-success" name='cadastrar' />
                    </form>-->


                        <!--Cliente-->


                        <div class="modal-body" style="color:white">
                            <center>
                                <h1>Serviços</h1>
                                <p>Escolha os serviços desejados!</p>
                            </center>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="servicos[]" value="30">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Cabelo = R$ 30,00
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="servicos[]" value="25">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Barba = R$ 25,00
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="servicos[]" value="50">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Cabelo e barba = R$ 50,00
                                </label>
                            </div>
                        </div>


                        <!--Pagamento-->
                        <center>
                            <h4 style="color:white">Pagamento</h4>
                            <p style="color:white">Escolha a forma de pagamento!</p>
                        </center>

                        <div class="col-md-6">
                            <label class="form-label" style="color:white">Forma de Pagamento</label>
                            <select id="inputState" class="form-select">
                                <option selected>Pagamento presencial</option>
                                <option>Pix</option>
                                <options id="presencial">Cartão de Crédito</option>
                                    <option>Boleto Bancário</option>
                            </select>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" style="color:white">Código Promocional</label>
                            <input type="text" class="form-control" id="inputZip">
                        </div>
                        <br />
                        <input type="submit" name="btnPagamento" value="Realizar Pagamento" class="btn btn-outline-success">

                        <!--Serviços-->

                    </form>
                    <?php
                    if (isset($_POST['btnPagamento'])) {

                        echo "<script language='javascript' type/javascript'>
            alert('Pagamento realizado com sucesso!');
            window.location.href='../home/index.html';
            </script>";
                    }
                    ?>
                </div>
            </div>


        </div><!--shadow-->
    </div><!--col-->
    </div><!--row-->
    </div><!--container-->
</body>

</html>