<?php

class Database {
  private $host = DB_HOST,
          $user = DB_USER,
          $pass = DB_PASS,
          $db_name = DB_NAME;

  private $dbh,$stmt;

  public function __construct()
  {
    // data source name
    $dsn = "mysql:host={$this->host};dbname={$this->db_name}";
    $option = [
      PDO::ATTR_PERSISTENT => true, //agar koneksi database tetap terjaga terus
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];

    try {
      $this->dbh = new PDO($dsn, $this->user, $this->pass, $option);
    } catch(PDOException $e) {
      die($e->getMessage());
    }
  }

  // function query kedatabase
  public function query($query)
  {
    $this->stmt = $this->dbh->prepare($query);
  }

  public function bind($param, $value, $type = null)
  {
    if( is_null($type) ) {
      switch(true) {
        case is_int($value):
          $type = PDO::PARAM_INT;
          break;
        case is_bool($value):
          $type = PDO::PARAM_BOOL;
          break;
        case is_null($value):
          $type = PDO::PARAM_NULL;
          break;
        default :
          $type = PDO::PARAM_STR;        
      }
    }

    $this->stmt->bindValue($param, $value, $type);
  }

  // Execusi query
  public function execute() 
  {
    $this->stmt->execute();
  }
  
  // Mengembalikan data banyak dari database
  public function resultSet()
  {
    $this->execute();
    return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
  }

  // Mengembalikan satu data saja
  public function single()
  {
    $this->execute();
    return $this->stmt->fetch(PDO::FETCH_ASSOC);
  }

  public function rowCount() 
  {
    $this->stmt->rowCount();
  }

}