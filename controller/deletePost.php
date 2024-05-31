<?php 

include"../model/database.php";

$postDeleteId = $_GET["id"];

$db->query("DELETE FROM media WHERE id = '$postDeleteId' ");

header("location: /shabake/controller/massages.php");

?>