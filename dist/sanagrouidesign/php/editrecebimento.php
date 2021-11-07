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

    $sql = "update contaareceber set description='$descricao', value='$valor', installments='$prestacao', installment_value='$valorprestacao', status='$status', expiration='$vencimento', id_customer='$fornecedor' where id_car='$iduser'";
    $query = mysqli_query($conn, $sql);

    header("Location: ../contasareceber.php");
?>