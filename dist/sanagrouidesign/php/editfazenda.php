<?php
    session_start();
    include_once("conexao.php");

    $cod = $_POST['tCod'];
    $nome = $_POST['tNome'];
    $endereco = $_POST['tEndereco'];
    $cidade = $_POST['tCidade'];
    $uf = $_POST['tUf'];

    $sql = "update farm set name='$nome', address='$endereco', city='$cidade', uf='$uf' where id_farm='$cod'";
    $query = mysqli_query($conn, $sql);

    header("Location: ../fazendas.php");
?>