<?php 


?>




<?php if (isset($_SESSION["successful__inter"] )): ?>
  <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong><?php echo $_SESSION["successful__inter"]; ?></strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php unset($_SESSION["successful__inter"]); ?>
  <?php endif; ?>
<DOCTYPE>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/shabake/view/bootstrap.rtl.css">
<link rel="stylesheet" href="/shabake/view/style.css">
<title>Posts</title>
</head>
<body>


  <div class="bg-warning">
    <br>
    <div class="container-fluid">
        <div class="row">
<div class="col-3 position-" style="position:fixed; top: 0px; left:0px;">
  <div class="row p-2">

 
  </div>
  <a href="/shabake/view/profile.php" class=" text-decoration-none text-dark">

    <div class="row bg-light m-1 border-2 rounded-pill p-2">
<div class="col-4"><img src="<?php echo $userPic ; ?>" loading="lazy" width=60" class="rounded-pill" alt=""></div>
<div class="col-8 text-center p-2"><p  class=" fs-3  text-center"> <?php echo $username_Login; ?></p></div>
    </div>

</a>
<a href="../controller/addpost.php?id=<?php echo $userId; ?>" class="d-flex justify-content-center align-items-center text-white btn btn-info w-100 mt-2 rounded-pill fs-4 " type="button" id="addPost">
<svg width="32" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
</svg>
 NEW POST
 <svg width="32" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
</svg>
</a>

<div class="row w-100 text-center mt-2">
  <a href="../controller/explorecont.php" class="d-flex justify-content-center align-items-center  fs-3 text-decoration-none text-white p-2 bg-danger rounded-pill">
    <svg width="30" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="m15.75 15.75-2.489-2.489m0 0a3.375 3.375 0 1 0-4.773-4.773 3.375 3.375 0 0 0 4.774 4.774ZM21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
</svg>
EXPLORE
<svg width="30" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="m15.75 15.75-2.489-2.489m0 0a3.375 3.375 0 1 0-4.773-4.773 3.375 3.375 0 0 0 4.774 4.774ZM21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
</svg>
</a>
</div>
<div class="row w-100 text-center mt-2">
  <a href="/shabake/exit" class=" d-flex justify-content-center align-items-center fs-3 text-decoration-none text-danger p-2 bg-black rounded-pill">
  <svg width="30" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
</svg>
  EXIT
  <svg width="30" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
</svg>
</a>
</div>

</div>
<div class="col-3"></div>
<div class="col-9" style="margin: left 90vh !important;">
<form  id="newForm">
<div class="row p-5">
<div class="card mb-5" id="newPostbox" style="position:fixed; top: 0px; left:0px; z-index:1">
  <h5 class="card-header ">Send A New Post   </h5>
  
  <div class="card-body">

   <form action="../controller/addpostprocess.php" method="post" enctype="multipart/form-data"></form>
    <!-- sending posts :  -->
<div class="card mb-3">
  <div class="card-body">
<div class="row">
  <div class="col-6">
      <div class="form-floating mb-3">
  <input type="text" class="form-control" name="caption" id="floatingInput" placeholder="name@example.com">
  <label for="floatingInput">write your caption</label>
</div>
  </div>
  <div class="col-5">
  <div class="form-floating mb-3">
  <input type="text" class="form-control" name="hashtag" id="floatingInput" placeholder="name@example.com">
  <input type="hidden" class="form-control" name="user_id" value="<?php echo $post["id_karbar"]; ?>" id="" >
  <label for="floatingInput">write your hashtags</label>
</div>
  </div>
  <div class="col-1">
   <input type="file" id="send" name="imageOrVideo" class="d-none">
   <label for="send" class="btn  btn-light rounded-pill p-3"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 50 50">
<path d="M 25 2 C 12.309295 2 2 12.309295 2 25 C 2 37.690705 12.309295 48 25 48 C 37.690705 48 48 37.690705 48 25 C 48 12.309295 37.690705 2 25 2 z M 25 4 C 36.609824 4 46 13.390176 46 25 C 46 36.609824 36.609824 46 25 46 C 13.390176 46 4 36.609824 4 25 C 4 13.390176 13.390176 4 25 4 z M 24 13 L 24 24 L 13 24 L 13 26 L 24 26 L 24 37 L 26 37 L 26 26 L 37 26 L 37 24 L 26 24 L 26 13 L 24 13 z"></path>
</svg></label>
  </div>
</div>
 <button type="button" class="btn btn-primary" form="newForm" >Send</button>
<button type="button" class="btn btn-danger" id="close_btn" >X</button>

  </form>
<!-- sending images and videos -->





  </div>
</div>





 
  </div>
</div>
</div>


<br><br>
 <?php foreach($my_array as $post ) : ?>
<div class="holder d-flex justify-content-center mb-3 ">
   
 <div class="card w-50 ">
  
  <div class="card-header p-2">
    <div class="row">
<div class="col-2 d-flex justify-content-center align-items-center"><img src="<?php 

