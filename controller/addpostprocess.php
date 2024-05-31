<?php 

include"../model/database.php";

$caption = $_POST["caption"];
$hashtag = $_POST["hashtag"];
$userid = $_POST["userid"];

$file = "../media/"  .  $_FILES["imageOrVideo"]["name"];

$insert_post = $db->query("INSERT INTO media(media , caption , Hashtags , userid) VALUE( '$file' , '$caption' , '$hashtag' ,'$userid'  ) ");

move_uploaded_file( $_FILES["imageOrVideo"]["tmp_name"] , $file );

header("location: /shabake/controller/massages.php")


?>