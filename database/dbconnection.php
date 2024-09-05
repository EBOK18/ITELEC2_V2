<?php

class Database {
  private $server_name;
  private $db_name;
  private $user_name;
  private $password;
  public $pdo;

  public function __construct() {
    if($_SERVER["SERVER_NAME"] === "localhost" || $_SERVER["SERVER_ADDR"] === "127.0.0.1" || $_SERVER["SERVER_ADDR"] === "192.168.1.72") {
      $this->server_name = "localhost";
      $this->db_name = "itelec2";
      $this->user_name = "root";
      $this->password = "";
    } else {
      $this->server_name = "localhost";
      $this->db_name = "";
      $this->user_name = "";
      $this->password = "";
    }
  }

  public function connect() {
    $this->pdo = null;

    try {
      $this->pdo = new PDO("mysql:host={$this->server_name};dbname={$this->db_name}", $this->user_name, $this->password);
      $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $pdo_err) {
      echo "<script>alert(\"Database Connection Failed.\");</script>";
      echo "<h1>{$pdo_err->getMessage()}</h1>";
    }

    return $this->pdo;
  }
}