if($post["image"] != ""){
  echo $post["image"];
}else{ // there is noo profile
if ($post["Gender"] == 1 || $post["Gender"] == 3){
  echo"../Images/userpicture/male.png";
}else{
  echo"../Images/userpicture/female.png";
}


}


?>" width="50" loading="lazy" height="50" class="rounded-pill" alt=""></div>
<div class="col-5 text-end d-flex justify-content-center align-items-center p-2">
<h4 class="text-end"><a href="profilecontrol.php?id=<?php echo $post["userid"]; ?>" class="text-decoration-none text-dark"><?php echo $post["Full_name"]; ?></a></h4>

<br>
</div>
<div class="col-2 d-flex justify-content-center align-items-center">

</div>

<?php if ($post["userid"] != $userId ): ?>

<div class="col-3 d-flex justify-content-center align-items-center">
<form id="follow__form<?php echo $post["id_post"]; ?>">
<input type="hidden" value="<?php echo $post["id_karbar"]; ?>" name="followed">
<input type="hidden"  value="<?php echo $userId ; ?>" name="follower">
<button type="button" class="btn text-red   rounded-pill " id="follow__btn<?php echo $post["id_post"]; ?>" onclick="follow(<?php echo $post["id_post"]?>)">
  follow
</button>
</form>
</div>

<?php endif; ?>


<?php if ($post["userid"] === $userId ): ?>
<div class="col-2 d-flex justify-content-center align-items-center">
    <li class="nav-item dropdown " style="list-style-type:none;">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          <svg width="30" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
</svg>

          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/shabake/controller/editcontroll.php?id=<?php echo $post["id_post"] ; ?>">edit</a></li>
            <li><a class="dropdown-item" href="/shabake/controller/deletePost.php?id=<?php echo $post["id_post"] ; ?>">delete</a></li>
           
          </ul>
        </li>
</div>


  <?php endif; ?>

 

    </div>
</div>

<div class="card">

    <?php

    $fileExtension = pathinfo($post["media"] , PATHINFO_EXTENSION);

    // Display media based on its type

    switch ($fileExtension) {
        case 'jpg':
        case 'jpeg':
        case 'png':
            echo '<img src="'.$post['media'].'" alt="Image">';
            break;

        case 'mp4':
            echo '<video controls>
                    <source src="'.$post['media'].'" type="video/mp4">
                    Your browser does not support the video tag.
                  </video>';
            break;

        case 'mp3':
            echo '<audio controls>
                    <source src="'.$post['media'].'" type="audio/mpeg">
                    Your browser does not support the audio tag.
                  </audio>';
            break;

        case 'pdf':
            echo '<iframe src="'.$post['media'].'" width="100%" height="600px"></iframe>';
            break;

        default:
            echo 'Unsupported file type';
    }

?>

  <div class="card-body">
  <div class="action__wrapper d-flex justify-content-center">

<div class="like d-flex justify-content-center">
  <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-25">
  <path stroke-linecap="round" stroke-linejoin="round" d="M7.217 10.907a2.25 2.25 0 1 0 0 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186 9.566-5.314m-9.566 7.5 9.566 5.314m0 0a2.25 2.25 0 1 0 3.935 2.186 2.25 2.25 0 0 0-3.935-2.186Zm0-12.814a2.25 2.25 0 1 0 3.933-2.185 2.25 2.25 0 0 0-3.933 2.185Z" />
</svg>
<!-- comments -->

</div>
<div class="share d-flex justify-content-center">
  <button class="btn btn-primary p-0 bg-white border-0" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample-<?php echo $post["id_post"]; ?>" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" style="margin: 0 auto ;" class="w-25 text-black">
  <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12.76c0 1.6 1.123 2.994 2.707 3.227 1.068.157 2.148.279 3.238.364.466.037.893.281 1.153.671L12 21l2.652-3.978c.26-.39.687-.634 1.153-.67 1.09-.086 2.17-.208 3.238-.365 1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0 0 12 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018Z" />
</svg></button>
</div>

<!-- like -->
<form id="likeForm<?php echo $post["id_post"]; ?>">
  <input type="hidden" name="User_liked_post" value="<?php echo $post["id_karbar"]; ?>">
  <input type="hidden" name="Liked_post" value="<?php echo $post["id_post"];   ?>">
<button  style="cursor: pointer;" type="button"  class="like d-flex btn justify-content-center rounded-pill"  onclick="like_btn(<?php echo $post["id_post"] ?>,<?php echo $post["liks"]["count"]; ?>)" >
<svg id="like__btn<?php echo $post["id_post"]; ?>"  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-25">
  <path stroke-linecap="round" stroke-linejoin="round" d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12Z" />
</svg>
</button>
</form>

<div class="like d-flex justify-content-center">
<svg   xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-25">
  <path stroke-linecap="round" stroke-linejoin="round" d="M17.593 3.322c1.1.128 1.907 1.077 1.907 2.185V21L12 17.25 4.5 21V5.507c0-1.108.806-2.057 1.907-2.185a48.507 48.507 0 0 1 11.186 0Z" />
