<?php
session_start();
ob_start();
include_once 'php/conexao.php';

if((!isset($_SESSION['id'])) AND (!isset($_SESSION['nome']))){
    $_SESSION['msg'] = "<p style='color: #ff0000'>Erro: Necessário realizar o login para acessar a página!</p>";
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Perfil</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/x-icon" href="../assets/img/portfolionovas/agriculturaicon.ico" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>

<body id="page-top">
    <style>
        .chart-area{
            height: 25rem !important;
        }        
    </style>

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar"
            style="background-color: limegreen;">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="home.php">
            <img src="../assets/img/agricultura.png" style="width: 48px; height: 48px;">
                <div class="sidebar-brand-text mx-3"> SanAgro</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="home.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Meus Dashboards</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Ferramentas
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            
            <li class="nav-item">
                <a class="nav-link collapsed" href="fazendas.php">
                    <i class="fas fa-warehouse"></i>
                    <span>Fazendas</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="areas.php">
                    <i class="far fa-map"></i>
                    <span>Áreas</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCrops"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fab fa-pagelines"></i>
                    <span>Safras e Colheitas</span>
                </a>
                <div id="collapseCrops" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Opções</h6>
                        <a class="collapse-item" href="colheitas.php">Colheitas</a>
                        <a class="collapse-item" href="safras.php">Safras</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFinance"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-donate"></i>
                    <span>Financeiro</span>
                </a>
                <div id="collapseFinance" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Opções</h6>
                        <a class="collapse-item" href="contasapagar.php">Contas à Pagar</a>
                        <a class="collapse-item" href="contasareceber.php">Contas à Receber</a>
                        <a class="collapse-item" href="clientes.php">Clientes</a>
                        <a class="collapse-item" href="fornecedores.php">Fornecedores</a>
                    </div>
                </div>
            </li>

            

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseStock"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-boxes"></i>
                    <span>Estoque e Patrimônios</span>
                </a>
                <div id="collapseStock" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Opções</h6>
                        <a class="collapse-item" href="patrimonios.php">Patrimônios</a>
                        <a class="collapse-item" href="estoque.php">Estoque</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="funcionarios.php">
                <i class="fas fa-users"></i>
                    <span>Funcionários</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="relatorios.php">
                <i class="fas fa-chart-bar"></i>
                    <span>Relatórios</span>
                </a>
            </li>




            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" style="color: limegreen;"
                        class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                                           

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span
                                    class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['nome']; ?></span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="profile.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Perfil
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Sair
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div id="chart_div"></div>

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Meu Perfil</h1>                        
                    </div>

                    <?php
                        $id = $_SESSION['id'];
                        $sql = "Select * from usuarios where id='$id'";

                        $query = mysqli_query($conn, $sql);                        

                        while ($row = mysqli_fetch_assoc($query)) 
                            {
                    ?>

                    <!-- Content Row -->
                    <div class="row" style="margin-bottom: 40px !important;">
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-12 col-md-12 mb-12">
                            <div class="card shadow h-100 py-2" style="border-left:4px solid limegreen;">
                                <div class="card-body" style="margin-bottom: 40px !important; ">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="profile-image" style="text-align: center;">
                                                <img style="width: 180px; height: 180px;" src="img/undraw_profile.svg"/>    
                                            </div>
                                            <div class="profile-name" style="text-align: center;">
                                                <h1><?php echo $_SESSION['nome']; ?></h1>   
                                            </div>                                            
                                            <form class="row g-3" action="./php/editusuario.php" style="justify-content: center;" method="POST">
                                            <div class="mb-3">                                                
                                                <input type="hidden" class="form-control" name="tUser"
                                                    value="<?php echo $_SESSION['id']; ?>">
                                            </div>
                                            
                                            <div class="col-md-7">
                                                <label for="exampleFormControlInput1" class="form-label">Primeiro Nome</label>
                                                <input type="text" class="form-control" name="tNome" value="<?php echo $row['nome'] ?>">
                                            </div>  
                                            <div class="col-md-7">
                                                <label for="exampleFormControlInput1" class="form-label">Sobrenome</label>
                                                <input type="text" class="form-control" name="tSobrenome" value="<?php echo $row['lastname'] ?>">
                                            </div>   
                                            <div class="col-md-7">
                                                <label for="exampleFormControlInput1" class="form-label">Email</label>
                                                <input type="text" class="form-control" name="tEmail" value="<?php echo $row['usuario'] ?>">
                                            </div>  
                                            <div class="col-md-7">
                                                <label for="exampleFormControlInput1" class="form-label">Senha</label>
                                                <input type="password" class="form-control" name="tSenha" value="<?php echo $row['senha_usuario'] ?>"><br>
                                            </div>   
                                            <div class="col-md-7" >
                                                <a href="home.php"><button type="button" class="btn btn-secondary"
                                                     data-bs-dismiss="modal">Voltar</button></a>
                                                <input class="btn btn-primary"
                                                    style="background-color: limegreen; border: none;" type="submit"
                                                    value="Atualizar">
                                            </div>
                                            
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>                                                
                    </div>
                    <?php } ?>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Encerrar Sessão</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Deseja realmente sair da aplicação?</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" style="background-color: limegreen; border:none;"
                        href="php/sair.php">Sair</a>
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

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>

</body>

</html>