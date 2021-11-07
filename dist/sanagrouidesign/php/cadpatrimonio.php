<?php
    session_start();
    include_once("conexao.php");

    $iduser = $_POST['tUser'];
    $nome = $_POST['tNome'];
    $tipo = $_POST['tTipo'];
    $valor = $_POST['tValor'];
    $fazenda = $_POST['tFarm'];

    $sql = "insert into patrimony(name, type, value, id_farm, created_at, id) values('$nome', '$tipo', '$valor', '$fazenda', NOW(), '$iduser')";
    $query = mysqli_query($conn, $sql);

    header("Location: ../patrimonios.php");
?>