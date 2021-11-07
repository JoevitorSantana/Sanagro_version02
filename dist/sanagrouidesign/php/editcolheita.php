<?php
    session_start();
    include_once("conexao.php");

    $cod = $_POST['tCod'];
    $safra = $_POST['tSafra'];
    $datafim = $_POST['tDtend'];
    $producao = $_POST['tProducao'];
    $unit = $_POST['tUnit'];

    $sql = "update harvest set id_crop='$safra', dateend='$datafim', production='$producao', metric='$unit' where id_harvest='$cod'";
    $query = mysqli_query($conn, $sql);

    header("Location: ../colheitas.php");

?>