
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/shabake/view/bootstrap.rtl.css">
<link rel="stylesheet" href="/shabake/view/style.css">
<link rel="stylesheet" href="/shabake/view/all.css">
    <title>profiles</title>
</head>
<body>
  <div class="bg-warning">
    <div class="bg-warning text-dark" style="width:auto;">
<div class="container-fluid">
  <?php foreach($users as $user): ?>
<div class="row p-4 bg-light rounded-3 ">
    <div class="col-2">
        <img src="<?php
        
        if($user["image"] != ""){
          echo $user["image"];
}else{ // there is noo profile
if ($user["Gender"] == 1 || $user["Gender"] == 3){
  echo"../Images/userpicture/male.png";
}else{
  echo"../Images/userpicture/female.png";
}


}
        
        
        
        
        
        
       ?>" class="w-100 h-100 border-1 rounded-4  p-1 " alt="">
    </div>
    <div class="col-6 text-dark bg-light">

<h2> <i class="fa-thin fa-person"></i>  full name : <?php echo $user["Full_name"]; ?></h2>
<h3> <i class="fa-thin fa-at"></i>  Username : @<?php echo $user["User_name"] ?></h3>
<h3><i class="fa-thin fa-pen"></i>  bio : <?php echo $user["bio"]; ?></h3>
      <h3><a href="/shabake/controller/massages.php" class="btn btn-success text-white mt-2 w-25  fs-5 rounded-pill p-2 d-flex justify-content-center align-items-center">
      <svg width="30" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
</svg>
      follow
      <svg width="30" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
</svg>

</a></h3>

    </div>
    <div class="col-4 text-dark">
     
        <h3>following :  <?php echo $followedCount ?></h3>
        <h3>Followers : <?php echo $followersCount ?></h3>
     
        <h3><a href="/shabake/controller/massages.php" class="btn btn-danger text-white mt-2 w-50 fs-5 rounded-pill p-2 d-flex justify-content-center align-items-center">
     
        <svg width="30" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
</svg>

        back
        <svg width="30" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3" />
</svg>


</a></h3>
  

        
    </div>
</div>
<div class="row">
<div class="card bg-transparent text-white border-0">
  <div class="card-body fs-4 p-1 bg-transparent d-flex justify-content-center border-0">
  </div>
</div>
</div>
<br>
<div class="row">
  
<div class="card bg-transparent text-white">

</div>
</div>
<br>

<?php endforeach; ?>
<div class="row">
<div class="card bg-transparent text-white border-0">
  <div class="card-body fs-4 p-1 bg-transparent border-0 text-center text-dark">
Posts
  </div>
</div>
</div>
<div class="row d-flex justify-content-evenly">
<!-- a foreach will come here -->
<?php foreach($userPosts as $post): ?>

<div class="card p-0" style="width:30%;">
  <img src="<?php echo $post["media"]; ?>" class="card-img-top" alt="...">
  <div class="card-body">
  <div class="action__wrapper d-flex justify-content-center">
<div class="like d-flex justify-content-center"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-25">
  <path stroke-linecap="round" stroke-linejoin="round" d="M7.217 10.907a2.25 2.25 0 1 0 0 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186 9.566-5.314m-9.566 7.5 9.566 5.314m0 0a2.25 2.25 0 1 0 3.935 2.186 2.25 2.25 0 0 0-3.935-2.186Zm0-12.814a2.25 2.25 0 1 0 3.933-2.185 2.25 2.25 0 0 0-3.933 2.185Z" />
</svg>
</div>
<div class="share d-flex justify-content-center">
    <a href="Comments" class="d-flex justify-content-center text-dark">
<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="margin: 0 auto ;" class="w-25">
  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.068.157 2.148.279 3.238.364.466.037.893.281 1.153.671L12 21l2.652-3.978c.26-.39.687-.634 1.153-.67 1.09-.086 2.17-.208 3.238-.365 1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
</svg>

    </a>
</div>
<div class="like d-flex justify-content-center">
<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-25">
  <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
</svg>

</div>
<div class="like d-flex justify-content-center">
<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-25">
  <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0Z" />
</svg>
</div>
  </div>
  <br>
 
    <p class="card-text"><?php echo $post["caption"]; ?></p>
  <br>
    <h6>Likes :</h6>
  <h6>Comments :</h6> 
</div>
</div>
<?php endforeach; ?>






    </div>


<script src="/shabake/view/all.js"></script>
    <script src="/shabake/view/bootstrap.bundle.js"></script>
    </div>
</body>
</html>