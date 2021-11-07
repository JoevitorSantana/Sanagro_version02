+<?php
    session_start();
    include_once("conexao.php");
        $id = filter_input(INPUT_POST, 'tCod', FILTER_SANITIZE_NUMBER_INT);
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


        $sql = "UPDATE employees SET name='$nome', gender='$gender', cpf='$cpf', office='$cargo', contact='$contato', address='$address', city='$cidade', uf='$uf', payment='$salario', id_farm='$farm' where id_emp='$id'";
        $query = mysqli_query($conn, $sql);

        header("Location: ../funcionarios.php");
?>