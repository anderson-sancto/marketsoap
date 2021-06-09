<?php
   session_start();
   include("./model/conexao.php");
   include("./model/classcrud.php");
   
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
      <title>Acesso Administrativo</title>
      <!-- Custom fonts for this template-->
      <link href="./assets/vendor/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
      <!-- Custom styles for this template-->
      <link href="./assets/vendor/css/sb-admin-2.min.css" rel="stylesheet">
      <link href="./assets/css/style-sidebar.css" rel="stylesheet">
   </head>
   <body id="page-top">
      <!-- Page Wrapper -->
      <div id="wrapper">
         <!-- Sidebar -->
         <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="d-venda.php">
               <div class="">
                  <img class="img-fluid" src="./assets/img/logo-dashboard.png">
               </div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
               Módulos
            </div>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
               <a class="nav-link" href="d-venda.php">
               <i class="fas fa-store"></i>
               <span>Venda</span>
               </a>
            </li>
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
               <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
               <i class="fas fa-clipboard-list"></i>
               <span>Cadastro</span>
               </a>
               <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                     <h6 class="collapse-header">Selecione:</h6>
                     <a class="collapse-item" href="d-cadastro-colab.php">Colaborador</a>
                     <a class="collapse-item" href="d-cadastro-client.php">Cliente</a>
                     <a class="collapse-item" href="d-cadastro-produto.php">Produto</a>
                  </div>
               </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
               Configurações
            </div>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
               <a class="nav-link " href="d-listar-colab.php">
               <i class="fa fa-user-circle" aria-hidden="true"></i>
               <span>Usuários</span>
               </a>
            </li>
            <!-- Nav Item - Tables -->
            <li class="nav-item">
               <a class="nav-link" href="d-listar-client.php">
               <i class="fa fa-user-circle" aria-hidden="true"></i>
               <span>Clientes</span></a>
            </li>
            <!-- Nav Item - Charts -->
            <li class="nav-item">
               <a class="nav-link" href="d-listar-produto.php">
               <i class="fa fa-shopping-basket" aria-hidden="true"></i>
               <span>Produtos</span></a>
            </li>
            <!-- Nav Item - Charts -->
            <li class="nav-item">
               <a class="nav-link" href="d-listar-venda.php">
               <i class="fa fa-shopping-basket" aria-hidden="true"></i>
               <span>Vendas</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">
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
                     <div class="topbar-divider d-none d-sm-block"></div>
                     <!-- Nav Item - User Information -->
                     <?php
                        $Crud = new classcrud();
                        $NomeColab = $Crud->selectDB("nome", "funcionario", "where login = '" . $_SESSION['email'] . "'", array());
                        $Fetch = $NomeColab->fetch(PDO::FETCH_ASSOC);
                        
                        ?>
                     <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $Fetch['nome'] ?></span>
                        <img class="img-profile rounded-circle" src="./assets/vendor/img/undraw_profile.svg">
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
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
               <!-- Jumbotron -->
               <div class="jumbotron jumbotron-fluid">
                  <img class="jumb_img" src="./assets/img/banner_dashboard.svg">
               </div>
               <!-- Fim do jumbotron -->
               <!-- Begin Page Content -->
               <div class="container-fluid">
                  <!-- DataTales Example -->
                  <div class="card shadow mb-4">
                     <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Produtos Cadastrados</h6>
                     </div>
                     <div class="card-body">
                        <div class="table-responsive">
                           <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                              <thead>
                                 <tr>
                                    <th>Nome</th>
                                    <th>Quantidade</th>
                                    <th>Ações</th>
                                 </tr>
                              </thead>
                              <tfoot>
                                 <tr>
                                    <th>Nome</th>
                                    <th>Quantidade</th>
                                    <th>Ações</th>
                                 </tr>
                              </tfoot>
                              <tbody>
                              </tbody>
                              <?php
                                 $Crud = new classcrud();
                                 $BFetch = $Crud->selectDB("*", "produto", "", array());
                                 while ($Fetch = $BFetch->fetch(PDO::FETCH_ASSOC)) {
                                 ?>
                              <tr>
                                 <th><?php echo $Fetch['nome'] ?></th>
                                 <th><?php echo $Fetch['quantidade'] ?></th>
                                 <th> <a href="<?php echo "d-view-produt.php?id={$Fetch['id']}"; ?>"><i class="fa fa-search" aria-hidden="true" title="Visualizar"></i></a>
                                    <a href="<?php echo "d-atualizar-produto.php?id={$Fetch['id']}"; ?>"><i class="fas fa-pencil-alt" title="Editar"></i></a>
                                    <a class="Deletar" href="<?php echo "./control/d-deletar-produt.php?id={$Fetch['id']}"; ?>"><i class="fa fa-trash" aria-hidden="true" title="Excluir"></i></a>
                                 </th>
                              </tr>
                              <?php
                                 }
                                 ?>
                           </table>
                        </div>
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
                     <span>Copyright &copy; MarketSoap 2021</span>
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
                  <h5 class="modal-title" id="exampleModalLabel">Pronto para sair?</h5>
                  <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                  </button>
               </div>
               <div class="modal-body">Selecione "Sair" caso deseje finalizar seu acesso.</div>
               <div class="modal-footer">
                  <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                  <a class="btn btn-primary" href="login.php">Sair</a>
               </div>
            </div>
         </div>
      </div>
      <!-- Bootstrap core JavaScript-->
      <script src="./assets/vendor/vendor/jquery/jquery.min.js"></script>
      <script src="./assets/vendor/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <!-- Core plugin JavaScript-->
      <script src="./assets/vendor/vendor/jquery-easing/jquery.easing.min.js"></script>
      <!-- Custom scripts for all pages-->
      <script src="./assets/vendor/js/sb-admin-2.min.js"></script>
      <script>
         /* confirmar antes de deletar*/
         
         $('.Deletar').on('click', function(event) {
           event.preventDefault();
           var Link = $(this).attr('href');
           if (confirm("Deseja mesmo apagar esse dado?")) {
             window.location.href = Link;
           } else {
             return false;
           }
         });
      </script>
   </body>
</html>