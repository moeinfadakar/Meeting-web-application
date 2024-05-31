<?php 

include"../model/database.php";

$TEXT = $_POST["text"];
$USERID = $_POST["USERID"];
$POSTID = $_POST["POSTID"];

$result = $db->query("INSERT INTO comments( text , user_id , post_id ) VALUE( '$TEXT' , '$USERID' , '$POSTID' )");
if($result){
 echo 1 ;   
}else{
echo 2;
}


?>


