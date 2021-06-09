<?php
class dataBase
{
  private $login = "root";
  private $senha = "";

  public $conn;

  public function dbConnection()
  {
    $this->conn = null;
    try {
      //executar o algoritmo
      $this->conn = new PDO('mysql:host=localhost;dbname=MarketSoap', $this->login, $this->senha);
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
    return $this->conn;
  }
}
