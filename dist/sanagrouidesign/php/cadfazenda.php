<?php
    session_start();
    include_once("conexao.php");

    $iduser = $_POST['tUser'];
    $nome = $_POST['tNome'];
    $endereco = $_POST['tEndereco'];
    $cidade = $_POST['tCidade'];
    $uf = $_POST['tUf'];

    $sql = "insert into farm(name, address, city, uf, created_at, id) values('$nome', '$endereco', '$cidade', '$uf', NOW(), '$iduser')";
    $query = mysqli_query($conn, $sql);

    header("Location: ../fazendas.php");
?>