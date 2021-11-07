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

    $sql = "update contaapagar set description='$descricao', value='$valor', installments='$prestacao', installment_value='$valorprestacao', status='$status', expiration='$vencimento', id_providers='$fornecedor' where id_cap='$iduser'";
    $query = mysqli_query($conn, $sql);

    header("Location: ../contasapagar.php");
?>