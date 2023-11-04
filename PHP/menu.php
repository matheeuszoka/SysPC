<li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-desktop"></i>
                    <span>OS</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">OS:</h6>
                        <a class="collapse-item" href="nova_os.php">Nova OS</a>
                        <a class="collapse-item" href="aberto_os.php">OS em aberto</a>
                        <a class="collapse-item" href="alterar_os.php">Editar OS</a>
                        <a class="collapse-item" href="finalizadas_os.php">OS Finalizadas</a>
                    </div>
                </div>
            </li>
           
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item"><!--Utilidades-->
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Manutenções</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Contratos 2R:</h6>
                        <a class="collapse-item" href="nova_manutencao.php">Novo</a>
                        <a class="collapse-item" href="aberto_manutencao.php">Em aberto</a>
                        <a class="collapse-item" href="alterar_manutencao.php">Editar</a>
                        <a class="collapse-item" href="finalizadas_manutencao.php">Finalizadas</a>
                        <h6 class="collapse-header">Cadastrar:</h6>
                        <a class="collapse-item" href="cad_entidade.php">Entidades</a>
                        <a class="collapse-item" href="cad_setor.php">Setor</a>
                        
                    </div>
                </div>
            </li>
           
            <li class="nav-item"><!--Utilidades-->
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilitiesUnique"
                    aria-expanded="true" aria-controls="collapseUtilitiesUnique">
                    <i class="fas fa-car"></i>
                    <span>Visitas</span>
                </a>
                <div id="collapseUtilitiesUnique" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Visitas:</h6>
                        <a class="collapse-item" href="sistema.php"onclick="mostrarAlerta()">Novo</a>
                        <a class="collapse-item" href="sistema.php"onclick="mostrarAlerta()">Realizadas</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="sistema.php"onclick="mostrarAlerta()">
                    <i class="fas fa-file-alt"></i>
                    <span>Relatorios</span></a>
            </li>


            <script>
                function mostrarAlerta() {
                    alert("Em breve!");
                }
            </script>