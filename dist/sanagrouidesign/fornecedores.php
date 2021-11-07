<?php
session_start();
ob_start();
include_once 'php/conexao.php';

if((!isset($_SESSION['id'])) AND (!isset($_SESSION['nome']))){
    $_SESSION['msg'] = "<p style='color: #ff0000'>Erro: Necessário realizar o login para acessar a página!</p>";
    header("Location: login.php");
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

    <title>Fornecedores</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="icon" type="image/x-icon" href="../assets/img/portfolionovas/agriculturaicon.ico" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar"
            style="background-color: limegreen;">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="home.php">
            <img src="../assets/img/agricultura.png" style="width: 48px; height: 48px;">
                <div class="sidebar-brand-text mx-3">SanAgro</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0" style="background-color: #7fe084;">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="home.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Meus Dashboards</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider" style="background-color: #7fe084;">

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

            <li class="nav-item ">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseCrops"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fab fa-pagelines"></i>
                    <span>Safras e Colheitas</span>
                </a>
                <div id="collapseCrops" class="collapse " aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Opções</h6>
                        <a class="collapse-item" href="colheitas.php">Colheitas</a>
                        <a class="collapse-item" href="safras.php">Safras</a>
                    </div>
                </div>
            </li>

            <li class="nav-item active">
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
            <hr class="sidebar-divider d-none d-md-block" style="background-color: #7fe084;">

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

                        <!-- Nav Item - Alerts -->                        

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
                        <h1 class="h3 mb-0 text-gray-800">Meus Fornecedores</h1>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" style="background-color: limegreen; border:none;"
                            data-bs-toggle="modal" data-bs-target="#cadArea">
                            <i class="fas fa-plus"></i>
                            Novo Fornecedor
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="cadArea" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Novo Fornecedor</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                            aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <form class="row g-3" action="php/cadfornecedor.php" method="POST">
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Nome</label>
                                                <input type="hidden" class="form-control" id="id" name="tUser"
                                                    value="<?php echo $_SESSION['id']; ?>">
                                                <input type="text" class="form-control" id="nome" name="tNome"
                                                    id="exampleFormControlInput1" placeholder="Exemplo: Fornecedor de Energia Elétrica">
                                            </div>
                                            <?php
                                                $id = $_SESSION['id'];
                                            $sql = "select * from farm where id='$id'";
                                            $query3 = mysqli_query($conn, $sql)
                                            ?>
                                            <div class="mb-3">
                                                <label for="cFarm" class="form-label">Fazenda</label>
                                                <select name="tFarm" id="fazenda" class="form-select"
                                                    aria-label="Default select example">
                                                    <option selected>Escolha...</option>
                                                    <?php while($farm = mysqli_fetch_assoc($query3)){?>
                                                    <option value="<?php echo $farm['id_farm'] ?>">
                                                        <?php echo $farm['name']?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <script>
                                            function mascara(i) {

                                                var v = i.value;

                                                if (isNaN(v[v.length -
                                                        1])) { // impede entrar outro caractere que não seja número
                                                    i.value = v.substring(0, v.length - 1);
                                                    return;
                                                }

                                                i.setAttribute("maxlength", "18");
                                                if (v.length == 2 || v.length == 6) i.value += ".";
                                                if (v.length == 10) i.value += "/";
                                                if (v.length == 15) i.value += "-";

                                            }

                                            function mask(o, f) {
                                                setTimeout(function() {
                                                    var v = mphone(o.value);
                                                    if (v != o.value) {
                                                        o.value = v;
                                                    }
                                                }, 1);
                                            }

                                            function mphone(v) {
                                                var r = v.replace(/\D/g, "");
                                                r = r.replace(/^0/, "");
                                                if (r.length > 10) {
                                                    r = r.replace(/^(\d\d)(\d{5})(\d{4}).*/, "($1) $2-$3");
                                                } else if (r.length > 5) {
                                                    r = r.replace(/^(\d\d)(\d{4})(\d{0,4}).*/, "($1) $2-$3");
                                                } else if (r.length > 2) {
                                                    r = r.replace(/^(\d\d)(\d{0,5})/, "($1) $2");
                                                } else {
                                                    r = r.replace(/^(\d*)/, "($1");
                                                }
                                                return r;
                                                
                                            }
                                            </script>
                                            <div class="col-md-6">
                                                <label for="cArea" class="form-label">CNPJ</label>
                                                <input type="text" oninput="mascara(this)" class="form-control"
                                                    id="cnpj" name="tCnpj" id="exampleFormControlInput1"
                                                    placeholder="Digite um CNPJ">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="exampleFormControlInput1" class="form-label">Contato</label>
                                                <input type="text" class="form-control" onkeypress="mask(this, mphone);" onblur="mask(this, mphone);" id="contato" name="tCont"
                                                    id="exampleFormControlInput1" placeholder="Exemplo: (99)9999-9999">
                                            </div>
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1"
                                                    class="form-label">Endereço</label>
                                                <input type="text" class="form-control" id="endereco" name="tAddress"
                                                    id="exampleFormControlInput1"
                                                    placeholder="Exemplo: Rua Oito nº 999 Bairro Jk">
                                            </div>
                                            <div class="col-md-7">
                                                <label for="cArea" class="form-label">Cidade</label>
                                                <input type="text" class="form-control" id="cidade" name="tCidade"
                                                    id="exampleFormControlInput1" placeholder="Exemplo: São Paulo">
                                            </div>
                                            <div class="col-md-5">
                                                <label for="exampleFormControlInput1" class="form-label">UF</label>
                                                <select id="medida" name="tUf" class="form-select">
                                                    <option value="AC">Acre</option>
                                                    <option value="AL">Alagoas</option>
                                                    <option value="AP">Amapá</option>
                                                    <option value="AM">Amazonas</option>
                                                    <option value="BA">Bahia</option>
                                                    <option value="CE">Ceará</option>
                                                    <option value="DF">Distrito Federal</option>
                                                    <option value="ES">Espírito Santo</option>
                                                    <option value="GO">Goiás</option>
                                                    <option value="MA">Maranhão</option>
                                                    <option value="MT">Mato Grosso</option>
                                                    <option value="MS">Mato Grosso do Sul</option>
                                                    <option value="MG">Minas Gerais</option>
                                                    <option value="PA">Pará</option>
                                                    <option value="PB">Paraíba</option>
                                                    <option value="PR">Paraná</option>
                                                    <option value="PE">Pernambuco</option>
                                                    <option value="PI">Piauí</option>
                                                    <option value="RJ">Rio de Janeiro</option>
                                                    <option value="RN">Rio Grande do Norte</option>
                                                    <option value="RS">Rio Grande do Sul</option>
                                                    <option value="RO">Rondônia</option>
                                                    <option value="RR">Roraima</option>
                                                    <option value="SC">Santa Catarina</option>
                                                    <option value="SP">São Paulo</option>
                                                    <option value="SE">Sergipe</option>
                                                    <option value="TO">Tocantins</option>
                                                    <option value="EX">Estrangeiro</option>
                                                </select>

                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Cancelar</button>
                                                <input class="btn btn-primary"
                                                    style="background-color: limegreen; border: none;" type="submit"
                                                    value="Salvar">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                    
                    <?php
                            $pagina_atual = filter_input(INPUT_GET,'pagina', FILTER_SANITIZE_NUMBER_INT);       
                            $pagina = (!empty($pagina_atual)) ? $pagina_atual : 1;
                        
                            $qnt_result_pg = 10;
                            
                            
                            $inicio = ($qnt_result_pg * $pagina) - $qnt_result_pg;                        

                            $iduser = $_SESSION['id'];                                    
                            $sql = "select id_providers, pro_name, contact, a.address, a.city, a.uf, a.id_farm, cnpj
                                    from providers a, farm b
                                    where a.id_farm=b.id_farm and a.id='$iduser'
                                    order by a.created_at desc
                                    LIMIT $inicio, $qnt_result_pg";                    
                            $query = mysqli_query($conn, $sql);
                        ?>
                        <?php                                
                            while ($row = mysqli_fetch_assoc($query)) 
                           {
                        ?>
                        <div class="col-md-12 mb-4">
                            <div class="card shadow h-100 py-2" style="border-left:4px solid limegreen;">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div cclass="text-xs font-weight-bold text-uppercase mb-1" style="color: limegreen; font-size: 15px;">
                                                <?php echo $row['pro_name']?></div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800" style="color: limegreen; font-size: 15px;">
                                                <?php echo $row['contact']?></div>
                                        </div>
                                        <div class="col-auto">
                                        <a href="#editArea" class="btn btn-circle" style="color: limegreen;"
                                                        data-bs-toggle="modal" data-bs-target="#editarea"
                                                        data-bs-whateverid="<?php echo $row['id_providers'];?>"
                                                        data-bs-whatevernome="<?php echo $row['pro_name'];?>"
                                                        data-bs-whateverfazenda="<?php echo $row['id_farm'];?>"
                                                        data-bs-whatevercnpj="<?php echo $row['cnpj'];?>"
                                                        data-bs-whatevercontato="<?php echo $row['contact'];?>"
                                                        data-bs-whateverendereco="<?php echo $row['address'];?>"
                                                        data-bs-whatevercidade="<?php echo $row['city'];?>"
                                                        data-bs-whateveruf="<?php echo $row['uf'];?>">
                                                        <i class="far fa-edit"></i>
                                                    </a>


                                                    <?php echo
                                                            "<style>button{background-color:transparent;color:white;border-style:none; border-radius:50px; padding: 5px;}.buttons{text-decoration:none;color:red;}.buttons:hover{color: darkred;}.edit{background-color:limegreen;}</style><button><a class='buttons' href='php/deletefornecedor.php?id=".$row['id_providers']."'><i class='far fa-trash-alt'></i></a></button>";  
                                                        ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } 
                            $id = $_SESSION['id'];
                            $result_pg = "SELECT COUNT(id_providers) AS num_result FROM providers where id=$id";
                            $resultado_pg = mysqli_query($conn, $result_pg);
                            $row_pg = mysqli_fetch_assoc($resultado_pg);
                            //echo $row_pg['num_result'];
                            //Quantidade de pagina
                            $quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);

                            if ($row_pg['num_result'] == 0){
                                echo "<h1 class='h3 mb-0 text-gray'>Você não possui nenhum fornecedor cadastrado!</h1><br>";
                                /*echo "<div class='card shadow mb-4'>
                                        <div class='card-header py-3'>
                                            <h6 class='m-0 font-weight-bold' style='color: limegreen;'>Comece cadastrando sua primeira propriedade no botão Nova Fazenda.</h6>
                                        </div>
                                        <div class='card-body>
                                            <div class='text-center'>
                                                <img class='img-fluid px-3 px-sm-4 mt-3 mb-4' style='width: 25rem;'
                                                    src=    'img/undraw_No_data_re_kwbl.svg'    alt='...''>
                                            </div>
                                        </div>
                                    </div>";*/
                            } else {
                                //Limitar os link antes depois
                            $max_links = 2;
                            echo "<style>a { text-decoration: none; color: inherit; }a:hover{text-decoration: none; color: limegreen;}</style><a class='link' href='areas.php?pagina=1'>Primeira</a> ";
                           
                            for($pag_ant = $pagina - $max_links; $pag_ant <= $pagina - 1; $pag_ant++)
                            {
                                if($pag_ant >= 1)
                                {
                                    echo "<a href='fornecedores.php?pagina=$pag_ant'>$pag_ant</a> ";
                                }
                            }
                               
                            echo "$pagina ";
                           
                            for($pag_dep = $pagina + 1; $pag_dep <= $pagina + $max_links; $pag_dep++)
                            {
                                if($pag_dep <= $quantidade_pg)
                                {
                                    echo "<a href='fornecedores.php?pagina=$pag_dep'>$pag_dep</a> ";
                                }
                            }
                           
                            echo "<a href='fornecedores.php?pagina=$quantidade_pg'>Ultima</a>";
                            }
                           
                            
                        ?>         
                    <!-- End of Main Content -->



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
            <script src="js/demo/chart-pie-demo.js"></script>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
                crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
                integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN"
                crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js"
                integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/"
                crossorigin="anonymous"></script>
            <script src="vendor/datatables/jquery.dataTables.min.js"></script>
            <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="js/demo/datatables-demo.js"></script>


            <div class="modal fade" id="editarea" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Editar Fornecedor</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="row g-3" action="php/editfornecedor.php" method="POST">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Nome</label>
                                    <input type="hidden" class="form-control" id="id" name="tUser">
                                    <input type="text" class="form-control" id="nome" name="tNome"
                                        id="exampleFormControlInput1" placeholder="Exemplo: Óleo Diesel">
                                </div>
                                <?php
                                                $id = $_SESSION['id'];
                                            $sql = "select * from farm where id='$id'";
                                            $query3 = mysqli_query($conn, $sql)
                                            ?>
                                <div class="mb-3">
                                    <label for="cFarm" class="form-label">Fazenda</label>
                                    <select name="tFarm" id="fazenda" class="form-select"
                                        aria-label="Default select example">
                                        <option selected>Escolha...</option>
                                        <?php while($farm = mysqli_fetch_assoc($query3)){?>
                                        <option value="<?php echo $farm['id_farm'] ?>">
                                            <?php echo $farm['name']?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="cArea" class="form-label">CNPJ</label>
                                    <input type="text" class="form-control" id="cnpj" name="tCnpj"
                                        id="exampleFormControlInput1" placeholder="Digite um CNPJ">
                                </div>
                                <div class="col-md-6">
                                    <label for="exampleFormControlInput1" class="form-label">Contato</label>
                                    <input type="text" class="form-control" id="contato" name="tCont"
                                        id="exampleFormControlInput1" placeholder="Exemplo: (99)9999-9999">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Endereço</label>
                                    <input type="text" class="form-control" id="endereco" name="tAddress"
                                        id="exampleFormControlInput1" placeholder="Exemplo: Rua Oito nº 999 Bairro Jk">
                                </div>
                                <div class="col-md-7">
                                    <label for="cArea" class="form-label">Cidade</label>
                                    <input type="text" class="form-control" id="cidade" name="tCidade"
                                        id="exampleFormControlInput1" placeholder="Exemplo: São Paulo">
                                </div>
                                <div class="col-md-5">
                                    <label for="exampleFormControlInput1" class="form-label">UF</label>
                                    <select id="uf" name="tUf" class="form-select">
                                        <option value="AC">Acre</option>
                                        <option value="AL">Alagoas</option>
                                        <option value="AP">Amapá</option>
                                        <option value="AM">Amazonas</option>
                                        <option value="BA">Bahia</option>
                                        <option value="CE">Ceará</option>
                                        <option value="DF">Distrito Federal</option>
                                        <option value="ES">Espírito Santo</option>
                                        <option value="GO">Goiás</option>
                                        <option value="MA">Maranhão</option>
                                        <option value="MT">Mato Grosso</option>
                                        <option value="MS">Mato Grosso do Sul</option>
                                        <option value="MG">Minas Gerais</option>
                                        <option value="PA">Pará</option>
                                        <option value="PB">Paraíba</option>
                                        <option value="PR">Paraná</option>
                                        <option value="PE">Pernambuco</option>
                                        <option value="PI">Piauí</option>
                                        <option value="RJ">Rio de Janeiro</option>
                                        <option value="RN">Rio Grande do Norte</option>
                                        <option value="RS">Rio Grande do Sul</option>
                                        <option value="RO">Rondônia</option>
                                        <option value="RR">Roraima</option>
                                        <option value="SC">Santa Catarina</option>
                                        <option value="SP">São Paulo</option>
                                        <option value="SE">Sergipe</option>
                                        <option value="TO">Tocantins</option>
                                        <option value="EX">Estrangeiro</option>
                                    </select>

                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Cancelar</button>
                                    <input class="btn btn-primary" style="background-color: limegreen; border: none;"
                                        type="submit" value="Salvar">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <script>
            var exampleModal = document.getElementById('editarea')
            exampleModal.addEventListener('show.bs.modal', function(event) {
                // Button that triggered the modal
                var button = event.relatedTarget
                // Extract info from data-bs-* attributes
                var recipient = button.getAttribute('data-bs-whateverid')
                var recipientnome = button.getAttribute('data-bs-whatevernome')
                var recipientfazenda = button.getAttribute('data-bs-whateverfazenda')
                var recipientcnpj = button.getAttribute('data-bs-whatevercnpj')
                var recipientcontato = button.getAttribute('data-bs-whatevercontato')
                var recipientendereco = button.getAttribute('data-bs-whateverendereco')
                var recipientcidade = button.getAttribute('data-bs-whatevercidade')
                var recipientuf = button.getAttribute('data-bs-whateveruf')

                // If necessary, you could initiate an AJAX request here
                // and then do the updating in a callback.
                //
                // Update the modal's content.
                var modalTitle = exampleModal.querySelector('.modal-title')
                var id = exampleModal.querySelector('#id')
                var nome = exampleModal.querySelector('#nome')
                var fazenda = exampleModal.querySelector('#fazenda')
                var cnpj = exampleModal.querySelector('#cnpj')
                var contato = exampleModal.querySelector('#contato')
                var endereco = exampleModal.querySelector('#endereco')
                var cidade = exampleModal.querySelector('#cidade')
                var uf = exampleModal.querySelector('#uf')


                id.value = recipient
                nome.value = recipientnome
                fazenda.value = recipientfazenda
                cnpj.value = recipientcnpj
                contato.value = recipientcontato
                endereco.value = recipientendereco
                cidade.value = recipientcidade
                uf.value = recipientuf
            })
            </script>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="php/deletearea.php" method="POST">
                                <div class="mb-3">
                                    <label for="recipient-name" class="col-form-label">Deseja realmente exluir esta
                                        Área?</label>
                                    <input type="text" class="form-control" name="tCod" id="recipient-name">
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <input class="btn btn-primary" style="background-color: limegreen; border: none;"
                                type="submit" value="Sim">
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <script>
            var exampleModal02 = document.getElementById('exampleModal')
            exampleModal02.addEventListener('show.bs.modal', function(event) {
                // Button that triggered the modal
                var button = event.relatedTarget
                // Extract info from data-bs-* attributes
                var recipient = button.getAttribute('data-bs-whatever')
                var name = button.getAttribute('data-bs-whatevernomedelete')
                // If necessary, you could initiate an AJAX request here
                // and then do the updating in a callback.
                //
                // Update the modal's content.
                var modalTitle = exampleModal02.querySelector('.modal-title')
                var modalBodyInput = exampleModal02.querySelector('.modal-body input')

                modalTitle.textContent = 'Deseja realmente excluir "' + name + '"?'
                modalBodyInput.value = recipient
            })
            </script>
</body>

</html>