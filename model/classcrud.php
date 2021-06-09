<?php
class classcrud extends dataBase
{
  private $Crud;
  private $Contador;
  private function preparedStatements($Query, $Parametros)
  {
    $this->countParametros($Parametros);
    $this->Crud = $this->dbConnection()->prepare($Query);
    if ($this->Contador > 0) {
      for ($I = 1; $I <= $this->Contador; $I++) {
        $this->Crud->bindValue($I, $Parametros[$I - 1]);
      }
    }
    return $this->Crud->execute();
  }
  #contador de parametros
  private function countParametros($Parametros)
  {
    $this->Contador = count($Parametros);
  }
  #inserção do db
  public function insertDB($Tabela, $Condicao, $Parametros)
  {
    return $this->preparedStatements("insert into {$Tabela} values ({$Condicao})", $Parametros);
  }
  #seleção no db
  public function selectDB($Campos, $Tabela, $Condicao, $Parametros)
  {
    $this->preparedStatements("select {$Campos} from {$Tabela} {$Condicao}", $Parametros);
    return $this->Crud;
  }
  #deletar dados db
  public function deleteDB($Tabela, $Condicao, $Parametros)
  {
    $this->preparedStatements("delete from {$Tabela} where {$Condicao}", $Parametros);
    return $this->Crud;
  }
  #Atualização no db
  public function updateDB($Tabela, $Set, $Condicao, $Parametros)
  {
    $this->preparedStatements("update {$Tabela} set {$Set} where {$Condicao}", $Parametros);
    return $this->Crud;
  }
  #Join DB
  public function joinDB($Campos, $Tabela, $Tabela2, $IdTabela, $IdTabela2, $Tabela3, $IdTabela3, $IdTabela4, $Tabela4, $IdTabela5, $IdTabela6, $CondicaoA, $CondicaoB, $Parametros)
  {
    $this->preparedStatements("select {$Campos} from {$Tabela} inner join {$Tabela2} on {$IdTabela} = {$IdTabela2} inner join {$Tabela3} on {$IdTabela3} = {$IdTabela4} inner join {$Tabela4} on {$IdTabela5} = {$IdTabela6} where {$CondicaoA} = {$CondicaoB}", $Parametros);
    return $this->Crud;
  }
}
