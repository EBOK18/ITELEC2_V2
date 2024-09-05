<?php
require_once "../../../database/dbconnection.php";
include_once "../../../config/settings-configuration.php";

class Admin {
  private $database;

  public function __construct() {
    $this->database = (new Database())->connect();
  }

  public function add($csrf_token, $user_name, $email, $password) {
    if(!isset($csrf_token) || !hash_equals($_SESSION["csrf_token"], $csrf_token)) {
      echo "<script>alert(\"Invalid CSRF Token.\");</script>";
      echo "<script>window.location.href = \"../../../\";</script>";
      exit();
    }
    unset($_SESSION["csrf_token"]);

    $stmt = $this->database->prepare("SELECT * FROM user WHERE email = :email");
    $stmt->execute(array(":email" => $email));

    if($stmt->rowCount() > 0) {
      echo "<script>alert(\"Account Already Existing.\"); window.location.href = \"../../../\";</script>";
      exit();
    }

    $hash_pw = md5($password);
    $stmt = $this->database->prepare("INSERT INTO user(username, email, password) VALUES(:username, :email, :password)");
    $exec = $stmt->execute(array(
      ":username" => $user_name,
      ":email" => $email,
      ":password" => $hash_pw
    ));

    if($exec) {
      echo "<script>alert(\"Account Added Successfully.\"); window.location.href = \"../../../\";</script>";
      exit();
    } else {
      echo "<script>alert(\"Accound Adding Failed.\"); window.location.href = \"../../../\";</script>";
      exit();
    }
  }

  public function signIn($csrf_token, $email, $password) {
    try {
      if(!isset($csrf_token) || !hash_equals($_SESSION["csrf_token"], $csrf_token)) {
        echo "<script>alert(\"Invalid CSRF Token.\"); window.location.href = \"../../../\";</script>";
        exit();
      }
      unset($_SESSION["csrf_token"]);

      $stmt = $this->database->prepare("SELECT * FROM user WHERE email = :email");
      $stmt->execute(array(":email" => $email));
      $admin = $stmt->fetch(PDO::FETCH_ASSOC);

      if($stmt->rowCount() <= 0) {
        echo "<script>alert(\"Account Does Not Existing.\"); window.location.href = \"../../../\";</script>";
        exit();
      }

      if($stmt->rowCount() == 1 && $admin["password"] == md5($password)) {
        $this->logs("{$admin['username']} signed in.", $admin["id"]);

        $_SESSION["acc_signed_in"] = $admin;

        header("Location: ../");
        exit();
      } else {
        echo "<script>alert(\"Wrong Password.\"); window.location.href = \"../../../\";</script>";
        exit();
      }
      
    } catch(PDOException $pdo_err) {
      echo "<h1>{$pdo_err->getMessage()}</h1>";
    }
  }

  public function signOut() {
    if(!isset($_SESSION["acc_signed_in"])) exit();

    $this->logs("{$_SESSION['acc_signed_in']['username']} signed out.", $_SESSION["acc_signed_in"]["id"]);

    session_unset();
    session_destroy();

    echo "<script>alert(\"Signed Out Successfully.\"); window.location.href = \"../../../\";</script>";
    exit();
  }

  public function logs($activity, $user_id) {
    ($this->database->prepare("INSERT INTO logs(activity, user_id) VALUES(:activity, :user_id)"))->execute(array(
      ":activity" => $activity,
      ":user_id" => $user_id
    ));
  }

  public function runQuery($sql) {
    return $this->database->prepare($sql);
  }

}

if(isset($_POST["signup"])) {
  (new Admin())->add(
    trim($_POST["csrf_token"]),
    trim($_POST["user_name"]),
    trim($_POST["email"]),
    trim($_POST["password"])
  );
}

if(isset($_POST["signin"])) {
  (new Admin())->signIn(
    trim($_POST["csrf_token"]),
    trim($_POST["email"]),
    trim($_POST["password"])
  );
}

if(isset($_GET["logout"]) && $_GET["logout"] == true) {
  (new Admin())->signOut();
}