<?php
    session_start();
    include_once("conexao.php");

    $iduser = $_POST['tUser'];
    $descricao = $_POST['tNome'];
    $marca = $_POST['tMarca'];
    $valor = $_POST['tValor'];
    $valortotal = $_POST['tValorTotal'];
    $quantidade = $_POST['tQuantidade'];
    $metrica = $_POST['tUnidade'];
    $fazenda = $_POST['tFarm'];


    $sql = "insert into product(description, brand, unit_value, value, quantity, metric, id_farm, created_at, id) values('$descricao', '$marca', '$valor', '$valortotal', '$quantidade', '$metrica', '$fazenda', NOW(),'$iduser')";
    $query = mysqli_query($conn, $sql);

    header("Location: ../estoque.php");

?>