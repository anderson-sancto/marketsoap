<?php
include("../model/conexao.php");
include("../model/classcrud.php");


$Crud = new classcrud();
$IdUser = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);

$Crud->deleteDB(
  "produto",
  "id=?",
  array($IdUser)
);

header("location:http://localhost/editado/d-listar-produto.php");
