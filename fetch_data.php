<?php
include("config/connect.php");


if(isset($_POST["Subject"]) && isset($_POST["Message"]) && isset($_POST["Email"]) &&
isset($_POST["Phone"]) && isset($_POST["Adress"])){

$User_IP = "";
$stmt = $conn->prepare("INSERT INTO message (Subject,Message,Date_TIME,
Email,User_IP,Phone,Adress) VALUES(:Subject,:Message,NOW(),
:Email,:User_IP,:Phone,:Adress)");

$stmt->bindParam(":Subject",$_POST["Subject"],PDO::PARAM_STR);
$stmt->bindParam(":Message",$_POST["Message"],PDO::PARAM_STR);
$stmt->bindParam(":Email",$_POST["Email"],PDO::PARAM_STR);
$stmt->bindParam(":User_IP",$User_IP,PDO::PARAM_STR);
$stmt->bindParam(":Phone",$_POST["Phone"],PDO::PARAM_STR);
$stmt->bindParam(":Adress",$_POST["Adress"],PDO::PARAM_STR);
$stmt->execute();
if ($stmt->rowCount() > 0) {
  echo "1";
}else{
  echo "0";
}

}else if(isset($_POST["set_succ_paypal"]) && isset($_POST["email"]) && isset($_POST["product_id"])){

$stmt = $conn->prepare("INSERT INTO success_payment SET(email,date_succesed,product_id) values(:email,now(),:product_id)");
$stmt->bindParam(":email",$_POST["email"],PDO::PARAM_STR);
$stmt->bindParam(":product_id",$_POST["product_id"],PDO::PARAM_STR);
$stmt->execute();
}else if(isset($_POST["add_news"]) && isset($_POST["title"]) && isset($_POST["text"]) && isset($_POST["image"]) && isset($_POST["email"])){

}
else if(isset($_POST["logout"]) && isset($_POST["ok"])){

  session_start();
  session_unset();
  session_destroy();

}
else{
  header("location:index.php");
  exit();
}
?>
