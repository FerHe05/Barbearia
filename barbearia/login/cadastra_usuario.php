<?php

include 'conecta.php';

$nome=$_POST["nome"];
$cpf=$_POST["cpf"];
$email=$_POST["email"];
$senha=$_POST["senha"];

$dados_duplicados = mysqli_query($con,"SELECT * FROM usuario WHERE cpf='$cpf' || email='$email'");
if($dados_duplicados->num_rows >0){
    echo "<script language='javascript' type/javascript'>
    alert('Cpf ou Email já cadastrados! Tente novamente');
    window.location.href='index.html';
    </script>";
}else{
$sql = "INSERT INTO usuario(nome,cpf,email,senha) VALUES ('{$nome}','{$cpf}','{$email}','{$senha}')";
if (mysqli_query($con, $sql)) {
    echo "<script language='javascript' type/javascript'>
            alert('Usuário cadastrado!');
            window.location.href='index.html';
            </script>";
} else {
    echo "<script language='javascript' type/javascript'>
            alert('Usuário não cadastrados!');
            window.location.href='index.html';
            </script>";
}
}

?>