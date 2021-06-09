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
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
   <link href="./assets/css/style-sidebar.css" rel="stylesheet">
   <link href="./assets/css/style-shop.css" rel="stylesheet">
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
            <a class="nav-link" href="#">
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
         <div id="content" class=".content">
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
                  <!-- Nav Item - Alerts -->
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
            <!-- Conteúdo principal -->
            <form name="produto" method="post" action="./control/ctr-cadastro-venda.php">
               <div class="container-fluid mt-5">
                  <h2 class="mb-5 text-center">Carrinho de compras</h2>
                  <?php
                  //chama o arquivo de configuração com o banco

                  //seleciona os dados da tabela produto
                  $Crud = new classcrud();
                  $Cliente = $Crud->selectDB("*", "cliente", "", array());
                  ?>
                  <div class="bloco">
                     <div class="input-group mb-3">
                        <div class="input-group-prepend">
                           <button class="btn btn-outline-secondary input-cliente" type="button" disabled>Selecione um cliente </button>
                        </div>
                        <select class="custom-select" id="inputGroupSelect03" aria-label="Example select with button addon" name="cliente">
                           <option selected>Selecione...</option>
                           <?php while ($ClienteFetch = $Cliente->fetch(PDO::FETCH_ASSOC)) { ?>
                              <option value="<?php echo $ClienteFetch['id'] ?>"><?php echo $ClienteFetch['nome'] ?></option>
                           <?php } ?>
                        </select>
                     </div>
                     <?php
                     $Funcionario = $Crud->selectDB("*", "funcionario", "", array());
                     ?>
                     <div class="input-group mb-3">
                        <div class="input-group-prepend">
                           <button class="btn btn-outline-secondary" type="button" disabled>Selecione um funcionário</button>
                        </div>
                        <select class="custom-select" id="inputGroupSelect03" aria-label="Example select with button addon" name="funcionario">
                           <option selected>Selecione...</option>
                           <?php while ($FuncionarioFetch = $Funcionario->fetch(PDO::FETCH_ASSOC)) { ?>
                              <option value="<?php echo $FuncionarioFetch['id'] ?>"><?php echo $FuncionarioFetch['nome'] ?></option>
                           <?php } ?>
                        </select>
                     </div>
                  </div>
                  <div class="row justify-content-center">
                     <div class="col-md-8">
                        <div class="table-responsive">
                           <table id="myTable" class="table">
                              <thead>
                                 <tr>
                                    <th>Produto</th>
                                    <th>Quantidade</th>
                                    <th>Preço</th>
                                    <th class="text-right"><span id="amount" class="amount">Estoque</span> </th>
                                    <th class="text-right"><span id="amount" class="amount">Total</span> </th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php
                                 $Produto = $Crud->selectDB("*", "produto", "", array());
                                 while ($ProdutoFetch = $Produto->fetch(PDO::FETCH_ASSOC)) {
                                 ?>
                                    <td>
                                       <p><?php echo $ProdutoFetch['nome'] ?></p>
                                    </td>
                                    <td>
                                       <div class="button-container">
                                          <button class="cart-qty-plus" type="button" value="+">+</button>
                                          <input type="text" name="<?php echo $ProdutoFetch['id'] ?>" min="0" class="qty form-control" value="0" />
                                          <button class="cart-qty-minus" type="button" value="-">-</button>
                                       </div>
                                    </td>
                                    <td>
                                       <input type="text" value="<?php echo $ProdutoFetch['valor'] ?>" class="price form-control" disabled>
                                    </td>
                                    <td align="right"><?php echo $ProdutoFetch['quantidade'] ?></span></td>
                                    <td align="right">$ <span id="amount" class="amount">0</span></td>
                                    </tr>
                                 <?php
                                 }
                                 ?>
                              </tbody>
                              <tfoot>
                                 <tr>
                                    <td colspan="4"></td>
                                    <td align="right"><strong>TOTAL = R$ <span id="total" class="total">0</span></strong></td>
                                 </tr>
                              </tfoot>
                           </table>
                        </div>
                        <button type="submit" class="btn btn-primary" value="">Finalizar</button>
                        <button type="submit" class="btn btn-primary" href="#" value="">Cancelar</button>
                     </div>
                  </div>
               </div>
            </form>
            <!-- Fim do conteúdo principal-->
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
         function myFunction() {
            var input, filter, table, tr, td, i;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
               td = tr[i].getElementsByTagName("td")[0];
               if (td) {
                  txtValue = td.textContent || td.innerText;
                  if (txtValue.toUpperCase().indexOf(filter) > -1) {
                     tr[i].style.display = "";
                  } else {
                     tr[i].style.display = "none";
                  }
               }
            }
         }
      </script>
      <script>
         // -----------------for-Shopping-cart-------------
         $(document).ready(function() {
            update_amounts();
            $('.qty, .price').on('keyup keypress blur change', function(e) {
               update_amounts();
            });
         });

         function update_amounts() {
            var sum = 0.0;
            $('#myTable > tbody  > tr').each(function() {
               var qty = $(this).find('.qty').val();
               var price = $(this).find('.price').val();
               var amount = (qty * price)
               sum += amount;
               $(this).find('.amount').text('' + amount);
            });
            $('.total').text(sum);
         }



         //----------------for quantity-increment-or-decrement-------
         var incrementQty;
         var decrementQty;
         var plusBtn = $(".cart-qty-plus");
         var minusBtn = $(".cart-qty-minus");
         var incrementQty = plusBtn.click(function() {
            var $n = $(this)
               .parent(".button-container")
               .find(".qty");
            $n.val(Number($n.val()) + 1);
            update_amounts();
         });

         var decrementQty = minusBtn.click(function() {
            var $n = $(this)
               .parent(".button-container")
               .find(".qty");
            var QtyVal = Number($n.val());
            if (QtyVal > 0) {
               $n.val(QtyVal - 1);
            }
            update_amounts();
         });
      </script>
</body>

</html>