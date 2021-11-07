<?php
session_start();
ob_start();
unset($_SESSION['id'], $_SESSION['nome']);
//$_SESSION['msg'] = "<p style='color: green'>Você está Deslogado!</p>";

header("Location: ../../../index.html");