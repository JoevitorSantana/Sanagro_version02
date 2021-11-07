<?php
    session_start();
    include_once("conexao.php");

    $cod = $_POST['tCod'];
    $descricao = $_POST['tNome'];
    $marca = $_POST['tMarca'];
    $valor = $_POST['tValor'];
    $valortotal = $_POST['tValorTotal'];
    $quantidade = $_POST['tQuantidade'];
    $metrica = $_POST['tUnidade'];
    $fazenda = $_POST['tFarm'];

    $sql = "update product set description='$descricao', brand='$marca', unit_value='$valor', value='$valortotal', quantity='$quantidade', metric='$metrica', id_farm='$fazenda' where id_product='$cod'";
    $query = mysqli_query($conn, $sql);

    header("Location: ../estoque.php");
