<?php
    session_start();
    include_once("conexao.php");
    
    $id = filter_input(INPUT_POST, 'tUser', FILTER_SANITIZE_NUMBER_INT);
    $nome = filter_input(INPUT_POST, 'tNome', FILTER_SANITIZE_STRING);
    $sobrenome = filter_input(INPUT_POST, 'tSobrenome', FILTER_SANITIZE_STRING);
    $email = $_POST['tEmail'];
    $senha = $_POST['tSenha'];

    $sql = "update usuarios set nome='$nome', lastname='$sobrenome', usuario='$email', senha_usuario='$senha' where id='$id'";
    $query = mysqli_query($conn, $sql);

    header("Location: ../profile.php");

?>      