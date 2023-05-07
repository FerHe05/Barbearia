<?php
    session_start();
    include 'conecta.php';
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];
    $logar = mysqli_query($con, "SELECT * FROM usuario WHERE cpf='$cpf' AND senha='$senha'");
    if(mysqli_num_rows($logar)>0)
    {
        $_SESSION["user"] = $_POST['cpf'];
        header('location:../home/index.html');
    }
    else 
    {
        echo ("<script>alert('Login ou senha incorretos! Tente novamente.');window.location.href='index.html';</script>");
    }
?>