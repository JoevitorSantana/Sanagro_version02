<?php
    session_start();
    include_once("conexao.php");

    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
    $sql = "delete from employees where id_emp='$id'";
    $query = mysqli_query($conn, $sql);

    header("Location: ../funcionarios.php");
?>