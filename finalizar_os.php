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
    <title>Sys 2R²| OS</title>

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

                    <!-- Formulário para Finalizar a OS -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Finalizar Ordem de Serviço</h6>
                        </div>
                        <div class="card-body">
                            <?php
                            error_reporting(E_ERROR);

                            $id = $_GET['id'];
                            include('./PHP/conexao.php');
                            $bd = "SELECT * FROM os WHERE id = $id";
                            $resultado = mysqli_query($conexao, $bd);
                            $raw = mysqli_fetch_array($resultado);
                            ?>
                            <form action="./PHP/finalizar/finaliza_os.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $raw['id']; ?>">

                                <div class="form-group">
                                    <label for="cliente">Cliente:</label>
                                    <input type="text" class="form-control" id="cliente" name="cliente" value="<?php echo $raw['cliente']; ?>" placeholder="Nome do cliente" required>
                                </div>

                                <!-- Telefone -->
                                <div class="form-group">
                                    <label for="telefone">Telefone:</label>
                                    <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="(00) 00000-0000" value="<?php echo $raw['telefone']; ?>" required>
                                </div>

                                <!-- Prioridade -->
                                <div class="form-group">
                                    <label for="prioridade">Prioridade:</label>
                                    <select class="form-control" id="prioridade" name="prioridade" required>
                                        <option value="nao"><?php echo $raw['prioridade']; ?></option>

                                    </select>
                                </div>
                                <!-- Data de Entrada -->
                                <div class="form-group">
                                    <label for="dataEntrada">Data de Entrada:</label>
                                    <input type="date" class="form-control" id="dataEntrada" value="<?php echo $raw['data']; ?>" name="data" required>
                                </div>

                                <!-- Data de Saída -->
                                <div class="form-group">
                                    <label for="dataSaida">Data de Saída:</label>
                                    <input type="date" class="form-control" id="dataSaida" name="saida" required>
                                </div>
                                <!--Problema -->
                                <div class="form-group">
                                    <label for="dataSaida">Problema:</label>
                                    <input type="text" class="form-control" id="dataSaida" name="prob" value="<?php echo $raw['problema']; ?>"required>
                                </div>

                                <!-- Resolução -->
                                <div class="form-group">
                                    <label for="resolucao">Resolução:</label>
                                    <textarea class="form-control" id="resolucao" name="resol" rows="1" placeholder="Descreva a resolução" required></textarea>
                                </div>

                                <!-- Observações -->
                                <div class="form-group">
                                    <label for="observacoes">Observações:</label>
                                    <textarea class="form-control" id="observacoes" name="obs" rows="1" placeholder="Inclua quaisquer observações relevantes"></textarea>
                                </div>

                                <!-- Serviço Realizado -->
                                <div class="form-group">
                                    <label for="servicoRealizado">Serviço Realizado:</label>
                                    <select class="form-control" id="servicoRealizado" name="servico" required>
                                        <option value="" selected disabled>Selecione o serviço</option>
                                        <option value="formata-2r">Formatação 2R</option>
                                        <option value="formata-copel">Formatação Copel</option>
                                        <option value="office">Ativar Office</option>
                                        <option value="fonte">Troca de Fonte</option>
                                        <option value="memoria">Limpeza de Memória</option>
                                        <option value="ssd-clone_pc">SSD clone PC</option>
                                        <option value="ssd-clone_note">SSD clone Note</option>
                                        <option value="ssd-troca_pc">SSD troca PC</option>
                                        <option value="ssd-troca_note">SSD troca Note</option>
                                        <option value="limpeza-pc">Limpeza do PC</option>
                                        <option value="Outro-Valor">Outros Serviços</option>
                                    </select>
                                </div>

                                <!-- Valor -->
                                <div class="form-group">
                                    <label for="valor">Valor (R$):</label>
                                    <input type="text" class="form-control" id="valor" name="valor" placeholder="Informe o valor a ser cobrado" required>
                                </div>
                                <input type="hidden" name="status" value="Finalizada">


                                <!-- Botão de Submissão -->
                                <button type="submit" class="btn btn-primary">Finalizar OS</button>
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