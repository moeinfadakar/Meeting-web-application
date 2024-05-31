<?php 
include"../model/database.php";

$alls = $db->query("SELECT * FROM media");




require"../view/explore.php"


?>