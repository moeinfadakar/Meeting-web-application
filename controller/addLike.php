<?php

include"../model/database.php";

$User_liked_post = $_POST["User_liked_post"];
$Liked_post = $_POST["Liked_post"];


$IsLiked = $db->query("SELECT * FROM liks WHERE user_id = '$User_liked_post' AND post_id = '$Liked_post' ");
$numberOfLikes = $IsLiked->num_rows;


if ($numberOfLikes != 0){
    echo 1 ;

    $Delete_like  = $db->query("DELETE FROM liks WHERE user_id = '$User_liked_post' AND post_id = '$Liked_post' ");

}else{ // liked before

    $insert_like = $db->query("INSERT INTO liks(user_id , post_id) VALUE( '$User_liked_post' ,'$Liked_post') ");

    echo 0 ;
}

?>