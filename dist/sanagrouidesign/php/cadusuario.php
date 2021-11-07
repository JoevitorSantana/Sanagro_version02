<?php
    session_start();
    include_once("conexao.php");
  
        $nome = filter_input(INPUT_POST, 'tNome', FILTER_SANITIZE_STRING);
        $last = $_POST['tLast'];
        $email = $_POST['tEmail'];
        $senha = $_POST['tSenha'];

    $sql = "insert into usuarios (nome, lastname, usuario, senha_usuario, created_at) VALUES ('$nome', '$last', '$email', '$senha', NOW())";
        $query = mysqli_query($conn, $sql);

        header("Location: ../index.php");
?>