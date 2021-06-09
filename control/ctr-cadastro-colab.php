<?php
include("../model/conexao.php");
include("../model/variaveis.php");
include("../model/classcrud.php");
$Crud = new ClassCrud();
if ($Acao == 'Cadastrar') {
  $Crud->insertDB(
    "funcionario",
    "?,?,?,?,?,?,?,?,?,?,?,?,?",
    array($Id, $Email, $Senha, $Nome, $Sexo, $Nascimento, $Cpf, $Telefone, $Endereco, $Cidade, $Estado, $Funcao, $Cep)
  );
} else {
  $Crud->updateDB(
    "funcionario",
    "login=?,senha=?,nome=?,sexo=?,dataNascimento=?,cpf=?,telefone=?,endereco=?,cidade=?,funcao=?,cep=?",
    "id=?",
    array(
      $Email,
      $Senha,
      $Nome,
      $Sexo,
      $Nascimento,
      $Cpf,
      $Telefone,
      $Endereco,
      $Cidade,
      $Funcao,
      $Cep,
      $Id
    )
  );
}
header("location:http://localhost/editado/d-cadastro-colab.php");
exit();
