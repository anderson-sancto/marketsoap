<?php
session_start();
require_once '../model/funcionario.php';
$objFunc = new Funcionario();
if (isset($_POST['txtlogin'])) {
  $login = $_POST['txtlogin'];
  $senha = $_POST['txtsenha'];
  //echo $login; exit;
  if ($objFunc->validar($login, $senha)) {
    $_SESSION['email'] = $login;
    $objFunc->redirect('../d-venda.php');
  } else {
    $objFunc->redirect('../login.php?login=false');
  }
}
if (isset($_POST['delete'])) {
  $id = $_POST['txtId'];
  if ($objFunc->deletar($id)) {
    $objFunc->redirect('../d-venda.php');
  }
}
