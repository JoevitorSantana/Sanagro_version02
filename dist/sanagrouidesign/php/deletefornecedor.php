<?php
    session_start();
    include_once("conexao.php");

    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    $sql = "delete from providers where id_providers='$id'";
    $query = mysqli_query($conn, $sql);

    header("Location: ../fornecedores.php");
?>