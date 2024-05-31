<?php

include"../model/database.php";

$id = $_GET["id"];

$users = $db->query("SELECT * FROM users WHERE id='$id'");

$followers = $db->query("SELECT * FROM follow WHERE follower = '$id'  ");
$followersCount = $followers->num_rows; 

$followed = $db->query("SELECT * FROM follow WHERE followed = '$id'  ");
$followedCount = $followed->num_rows;

$userPosts = $db->query("SELECT * FROM media WHERE userid = '$id' ");


require"../view/profile.php";

?>