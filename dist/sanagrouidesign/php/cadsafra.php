<?php
    session_start();
    include_once("conexao.php");

    $iduser = $_POST['tUser'];
    $nome = $_POST['tNome'];
    $cultivo = $_POST['tCultivo'];
    //$fazenda = $_POST['tFarm'];
    $area = $_POST['tArea'];
    $dataini = $_POST['tDtini'];
    $dataend = $_POST['tDtend'];

    $sql = "insert into crop (name, dtini, dtend, cultive, cro_status, id_area, created_at, id) values ('$nome','$dataini','$dataend','$cultivo', 'Em andamento', '$area', NOW(), '$iduser')";
    $query = mysqli_query($conn, $sql);

    $set = "update area02 set ar_status='Em uso' where id_area='$area'";
    $setstate = mysqli_query($conn, $set);

    header("Location: ../safras.php");

?>