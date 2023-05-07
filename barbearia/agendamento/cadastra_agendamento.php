<?php

include "conecta.php";


$data = $_POST["data"];
$hora = $_POST["hora"];

//receber id do cliente
$query = mysqli_query($con, "SELECT * FROM usuario");
if ($query->num_rows > 0) {
    while ($usuario = $query->fetch_array()) {
        $usuario_id = $usuario['id'];
    }
}


if (isset($_POST['servicos'])) {
    $soma = 0;
    foreach ($_POST['servicos'] as $valor) {
        $soma += $valor;
    }
}
if($soma == 30){
    $sql = "INSERT INTO agendamento(usuario_id,servicos,total,data,hora) VALUES ('{$usuario_id}','Cabelo','{$soma}','{$data}','{$hora}')";
        if (mysqli_query($con, $sql)) {
            echo "<script language='javascript' type/javascript'>
            alert('Agendamento cadastrado!');
            window.location.href='agendamento1.php';
            </script>";
        } else {
            echo "<script language='javascript' type/javascript'>
            alert('Agendamento não cadastrado!');
            window.location.href='agendamento1.php';
            </script>";
        }
}
if($soma == 25){
    $sql = "INSERT INTO agendamento(usuario_id,servicos,total,data,hora) VALUES ('{$usuario_id}','Barba','{$soma}','{$data}','{$hora}')";
    if (mysqli_query($con, $sql)) {
        echo "<script language='javascript' type/javascript'>
    alert('Agendamento cadastrado!!');
    window.location.href='agendamento1.php';
    </script>";
    } else {
        echo "<script language='javascript' type/javascript'>
    alert('Agendamento não cadastrado!');
    window.location.href='agendamento1.php';
    </script>";
    }
}
if($soma == 50){
    $sql = "INSERT INTO agendamento(usuario_id,servicos,total,data,hora) VALUES ('{$usuario_id}','Cabelo e barba','{$soma}','{$data}','{$hora}')";
    if (mysqli_query($con, $sql)) {
        echo "<script language='javascript' type/javascript'>
    alert('Agendamento cadastrado!!');
    window.location.href='agendamento1.php';
    </script>";
    } else {
        echo "<script language='javascript' type/javascript'>
    alert('Agendamento não cadastrado!');
    window.location.href='agendamento1.php';
    </script>";
    }
}

    else{
        echo "<script language='javascript' type/javascript'>
        alert('Selecione ao menos uma opção!');
        window.location.href='agendamento1.php';
        </script>";
    }
   


/*
$sql = "INSERT INTO agendamento(usuario_id,data,hora,total) VALUES ('{$usuario_id}','{$data}','{$hora}','{$soma}')";
if (mysqli_query($con, $sql)) {
    echo "<script language='javascript' type/javascript'>
            alert('Data e hora cadastrados!');
            window.location.href='agendamento1.php';
            </script>";
} else {
    echo "<script language='javascript' type/javascript'>
            alert('Data e hora não podem ser cadastrados!');
            window.location.href='agendamento1.php';
            </script>";
}*/
