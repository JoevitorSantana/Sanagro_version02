<?php
    session_start();
    include_once("conexao.php");
    
    $cod = filter_input(INPUT_POST, 'tCod', FILTER_SANITIZE_NUMBER_INT);
    $nome = filter_input(INPUT_POST, 'tNome', FILTER_SANITIZE_STRING);
    $size = $_POST['tSize'];
    $unit = $_POST['tUnit'];
    $farm = $_POST['cFarm'];

    $sql = "update area02 set ar_name='$nome', size='$size', metric='$unit', id_farm='$farm' where id_area='$cod'";
    $query = mysqli_query($conn, $sql);

    header("Location: ../areas.php");

?>        