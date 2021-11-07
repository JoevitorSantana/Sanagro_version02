<?php
    session_start();
    include_once("conexao.php");

    $iduser = $_POST['tUser'];
    $safra = $_POST['tSafra'];
    $datafim = $_POST['tDtend'];
    $unit = $_POST['tUnit'];
    $producao = $_POST['tProducao'];

    $sql = "insert into harvest(id_crop, dateend, production, metric, created_at, id) values('$safra', '$datafim', '$producao', '$unit', NOW(), '$iduser')";
    $query = mysqli_query($conn, $sql);

    $set = "update crop set cro_status='Finalizada' where id_crop='$safra'";
    $setstate = mysqli_query($conn, $set);

    $setarea = "update area02 set ar_status='Livre'
    where id_area=(select id_area from crop where id_crop='$safra' and id='$iduser')";
    $setstatearea = mysqli_query($conn, $setarea);

    header("Location: ../colheitas.php");
?>