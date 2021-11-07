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

    $sql = "update customers set name='$nome', cpf='$cnpj', contact='$contato', address='$endereco', city='$cidade', uf='$uf', id_farm='$fazenda' where id_customer='$iduser'";
    $query = mysqli_query($conn, $sql);

    header("Location: ../clientes.php");
?>