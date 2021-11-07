<?php
    session_start();
    ob_start();
    include_once 'php/conexaologin.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Criar Conta</title>

    <!-- Custom fonts for this template-->
    <link rel="icon" type="image/x-icon" href="../assets/img/portfolionovas/agriculturaicon.ico" />

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block" style="
                                background: url('img/tratorveio.jpg');
                                background-position: center;
                                background-size: cover;
                            "></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Criar Conta</h1>
                            </div>                            
                            <form class="user" action="php/cadusuario.php" method="POST">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="tNome" id="exampleFirstName"
                                            placeholder="Primeiro Nome" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="tLast" id="exampleLastName"
                                            placeholder="Último Nome" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" name="tEmail" id="exampleInputEmail"
                                        placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                        <input type="password" name="tSenha" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Senha" required>
                                </div>
                                <input class="btn btn-user btn-block" name="SendLogin"
                                            style="background-color: limegreen; color: #fff;" type="submit"
                                            value="Registrar Conta">

                                        <hr>
                                <hr>
                                <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Entrar com Google
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Entrar com Facebook
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" style="color: limegreen;" href="index.php">Já tem uma Conta?</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>