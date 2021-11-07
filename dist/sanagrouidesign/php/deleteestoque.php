<?php
    session_start();
    include_once("conexao.php");

    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    $sql = "delete from product where id_product='$id'";
    $query = mysqli_query($conn, $sql);

    header("Location: ../estoque.php");
?>