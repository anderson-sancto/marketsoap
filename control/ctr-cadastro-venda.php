<?php
include("../model/variaveis.php");
include("../model/conexao.php");
include("../model/classcrud.php");
$Crud = new ClassCrud();
$IdCliente = $_POST['cliente'];
$IdFuncionario = $_POST['funcionario'];
$IdVenda = uniqid();
foreach ($_POST as $key => $value) {
  if (is_numeric($key) & $value > 0) {
    $Crud->insertDB(
      "venda",
      "?,?,?,?,?",
      array($IdCliente, $IdFuncionario, $key, $value, $IdVenda)
    );
    $ProdutoFetch = $Crud->selectDB("quantidade", "produto", "where id=?", array($key));
    $Fetch = $ProdutoFetch->fetch(PDO::FETCH_ASSOC);
    $quantidade = $Fetch['quantidade'] - $value;
    $Crud->updateDB(
      "produto",
      "quantidade=?",
      "id=?",
      array($quantidade, $key)
    );
  }
}
header("location:http://localhost/editado/d-venda.php");
exit();
