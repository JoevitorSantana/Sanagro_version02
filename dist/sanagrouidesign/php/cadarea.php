<?php
    session_start();
    include_once("conexao.php");
  
        $iduser = $_POST['tUser'];
        $nome = $_POST['tNome'];
        $size = $_POST['tSize'];
        $unit = $_POST['tUnit'];
        $farm = $_POST['tFarm'];

        $sql = "insert into area02 (ar_name, size, metric, ar_status, id_farm, created_at, id) VALUES ('$nome', '$size', '$unit', 'Livre', '$farm', NOW(), '$iduser')";
        $query = mysqli_query($conn, $sql);

        header("Location: ../areas.php");
?>