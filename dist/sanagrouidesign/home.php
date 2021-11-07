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

    <title>Home</title>

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
                   
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Informações Gerais</h1>
                        <a href="relatorios.php" class="d-none d-sm-inline-block btn btn-sm shadow-sm" style="background-color: limegreen; color: #fff;"><i class="fas fa-chart-bar"></i> Gerar Relatório</a>
                    </div>

                    

                    <!-- Content Row -->
                    <div class="row">
                        <?php
                            $iduser = $_SESSION['id'];
                            $sql = "select count(id_farm)
                                    from farm
                                    where id='$iduser'";
                            $query = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_assoc($query);
                        ?>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card shadow h-100 py-2" style="border-left:4px solid limegreen;">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1" style="color: limegreen;">
                                                Fazendas</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php echo $row['count(id_farm)']?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-warehouse fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php
                            $iduser = $_SESSION['id'];
                            $sql = "select count(id_area)
                                    from area02
                                    where id='$iduser'";
                            $query = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_assoc($query);
                        ?>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card shadow h-100 py-2" style="border-left:4px solid limegreen;">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1" style="color: limegreen;">
                                                Áreas de Cultivo</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php echo $row['count(id_area)']?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-map-marked-alt fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php
                            $iduser = $_SESSION['id'];
                            $sql = "select count(id_crop)
                                    from crop
                                    where id='$iduser'";
                            $query = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_assoc($query);
                        ?>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card shadow h-100 py-2" style="border-left:4px solid limegreen;">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1" style="color: limegreen;">
                                                Safras Realizadas</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php echo $row['count(id_crop)']?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fab fa-pagelines fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php
                            $iduser = $_SESSION['id'];
                            $sql = "select count(id_harvest)
                                    from harvest
                                    where id='$iduser'";
                            $query = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_assoc($query);
                        ?>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card shadow h-100 py-2" style="border-left:4px solid limegreen;">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-uppercase mb-1" style="color: limegreen;">
                                                Colheitas Realizadas</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php echo $row['count(id_harvest)']?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-tractor fa-2x text-gray-300"></i>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Financeiro</h1>                        
                    </div>

                    

                    <!-- Content Row -->
                    <div class="row">
                        
                        <?php
                            $iduser = $_SESSION['id'];
                            $sql = "select count(id_cap)
                                    from contaapagar
                                    where status='Pendente' and id='$iduser'";
                            $query = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_assoc($query);
                        ?>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                Contas à Pagar</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php echo $row['count(id_cap)']?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-wallet fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php
                            $iduser = $_SESSION['id'];
                            $sql = "select format(sum(value),2,'de_DE')
                                    from contaapagar
                                    where status='Pendente' and id='$iduser'";
                            $query = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_assoc($query);
                        ?>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-danger shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                                Total de Dívidas</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                R$ <?php echo $row["format(sum(value),2,'de_DE')"]?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-file-invoice-dollar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php
                            $iduser = $_SESSION['id'];
                            $sql = "select count(id_car)
                                    from contaareceber
                                    where status='Pendente' and id='$iduser'";
                            $query = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_assoc($query);
                        ?>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Contas à Receber</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                <?php echo $row['count(id_car)']?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-donate fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php
                            $iduser = $_SESSION['id'];
                            $sql = "select format(sum(value),2,'de_DE')
                                    from contaareceber
                                    where status='Pendente' and id='$iduser'";
                            $query = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_assoc($query);
                        ?>

                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Total à Receber</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                R$ <?php echo $row["format(sum(value),2,'de_DE')"]?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-hand-holding-usd fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <!-- Content Row -->

                    <div class="row">
                    
                    <?php
                        require_once("php/conexaologin.php");

                        $iduser = $_SESSION['id'];

                        $stmt=$conn->prepare("select name, production from crop a, harvest b where a.id_crop=b.id_crop and a.id=$iduser
                        ORDER BY production desc LIMIT 5 ");
                        $stmt->execute();

                        $json = [];
                        $json2 = [];

                        while ($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                            extract($row);
                            $json[]=$name;
                            $json2[]=$production;
                        }
                        //echo json_encode($json);
                    ?>
                   

                        <!-- Area Chart -->
                        <div class="col-xl-8 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold" style="color: limegreen;">Gráfico de Produção</h6>

                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                    <canvas id="myChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <script>
                        // === include 'setup' then 'config' above ===
                        const DISPLAY = false;
                        var ctx = document.getElementById('myChart');
                        var ctx = document.getElementById('myChart').getContext('2d');
                        var myChart = new Chart(ctx, {
                        
                        type: 'bar',
                        data: {
                            labels: <?php echo json_encode($json)?>,
                            datasets: [{
                                label: 'Produção Safra(t)',
                                data: <?php echo json_encode($json2)?>,
                                backgroundColor: [
                                    '#32cd32',                                    
                                ],       
                                                         
                            }]
                        },
                        options: {
                            responsive: true,
                            maintainAspectRatio: false,
                            plugins: {
                                legend: {                                    
                                    labels: {
                                        font: {
                                            size: 10
                                        }
                                    }
                                }
                            },
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });
                    </script>

                        <!-- Pie Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold" style="color: limegreen;">Áreas mais produtivas</h6>                                  
                                </div>
                                <?php
                                    require_once("php/conexaologin.php");

                                    $iduser = $_SESSION['id'];
                                    /*select DISTINCT ar_name, sum(production)
                                    from area02 a, crop b, harvest c
                                    where c.id_crop=b.id_crop and b.id_area=a.id_area and c.id=2
                                    ORDER BY production desc LIMIT 5*/
                                    $stmt=$conn->prepare("select ar_name, production
                                    from area02 a, crop b, harvest c 
                                    where c.id_crop=b.id_crop and b.id_area=a.id_area and c.id='$iduser'
                                    ORDER BY production desc LIMIT 5 ");
                                    $stmt->execute();

                                    $json = [];
                                    $json2 = [];

                                    while ($row=$stmt->fetch(PDO::FETCH_ASSOC)){
                                        extract($row);
                                        $json[]=$ar_name;
                                        $json2[]=$production;
                                    }
                                    //echo json_encode($json);
                                ?>
                                
                                <!-- Card Body -->
                                <div class="card-body">                                    
                                        <div class="chart-area">
                                        <canvas id="myPieChart"></canvas>
                                    </div>
                                    <script>
                                        // === include 'setup' then 'config' above ===

                                        
                                        
                                        var ctx = document.getElementById('myPieChart');
                                        var ctx = document.getElementById('myPieChart').getContext('2d');
                                        var myChart = new Chart(ctx, {
                                        
                                        type: 'doughnut',
                                        data: {
                                            labels: <?php echo json_encode($json)?>,
                                            datasets: [{
                                                label: 'Produção Safra(t)',
                                                data: <?php echo json_encode($json2)?>,
                                                backgroundColor: [
                                                    '#32cd32', 
                                                    'red',
                                                    'blue',                                     
                                                    'orange',
                                                    'yellow',  
                                                ],       
                                                                        
                                            }]
                                        },
                                        options: {
                                            responsive: true,
                                            maintainAspectRatio: false,
                                            layout: {
                                                padding: {
                                                    top: 0
                                                }
                                            },                                            
                                            plugins: {
                                                legend: {                                                                                       
                                                    labels: {
                                                        font: {
                                                            size: 10
                                                        }
                                                    }
                                                }
                                            },
                                            scales: {
                                                y: {
                                                    beginAtZero: true
                                                }
                                            }
                                        }
                                    }
                                    );
                                    
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>                    

                    <!-- Content Row -->                    
            <!-- End of Footer -->

        </div>
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