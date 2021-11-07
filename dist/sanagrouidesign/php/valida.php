<?php

    if ((empty($_POST['tUser'])) or (empty($_POST['tSenha'])))
    {
        header("Location:../index.php?Erro=1");
    }
    else
    {
        $email = $_POST['tUser'];
        $id = mysqli_connect('localhost','root','');
        $con = mysqli_select_db($id, 'sanagro01');
        $sql = "select * from users where email='$email'";

        $sucesso = mysqli_query($id, $sql);

        while ($row = mysqli_fetch_array($sucesso, MYSQLI_NUM))
        {
            $senha = $_POST['tSenha'];
            $senhabanco = $row[3];
            if ($senha == $senhabanco)
            {
                header("Location:../home.php");
            }
            else
            {
                header("Location:../index.php?Erro=1");
            }
        }
    }
    mysql_close($id);
?>