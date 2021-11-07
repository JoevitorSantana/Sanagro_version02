<?php
    session_start();
    include_once("conexao.php");

    $iduser = $_POST['tUser'];
    $nome = $_POST['tNome'];
    $fazenda = $_POST['tFarm'];
    $cnpj = $_POST['tCnpj'];
    $contato = $_POST['tCont'];
    $endereco = $_POST['tAddress'];
    $cidade = $_POST['tCidade'];
    $uf = $_POST['tUf'];

    $sql = "insert into customers(name, cpf, contact, address, city, uf, id_farm, created_at, id) values('$nome', '$cnpj', '$contato', '$endereco', '$cidade', '$uf', '$fazenda', NOW(), '$iduser')";
    $query = mysqli_query($conn, $sql);

    header("Location: ../clientes.php");
?>