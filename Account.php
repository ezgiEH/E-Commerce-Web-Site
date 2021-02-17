<?php
include"baglan.php";

if(isset($_POST['user_name'], $_POST['user_mail'], $_POST['user_password'], $_POST['user_phone'], $_POST['user_address'], $_POST['user_tc']))
{
    
        $Insert=$pdo->prepare("INSERT INTO user(user_name,user_mail,user_password,user_address,user_phone,user_tc) VALUES(:user_name,:user_mail,:user_password,:user_address,:user_phone,:user_tc)");
        
           $Status=$Insert->execute(
            array(
                "user_name"=>$_POST['user_name'],
                "user_mail"=>$_POST['user_mail'],
                "user_password"=>$_POST['user_password'],
                "user_address"=>$_POST['user_address'],
                "user_phone"=>$_POST['user_phone'],
                "user_tc"=>$_POST['user_tc']
                                  
            )
        );
       
        $user_id=$pdo->lastInsertid();
		header("Location:CreateAcc.php?id=".intval($user_id));
		exit;
        print_r($update->errorInfo()); 
}

?>    