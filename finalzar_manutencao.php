<!DOCTYPE html>
<html lang="en">
<?php include("./PHP/session_start.php") ?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="img/logo2r.jpeg" type="image/x-icon">

    <title>Sys 2R²| Manutenção</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="sistema.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-desktop"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SYS-2R <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="sistema.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!--Menu include -->
            <?php
            include("./PHP/menu.php")
            ?>

            <!-- Divider -->
            <hr class="sidebar-divider">





            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>



        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Procurar..." aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>




                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo ucfirst($_SESSION['usuario_logado']); ?></span>
                                <img class="img-profile rounded-circle" src="img/logo2r.jpeg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">

                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Configurações
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
                        <h1 class="h3 mb-0 text-gray-800">Finalizar Manutenção</h1>
                    </div>
                    <?php
                    $id = $_GET['id'];
                    include('./PHP/conexao.php');
                    $bd = "SELECT * FROM contratos WHERE id = $id";
                    $resultado = mysqli_query($conexao, $bd);
                    $raw = mysqli_fetch_array($resultado);
                    ?>
                    
                    <!-- Formulário para Nova OS -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Informações da Ordem de Serviço</h6>
                        </div>
                        <div class="card-body">
                            <form action="./PHP/finalizar/finaliza_manutencao.php" method="post">
                            <input type="hidden" name="id" value="<?php echo $raw['id']; ?>">
                                <!-- Entidade -->
                                <div class="form-group">
                                    <label for="prioridade">Entidade:</label>
                                    <select class="form-control" id="entidade" name="entidade" required>
                                        <option value="<?php echo $raw['entidade']; ?>"><?php echo $raw['entidade']; ?></option>
                                    </select>
                                </div>

                                <!-- Setor -->
                                <div class="form-group">
                                    <label for="prioridade">Setor:</label>
                                    <select class="form-control" id="setor" name="setor" required>
                                    <option value="<?php echo $raw['setor']; ?>"><?php echo $raw['setor']; ?></option>
                                    </select>
                                </div>


                                <!-- Responsável -->
                                <div class="form-group">
                                    <label for="senha">Responsável:</label>
                                    <input type="text" class="form-control" id="responsavel" value="<?php echo $raw['nome']; ?>"name="responsavel" placeholder="Digite o Responsável">
                                </div>
                                <!-- Data de Entrada -->
                                    <input type="hidden" class="form-control" id="dataEntrada" value="<?php echo $raw['data']; ?>"name="data" required>
                                <!-- senha -->
                                <div class="form-group">
                                    <label for="senha">Senha:</label>
                                    <input type="text" class="form-control" id="senha" name="senha"placeholder="Se adicionado, digite">
                                </div>
                                <!-- Problema -->
                                <div class="form-group">
                                    <label for="problema">Resolução:</label>
                                    <input type="text" class="form-control" id="resolucao" name="resolucao" rows="1" placeholder="Descreva o problema" required></input>
                                </div>
                                <div class="form-group">
                                    <label for="senha">Anydesk:</label>
                                    <input type="text" class="form-control" id="anydesk" name="anydesk"placeholder="Se adicionado, digite">
                                </div>
                                <div class="form-group">
                                    <label for="senha">Senha Anydesk:</label>
                                    <input type="text" class="form-control" id="PassANY" name="PassANY"placeholder="Se adicionado, digite">
                                </div>
                                <div class="form-group">
                                    <label for="senha">Hostname</label>
                                    <input type="text" class="form-control" id="hostname" name="hostname"placeholder="Digite o nome do computador">
                                </div>
                                <input type="hidden" name="status" value="Finalizada">

                                <!-- Botão de Submissão -->
                                <button type="submit" class="btn btn-primary">Salvar</button>
                            </form>
                        </div>
                    </div>





                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                    <span>Copyright &copy; SysPC² by @matheeuszoka</span>
                    </div>
                </div>
            </footer>
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Deseja sair?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Selecione "Sair" abaixo se estiver pronto para encerrar sua sessão atual.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="login.html">Sair</a>
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

</body>

</html>