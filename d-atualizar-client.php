<?php
session_start();
include("./model/conexao.php");
include("./model/classcrud.php");
/* Edicao de dados*/
if (isset($_GET['id'])) {
   $Acao = "Editar";
   $Crud = new classcrud();
   $BFetch = $Crud->selectDB("*", "cliente", "where id=?", array($_GET['id']));
   $Fetch = $BFetch->fetch(PDO::FETCH_ASSOC);
   $Nome = $Fetch['nome'];
   $Sexo = $Fetch['sexo'];
   $Telefone = $Fetch['telefone'];
   $Nascimento = $Fetch['dataNascimento'];
   $Cpf = $Fetch['cpf'];
   $Cep = $Fetch['cep'];
   $Endereco = $Fetch['endereco'];
   $Estado = $Fetch['estado'];
   $Cidade = $Fetch['cidade'];
   $Email = $Fetch['email'];
   $Id = $Fetch['id'];


   /*cadastro novo*/
} else {
   $Acao = "Cadastrar";
   $Nome = "";
   $Sexo = "";
   $Telefone = "";
   $Nascimento = "";
   $Cpf = "";
   $Cep = "";
   $Endereco = "";
   $Estado = "";
   $Cidade = "";
   $Email = "";
   $Id = 0;
}

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
               <img class="img-fluid img-db" src="./assets/img/logo-dashboard.png">
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
            <form class="container" id="formCadastroClient" name="formCadastroClient" method="POST" action="./control/ctr-cadastro-client.php">
               <input type="hidden" id="Acao" name="Acao" value="<?php echo $Acao; ?>">
               <input type="hidden" id="Acao" name="id" value="<?php echo $Id; ?>">
               <div class="form-row">
                  <div class="form-group col-md-6">
                     <label for="inputName">Nome</label>
                     <input type="text" class="form-control" id="inputName" placeholder="Nome" name="inputName" value="<?php echo $Nome; ?>" required>
                  </div>
                  <div class="form-group col-md-2">
                     <label for="sexo">Sexo</label>
                     <select id="select" class="form-control" name="sexo" required>
                        <option selected value="<?php echo $Sexo; ?>"><?php echo $Sexo; ?></option>
                        <option>F</option>
                        <option>M</option>
                     </select>
                  </div>
                  <div class="form-group col-md-4">
                     <label for="inputPhone">Telefone</label>
                     <input type="text" name="telefone" class="telefone form-control" placeholder="Ex (71) 9 9173-3578" value="<?php echo $Telefone; ?>" required>
                  </div>
               </div>
               <div class="form-row">
                  <div class="form-group col-md-6">
                     <label for="inputEmail4">Email</label>
                     <input type="email" class="form-control" id="inputEmail4" placeholder="Insira endereço de E-mail" name="email" value="<?php echo $Email; ?>" required>
                  </div>
                  <div class="form-group col-md-6">
                     <label for="inputCpf">CPF</label>
                     <input type="text" name="cpf" class="cpf form-control" placeholder="Digite seu CPF" value="<?php echo $Cpf; ?>" required />
                  </div>
               </div>
               <div class="form-row">
                  <div class="form-group col-md-6">
                     <label for="inputAddress2">Endereço</label>
                     <input type="text" class="form-control" id="inputAddress2" placeholder="Ex: Rua A , N 10 , Brotas" name="endereco" value="<?php echo $Endereco; ?>" required>
                  </div>
                  <div class="form-group col-md-6">
                     <label for="inputCity">Cidade</label>
                     <input type="text" class="form-control" id="inputCity" placeholder="Ex: Salvador" name="cidade" value="<?php echo $Cidade; ?>" required>
                  </div>
               </div>
               <div class="form-row">
                  <div class="form-group col-md-4">
                     <label for="estado">Estado</label>
                     <select id="select" class="form-control" name="estado">
                        <option value="<?php echo $Estado; ?>" selected><?php echo $Estado; ?></option>
                        <option>AC</option>
                        <option>AL</option>
                        <option>AP</option>
                        <option>AM</option>
                        <option>BA</option>
                        <option>CE</option>
                        <option>DF</option>
                        <option>ES</option>
                        <option>GO</option>
                        <option>MA</option>
                        <option>MT</option>
                        <option>MS</option>
                        <option>MG</option>
                        <option>PA</option>
                        <option>PB</option>
                        <option>PR</option>
                        <option>PE</option>
                        <option>PI</option>
                        <option>RJ</option>
                        <option>RN</option>
                        <option>RS</option>
                        <option>RO</option>
                        <option>RR</option>
                        <option>SC</option>
                        <option>SP</option>
                        <option>SE</option>
                        <option>TO</option>
                     </select>
                  </div>
                  <div class="form-group col-md-2">
                     <label for="inputZip">CEP</label>
                     <input type="text" name="cep" class="cep form-control" placeholder="Digite o CEP" value="<?php echo $Cep; ?>" />
                  </div>
               </div>
               <div class="form-group">
                  <div class="form-check">
                  </div>
               </div>
               <button type="submit" class="btn btn-primary" value="<?php echo $Acao; ?>">Atualizar</button>
               <button type="submit" class="btn btn-primary" href="#" value="<?php echo $Acao; ?>">Cancelar</button>
            </form>
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
      <script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>
      <script>
         $('.telefone').mask('(00) 0 0000-0000');
         $('.dinheiro').mask('#.##0,00', {
            reverse: true
         });
         $('.estado').mask('AA');
         $('.cep').mask('00000-000');
         $('.cpf').mask('000-000.000-00');
      </script>
</body>

</html>