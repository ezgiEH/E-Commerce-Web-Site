
<?php
ob_start();
session_start();
$host = '127.0.0.1'; // localhost
$db   = 'eticaret';
$user = 'your username';
$pass = 'your password';
$charset = 'utf8mb4';
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
try { // hata yoksa
     $pdo = new PDO($dsn, $user, $pass);
} catch (PDOException $e) { // hata varsa göster
     throw new PDOException($e->getMessage(), (int)$e->getCode());
}

$sett = "SELECT * FROM setting"; 
$result = $pdo->query($sett);
$row = $pdo->query($sett)->fetch();

            
$kul="SELECT * FROM user";                          
$sonuc=$pdo->query($kul);                         
$user=$pdo->query($kul)->fetch();

/*
if(strpos($_SERVER['SCRIPT_NAME'], "admin/") && substr($_SERVER['SCRIPT_NAME'], -9)!="Login.php" && substr($_SERVER['SCRIPT_NAME'], -17)!="LoginControl.php")
{
	if(!isset($_SESSION['user_id']))
	{
		header("Location:Login.php");
		exit();
	}
}

if(strpos($_SERVER['SCRIPT_NAME'], "eticaret") && substr($_SERVER['SCRIPT_NAME'], -9)!="Signin.php" && substr($_SERVER['SCRIPT_NAME'], -17)!="SigninControl.php")
{
	if(!isset($_SESSION['user_id']))
	{
		header("Location:Signin.php");
		exit();
	}
}
*/

?>
