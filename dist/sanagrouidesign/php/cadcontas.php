<?php
    session_start();
    include_once("conexao.php");

    $iduser = $_POST['tUser'];
    $descricao = $_POST['tNome'];
    $fornecedor = $_POST['tFornecedor'];
    $valor = $_POST['tValor'];
    $prestacao = $_POST['tPrestacao'];
    $valorprestacao = $_POST['tValorprestacao'];
    $status = $_POST['tStatus'];
    $vencimento = $_POST['tDtend'];

    $sql = "insert into contaapagar (description, value, installments, installment_value, status, expiration, id_providers, id)
            values('$descricao', '$valor', '$prestacao', '$valorprestacao', '$status', '$vencimento', '$fornecedor', '$iduser')";
    $query = mysqli_query($conn, $sql);

    header("Location: ../contasapagar.php");
?>