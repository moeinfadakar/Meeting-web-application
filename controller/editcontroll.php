<?php

include"../model/database.php";

session_start();

$id = $_GET["id"];

$findPosts = $db->query("SELECT * FROM media WHERE id = '$id' ");

$array = array();


foreach ($findPosts as $findpost){
  


$array[] = $findpost ;

}

require"../view/viewedit.php";



?>
