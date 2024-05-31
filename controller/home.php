<?php

include"model/database.php";

$POSTS = $db->query("SELECT * FROM media INNER JOIN users ON media.userid = users.id");

require "view/home.php" ;
?>


