<?php
    session_start();
    include_once("conexao.php");
        
        $cod = $_POST['tUser'];
        $nome = filter_input(INPUT_POST, 'tNome', FILTER_SANITIZE_STRING);
        $gender = $_POST['tType'];
        $cpf = $_POST['tCpf'];
        $cargo = $_POST['tCargo'];
        $salario = $_POST['tSalario'];
        $contato = $_POST['tCont'];
        $address = $_POST['tAddress'];
        $farm = $_POST['tFarm'];
        $cidade = $_POST['tCidade'];
        $uf = $_POST['tUf'];



        $sql = "insert into employees (name, gender, cpf, office, contact, address, city, uf, payment, created_at, id, id_farm) VALUES ('$nome', '$gender', '$cpf', '$cargo','$contato', '$address', '$cidade', '$uf', '$salario', NOW(), '$cod', '$farm')";
        $query = mysqli_query($conn, $sql);

        header("Location: ../funcionarios.php");
?>