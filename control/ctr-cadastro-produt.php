<?php
include("../model/conexao.php");
include("../model/variaveis.php");
include("../model/classcrud.php");
$Crud = new ClassCrud();
if ($Acao == 'Cadastrar') {
  $Crud->insertDB("produto", "?,?,?,?,?", array($Id, $Descricao, $Quantidade, $Valor, $Nome));
} else {
  $Crud->updateDB(
    "produto",
    "descricao=?,quantidade=?,valor=?,nome=?",
    "id=?",
    array(
      $Descricao,
      $Quantidade,
      $Valor,
      $Nome,
      $Id
    )
  );
}
header("location:http://localhost/editado/d-cadastro-produto.php");
exit();
