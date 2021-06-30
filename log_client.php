<?php
session_start();
include("config/connect.php"); // connect database directory
if (isset($_POST["sign_up"]) && isset($_POST["full_name"])  && isset($_POST["phone"])  && isset($_POST["email"])  && isset($_POST["company_name"]) && isset($_POST["adress"]) && isset($_POST["password"])) {
$stmt = $conn->prepare("INSERT INTO client (Email,password,Phone,Name,Company,Adress) VALUES(:Email,:password,:Phone,:Name,:Company,:Adress)");
$stmt->bindParam(":password",$_POST["password"],PDO::PARAM_STR);
$stmt->bindParam(":Email",$_POST["email"],PDO::PARAM_STR);
$stmt->bindParam(":Phone",$_POST["phone"],PDO::PARAM_STR);
$stmt->bindParam(":Name",$_POST["full_name"],PDO::PARAM_STR);
$stmt->bindParam(":Company",$_POST["company_name"],PDO::PARAM_STR);
$stmt->bindParam(":Adress",$_POST["adress"],PDO::PARAM_STR);
$stmt->execute();
class user{
  public $username;
}
$ob = new user();
$ob->username = $_POST["email"];
$_SESSION["client_session"] = $_POST["email"];
echo "1";
}
else if(isset($_POST["check_emil_exist"]) && isset($_POST["email"])){
  $stmt = $conn->prepare("SELECT Email FROM client WHERE Email = :Email");
  $stmt ->bindParam(":Email",$_POST["email"],PDO::PARAM_STR);
  $stmt->execute();
  $ROW  = $stmt->rowCount();
  echo $ROW;
}
else if(isset($_POST["check_Phone_exist"]) && isset($_POST["Phone"])){
  $stmt = $conn->prepare("SELECT Phone FROM client WHERE Phone = :Phone");
  $stmt ->bindParam(":Phone",$_POST["Phone"],PDO::PARAM_STR);
  $stmt->execute();
  $ROW  = $stmt->rowCount();
  echo $ROW;
}
else if(isset($_POST["login"]) && isset($_POST["email"]) && isset($_POST["passwod"])){
  $stmt = $conn->prepare("SELECT Email FROM client WHERE Email OR Phone = :Email AND  password = :password ");
  $stmt ->bindParam(":Email",$_POST["email"],PDO::PARAM_STR);
    $stmt ->bindParam(":password",$_POST["passwod"],PDO::PARAM_STR);
  $stmt->execute();
  $row = $stmt->rowCount();
  $RE = 0;
  if ($row > 0) {
      $_SESSION["client_session"] = $_POST["email"];
      $RE  = 1;

  }

  echo $RE;
}
else{

}
 ?>
