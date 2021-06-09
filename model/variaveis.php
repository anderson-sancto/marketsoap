<?php
if (isset($_POST['Acao'])) {
  $Acao = filter_input(INPUT_POST, 'Acao', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['Acao'])) {
  $Acao = filter_input(INPUT_GET, 'Acao', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
  $Acao = "0";
}
if (isset($_POST['id'])) {
  $Id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['id'])) {
  $Id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
  $Id = "0";
}
if (isset($_POST['inputName'])) {
  $Nome = filter_input(INPUT_POST, 'inputName', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['inputName'])) {
  $Nome = filter_input(INPUT_GET, 'inputName', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
  $Nome = "";
}
if (isset($_POST['sexo'])) {
  $Sexo = filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['sexo'])) {
  $Sexo = filter_input(INPUT_GET, 'sexo', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
  $Sexo = "";
}
if (isset($_POST['telefone'])) {
  $Telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['telefone'])) {
  $Telefone = filter_input(INPUT_GET, 'telefone', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
  $Telefone = "";
}
if (isset($_POST['email'])) {
  $Email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['email'])) {
  $Email = filter_input(INPUT_GET, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
  $Email = "";
}
if (isset($_POST['senha'])) {
  $Senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['senha'])) {
  $Senha = filter_input(INPUT_GET, 'senha', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
  $Senha = "";
}
if (isset($_POST['nascimento'])) {
  $Nascimento = filter_input(INPUT_POST, 'nascimento', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['nascimento'])) {
  $Nascimento = filter_input(INPUT_GET, 'nascimento', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
  $Nascimento = "";
}
if (isset($_POST['endereco'])) {
  $Endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['endereco'])) {
  $Endereco = filter_input(INPUT_GET, 'endereco', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
  $Endereco = "";
}
if (isset($_POST['cidade'])) {
  $Cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['cidade'])) {
  $Cidade = filter_input(INPUT_GET, 'cidade', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
  $Cidade = "";
}
if (isset($_POST['estado'])) {
  $Estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['estado'])) {
  $Estado = filter_input(INPUT_GET, 'estado', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
  $Estado = "";
}
if (isset($_POST['funcao'])) {
  $Funcao = filter_input(INPUT_POST, 'funcao', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['funcao'])) {
  $Funcao = filter_input(INPUT_GET, 'funcao', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
  $Funcao = "";
}
if (isset($_POST['valor'])) {
  $Valor = filter_input(INPUT_POST, 'valor', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['valor'])) {
  $Valor = filter_input(INPUT_GET, 'valor', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
  $Valor = "";
}
if (isset($_POST['descricao'])) {
  $Descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['descricao'])) {
  $Descricao = filter_input(INPUT_GET, 'descricao', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
  $Descricao = "";
}
if (isset($_POST['quantidade'])) {
  $Quantidade = filter_input(INPUT_POST, 'quantidade', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['quantidae'])) {
  $Quantidade = filter_input(INPUT_GET, 'quantidade', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
  $Quantidade = "";
}
if (isset($_POST['cpf'])) {
  $Cpf = filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['cpf'])) {
  $Cpf = filter_input(INPUT_GET, 'cpf', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
  $Cpf = "";
}
if (isset($_POST['cep'])) {
  $Cep = filter_input(INPUT_POST, 'cep', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['cep'])) {
  $Cep = filter_input(INPUT_GET, 'cep', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
  $Cep = "";
}
