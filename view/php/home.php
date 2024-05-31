

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
<meta name="description" content="">
<meta name="keywords" content="">
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<meta name="author" content="moein fadakar">
<link rel="stylesheet" href="/shabake/view/bootstrap.rtl.css">
<link rel="stylesheet" href="/shabake/view/style.css">
<link rel="stylesheet" href="/shabake/view/all.css">
    <title>social media</title>

</head>
<body>
    <div class="back">

    <?php if(isset($_SESSION["message_strlen"])) : ?>

<div class="alert alert-warning alert-dismissible fade show" role="alert">
<strong><?php echo $_SESSION["message_strlen"] ; ?></strong> 
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<?php unset($_SESSION["message_strlen"]); ?>
<?php endif; ?>
    <?php if(isset($_SESSION["message__success"])) : ?>

<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong><?php echo $_SESSION["message__success"] ; ?></strong> 
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<?php unset($_SESSION["message__success"]); ?>
<?php endif; ?>

    <?php if(isset($_SESSION["password_not_match"])) : ?>

<div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong><?php echo $_SESSION["password_not_match"] ; ?></strong> 
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<?php unset($_SESSION["password_not_match"]); ?>
<?php endif; ?>

<?php if(isset($_SESSION["user__found"])) : ?>

  <div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong><?php echo $_SESSION["user__found"] ; ?></strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<?php unset($_SESSION["user__found"]); ?>
<?php endif; ?>
<header class="header">
<div class="logo__wrapper">
<img src="view/logo.png" width="100" height="100" alt="" class="image__logo">
</div>
<div class="link__wrapper">
<ul class="links">
    <li><a href="/shabake/home" class="link"><i class="fa-thin fa-arrow-right-to-bracket"></i>  Sign in</a></li>
    <li><a href="/shabake/post" class="link"><i class="fa-thin fa-envelope-dot"></i> News</a></li>
    <li><a href="" class="link"> <i class="fa-thin fa-circle-play"></i> Podcast</a></li>
    <li><a href="" class="link">  <i class="fa-thin fa-home"></i>  Home</a></li>
</ul>
</div>
<div class="start__now__wrapper">
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary bg-transparent rounded-pill p-3 fs-6" style="border: dotted 2px red;" data-bs-toggle="modal" data-bs-target="#exampleModal">
<i class="fa-thin fa-pen"></i>   Sign Up Now  
</button>
</div>
<div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog"style="margin: 0 auto !important;">
    <div class="modal-content" style="    background: url(/shabake/view/bbbb.png) !important;
    width: 35rem !important;">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">Sign Up In Meeting</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="/shabake/controller/signup__processs.php" method="post" enctype="multipart/form-data">
      <div class="container text-center">
  <div class="row">
    <div class="col">
   
      <input   required  class="  thecostume form-control form-control-sm w-100 bg-transparent fs-5 border-bottom border-white  border-1 border-warning" type="text" name="name" placeholder="FULLNAME *" aria-label=".form-control-sm example">
    </div>
    <div class="col">
  
      <input required  class="thecostume form-control form-control-sm w-100 bg-transparent fs-5 border-bottom border-white border-1 border-warning" type="text" name="username" placeholder="USERNAME *" aria-label=".form-control-sm example">
    </div>
      </div>
      <div class="row">
        <div class="col">
        <input required  class="thecostume form-control form-control-sm w-100 bg-transparent fs-5 border-bottom border-white border-1 border-warning" type="email" name="email" placeholder="EMAIL *" aria-label=".form-control-sm example">

        </div>
      </div>
  <div class="row">
    <div class="col">
      
      <input required  class="thecostume form-control form-control-sm w-100 bg-transparent fs-5 border-bottom border-white border-1 border-warning" type="password" name="password" placeholder="PASSWORD *" aria-label=".form-control-sm example">
    </div>
    <div class="col">
     
      <input required  class="thecostume form-control form-control-sm w-100 bg-transparent fs-5 border-bottom border-white border-1 border-warning" type="Password" name="password__repeat" placeholder="REPEAT PASSWORD *" aria-label=".form-control-sm example">
    </div>
      </div>
  <div class="row">
    <div class="col">

      <select   class="thecostume form-control form-control-sm w-100 bg-transparent fs-5 border-bottom border-white border-1 border-warning" border-1 border-warning type="text" name="gender" placeholder="NAME" aria-label=".form-control-sm example">
<option value="1">Male</option>
<option value="2">Female</option>
<option value="3">I Rather to dont say</option>
      </select>

    </div>
    <div class="col">
     
      <input   type="file" placeholder="" name="image" style="display: none;" id="for" aria-label=".form-control-sm example" >
    <label for="for"  class="thecostume form-control form-control-sm w-100 thecostume bg-transparent fs-5 border-bottom border-1 border-warning border-white text-white" >Profile Picture</label>
    </div>
      </div>
  <div class="row">
    <div class="col">
      
      <input  class=" thecostume form-control form-control-sm w-100 bg-transparent fs-5 border-bottom border-white border-1 border-warning" type="number"  name="number" placeholder="NUMBER" aria-label=".form-control-sm example">
    </div>
    <div class="col">

      <input   class="form-control  thecostume  form-control-sm w-100 bg-transparent fs-5 border-bottom border-white border-1 border-warning" type="number" name="age"  placeholder="AGE" aria-label=".form-control-sm example">
    </div>
      </div>
  <div class="row mb-4">
    <div class="col">
      
      <input   class="form-control form-control-sm thecostume  w-100 bg-transparent fs-5 border-bottom border-white border-1 border-warning" type="text" name="bio" placeholder="BIO" aria-label=".form-control-sm example">
    </div>
    <div class="col">
      
      <input   class=" thecostume form-control form-control-sm w-100 bg-transparent fs-5 border-bottom border-white  border-1 border-warning" type="date" name="birthday" placeholder="birthday" aria-label=".form-control-sm example">
    </div>
      </div>
      </div>
      <div  class="modal-footer    d-flex justify-content-between" >       
        <button type="submit" class="btn btn-success text-white rounded-pill px-3">Sign up</button>
        </form>
        <a type="link" href="controller/home" class="btn btn-transparent text-warning fs-4">I have account</a>
      </div>
      
    </div>
  </div>
</div>

</header>

<main class="main">

<h1 class="heading__title">MEETING</h1>
<h3 class="text__in__center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, dicta.
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Adipisci, ipsam!
</h3>
<button class="btn__PC"><i class="fa-thin fa-desktop"></i></button>
<button class="btn__Mobil"> <i class="fa-thin fa-mobile-notch"></i></button>
</main>
    </div>

<script src="/shabake/view/bootstrap.bundle.js"></script>
<script src="/shabake/view/all.js"></script>

</body>


</html>
