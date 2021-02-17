<?php 

include"baglan.php";
if($_POST["uname"]&& isset($_POST["password"])) 
$uname=$_POST["uname"]; 
$password=$_POST["password"]; 
if(empty($uname) or empty($password)) 
{
echo 'Enter mail and password';
}
else
{
$sql= $pdo->prepare("SELECT * FROM user WHERE user_mail='$uname' AND user_password='$password'"); 
$query = $pdo->query("SELECT * FROM user WHERE user_name='{$uname}' AND user_password='{$password}'")->fetch(PDO::FETCH_ASSOC); 
$sql -> execute();
if($sql -> rowCount()){
$_SESSION["login"]=TRUE; 
$_SESSION["id"]=$query["id"];
$_SESSION["uname"]=$query["uname"];
$_SESSION["user_name"]=$query["user_name"];
header("Location:index.php?=name$uname");
echo 'Login success';
}
else {echo 'login error';}
}

?>