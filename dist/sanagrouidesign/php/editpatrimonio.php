<?php
    session_start();
    include_once("conexao.php");

    $cod = $_POST['tUser'];
    $nome = $_POST['tNome'];
    $tipo = $_POST['tTipo'];
    $valor = $_POST['tValor'];
    $fazenda = $_POST['tFarm'];

    $sql = "update patrimony set name='$nome', type='$tipo', value='$valor', id_farm='$fazenda' where id_patrimony='$cod'";
    $query = mysqli_query($conn, $sql);

    header("Location: ../patrimonios.php");
?>