<?php 



include"../model/database.php";

session_start();

// getting information from database (Post + users)

$posts = $db->query("SELECT *, users.id AS id_karbar , media.id AS id_post
                                     FROM media INNER JOIN users 
                                     ON media.userId =users.id  ORDER BY time DESC ");

$my_array = array();


$userId = $_SESSION["user_id"];
$FindName = $db->query("SELECT * FROM users WHERE id = '$userId' ");
$name = $FindName->fetch_assoc();
$username_Login = $name["Full_name"];
$userPic = $name["image"];

foreach ($posts as $post){

 $post_id = $post["id_post"];




$post["user_post"] = $db->query("SELECT * FROM media WHERE userId = '$userId' ")->fetch_assoc();
$post["liks"] =$db->query("SELECT COUNT(*) AS count FROM liks WHERE post_id = '$post_id' ")->fetch_assoc();
 $post["comments"] = $db->query("SELECT * FROM comments INNER JOIN users ON comments.user_id = users.id  WHERE post_id = '$post_id' ");
$post["follow"] = $db->query("SELECT *  FROM media INNER JOIN follow WHERE media.userid = follow.followed ")->fetch_assoc();
$my_array[] = $post;
 
$PicPost = $post["media"];

}

// Finding The username

require "../view/index.php" ;


?>