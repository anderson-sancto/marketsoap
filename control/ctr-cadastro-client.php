<?php
include("../model/variaveis.php");
include("../model/conexao.php");
include("../model/classcrud.php");
$Crud = new ClassCrud();
if ($Acao == 'Cadastrar') {
  $Crud->insertDB(
    "cliente",
    "?,?,?,?,?,?,?,?,?,?,?",
    array($Id, $Nome, $Sexo, $Nascimento, $Cpf, $Telefone, $Endereco, $Cidade, $Estado, $Cep, $Email)
  );
} else {
  $Crud->updateDB(
    "cliente",
    "nome=?,sexo=?,dataNascimento=?,cpf=?,telefone=?,endereco=?,cidade=?,estado=?,cep=?,email=?",
    "id=?",
    array(
      $Nome,
      $Sexo,
      $Nascimento,
      $Cpf,
      $Telefone,
      $Endereco,
      $Cidade,
      $Estado,
      $Cep,
      $Email,
      $Id
    )
  );
  header("location:http://localhost/editado/d-listar-client.php");
}
header("location:http://localhost/editado/d-listar-client.php");
exit();
