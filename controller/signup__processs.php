<?php

include "../model/database.php";



session_start();


$name = $_POST["name"];
$email = $_POST["email"];
$username = $_POST["username"];
$password = $_POST["password"];
$gender = $_POST["gender"];
$number = $_POST["number"];
$age = $_POST["age"];
$bio = $_POST["bio"];
$birthday = $_POST["birthday"];
$password__repeat = $_POST["password__repeat"];

// ,Uploading Files

$image = $_FILES["image"];
$image_name = '' . $_FILES["image"]["name"];

$secure_password = md5($password);


if (strlen($username) <= 4 && strlen($password) <= 8  ){

    $_SESSION["message_strlen"] = 'Password most be more than 8 character and username most be more than 4 character';
}else{

$user_count = $db->query("SELECT * FROM Users  WHERE User_name = '$username'  ")->num_rows;
if(($password == $password__repeat) && $user_count == 0)
{ 
  
    $insert_side = $db->query("INSERT INTO users(Full_name,User_name,password,email,image,birthday,bio,mobail_number,Gender,age) VALUE('$name','$username','$secure_password','$email','$image_name','$birthday','$bio','$number','$gender','$age')");
    $_SESSION["message__success"] = 'Congratulations, registration was successful';
    
}
else{
   
    if($user_count > 0){
    
        $_SESSION["user__found"] = 'This userName is Already exist !';
    }
    
    if($password != $password__repeat){
    
        $_SESSION["password_not_match"] = 'passwords are not same !';

    }
}


}
header("location: /shabake/index ");





?>

