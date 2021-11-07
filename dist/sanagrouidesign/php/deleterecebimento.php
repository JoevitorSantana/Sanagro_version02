<?php
    session_start();
    include_once("conexao.php");

    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    $sql = "delete from contaareceber where id_car='$id'";
    $query = mysqli_query($conn, $sql);

    header("Location: ../contasareceber.php");
?>