<?php
    session_start();
    include_once("conexao.php");

    $cod = $_POST['tCod'];
    $nome = $_POST['tNome'];
    $cultivo = $_POST['tCultivo'];
    //$fazenda = $_POST['tFarm'];
    $area = $_POST['tArea'];
    $dataini = $_POST['tDtini'];
    $dataend = $_POST['tDtend'];

    $sql = "update crop set name='$nome', dtini='$dataini', dtend='$dataend', cultive='$cultivo', id_area='$area' where id_crop = '$cod'";
    $query = mysqli_query($conn, $sql);

    header("Location: ../safras.php");
?>