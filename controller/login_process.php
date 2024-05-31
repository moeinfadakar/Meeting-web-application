<?php 

include"../model/database.php";


session_start();

$_SESSION["login_status"] = false ;

$Username = $_POST["username"];
$Password = $_POST["Password"];

$secure_password = md5($Password);




$Result = $db->query("SELECT * FROM users WHERE User_name = '$Username'  ");
$users_count = $Result->num_rows ; 

$resultPassword = $db->query("SELECT * FROM users WHERE password = '$secure_password' ");
$passwordCount = $resultPassword->num_rows;




if($users_count == 1 && $passwordCount == 1){

$user = $Result->fetch_assoc() ;


 $_SESSION["username"] = $Username  ;
 $_SESSION["user_id"] =  $user["id"]  ;
$_SESSION["login_status"] = true ;
 
$_SESSION["successful__inter"] = "Welcome back";

echo"دوست دارم شدید به مدت مدید" ;

 header("location: massages.php");

}else{

    

if ($passwordCount == 0 || $passwordCount == '' ){
    $_SESSION["massage__password__not__found"] = 'password is not find' ;
echo"پسوردت پیدا نشد";
}

if ($users_count == 0 || $users_count == '' ){
    $_SESSION["massage__User__not__found"] = 'username is not find' ;
    echo"یوزر نیمت پیدا نشد ";  
}


header("location: /shabake/home");


};
?>




