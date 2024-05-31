<?php 

include"../model/database.php";

$followed = $_POST["followed"];
$follower = $_POST["follower"];

$isFollowed = $db->query("SELECT * FROM follow WHERE follower = '$follower'  AND followed = '$followed' ");
$followCounts = $isFollowed->num_rows;

if ($followCounts != 0){
 echo 0 ;
    $unFollow = $db->query("DELETE FROM follow WHERE follower = '$follower'  AND followed = '$followed' ");
}else{
    echo 1 ;
   $follow =  $db->query("INSERT INTO follow(follower , followed ) VALUE( '$follower' , '$followed' ) ");
}


?>