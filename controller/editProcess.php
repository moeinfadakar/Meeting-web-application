<?php 

include"../model/database.php";

$caption = $_POST["caption"];
$hashtags = $_POST["hashtags"];
$id = $_POST["id"];


$filename = "../media/"  .  $_FILES["file"]["name"]  ;





    
$insert = $db->query("UPDATE media SET media = '$filename' , caption = '$caption', Hashtags = '$hashtags' WHERE id = '$id'  ");

    move_uploaded_file( $_FILES["file"]["tmp_name"] , $filename  );


header("location: massages.php")


?>