</svg>
</div>
  </div> 
  <br>
  <h6><?php echo $post["time"]; ?></h6><br>
    <h6 id="Likes<?php echo $post["id_post"]; ?>">likes <?php echo $post["liks"]["count"]; ?> </h6>
  <h6 id="comments">Comments : 43</h6> 
  <br>
    <h5 class="card-title"></h5><?php echo $post["caption"]; ?></h5>
    <br><br>
    <p class="card-text"><?php echo $post["Hashtags"]; ?></p>
  <br>

  <p class="d-inline-flex gap-1">

</p>



<div class="row">
  <div class="col" >
    <div class="collapse multi-collapse" id="multiCollapseExample-<?php echo $post["id_post"]; ?>">
    
    <div class="card card-body border-0">
        <?php foreach($post["comments"] as $comment): ?>

  <div class="card mb-3" id="card__holder">
<p class="rounded-pill" style="width: 40px;"  alt="" loading="lazy" ><?php echo $comment["Full_name"] ?>
<p class="text-dark"><?php echo $comment["text"]; ?></p>
</div>

<?php endforeach; ?>


    </div>
    </div>
  </div>

  <div class="row mt-2">
      <div class="collapse multi-collapse" id="multiCollapseExample-<?php echo $post["id_post"]; ?>">
 <div class="card card-body border-0">
  <form id="send__comments__form-<?php echo $post["id_post"]; ?>">
    <div class="row">
        <div class="col-8">
      <div class="form-floating mb-3">
  <input type="text"    name="text" class="form-control" id="floatingInput<?php echo $post["id_post"]; ?>" placeholder="write">
  <label for="floatingInput">Write A Comment</label>
<p id="label__post1<?php echo $post["id_post"]?>" class=" fs-4 "></p>

  <input type="hidden" value="<?php echo $userId; ?>" name="USERID" >
<input type="hidden" value="<?php echo $post["id_post"]; ?>" name="POSTID" id="post_id">



</div>
    </div>
    <div class="col-4">
    <button type="button" onclick="send_comments(<?php echo $post["id_post"]; ?>)" class="btn btn-dark">Send</button>
    </div>
    </div>

    </form>
    </div>
  </div>

  </div>

</div>
</div>

</div>
</div> 

</div>
<?php endforeach; ?>
<br><br>
<br>
<br>
</div>
<!-- Vertically centered modal -->

<!-- Vertically centered scrollable modal -->

  </div>
</div>
</div>
</div>
</div></div>

<script src="/shabake/view/bootstrap.bundle.js"></script>
<script src="/shabake/view/all.js"></script>
<script>

let addPost = document.getElementById("addPost")
let newPostbox = document.getElementById("newPostbox")
let close_btn =document.getElementById("close_btn")

newPostbox.style.display = 'none';

addPost.addEventListener( 'click' , function (){
newPostbox.style.display = 'block'
addPost.style.display ='none'
} )

close_btn.addEventListener( 'click' , function (){

newPostbox.style.display = 'none'
addPost.style.display ='block'


} )

// fetch api instead of  xtthhp request





async function send_comments(post_id){
let form =document.getElementById("send__comments__form-" + post_id);
let form_Data = new FormData(form);

let label__post =document.getElementById("label__post1" + post_id);
let floatingInput = document.getElementById("floatingInput" + post_id);

let x =await fetch( "/shabake/controller/addcomments.php" , {
  method : "post",
  body : form_Data

} );

let y = await x.text();




if (y){
let card__holder =document.getElementById("card__holder");

let p = document.createElement("p");
p.classList.add("text-dark");

p.innerHTML = form_Data.get("text");

card__holder.append(p);


label__post.classList.add("text-success")
label__post.innerHTML = "was successful !"
floatingInput.value = ''

setTimeout(  function (){

label__post.style.display = 'none'

}  , 3000 )


}else{

label__post.classList.add("text-danger")
label__post.innerHTML = "went wrong !"
floatingInput.innerHTML = ''

setTimeout(  function (){

label__post.style.display = 'none'

}  , 5000 );


}




}


/// fetch api for like btn 


async function like_btn(post_id,likeCount){
let like__btn = document.getElementById("like__btn" + post_id)
let likeNumberShow = document.getElementById("Likes" + post_id);

let likeForm =document.getElementById("likeForm"+ post_id);
let form =new FormData(likeForm);

let S =await fetch( "/shabake/controller/addLike.php"  , {
method:"post",
body: form
}  )

let y2 = await S.text();




if (y2 === 1){

like__btn.style.color = "black"
likeCount--

}else{
  like__btn.style.color = "red";
likeCount++

}

likeNumberShow.innerHTML = "like " + likeCount





}

async function follow(postId){
let followBtn =document.getElementById("follow__btn"+postId);

let followForm =document.getElementById("follow__form" + postId);
let form = new FormData(followForm)

let x = await fetch("/shabake/controller/follow.php" , {
method:"post",
body:form
});
let y =await x.text();

console.log(y);
if (y === 0){
followBtn.innerHTML = "follow"
followBtn.classList.add("btn-outline-danger");
}else {
  followBtn.innerHTML = "followed"
followBtn.classList.add("btn-danger");
}
}






</script>
</body>

</html>


