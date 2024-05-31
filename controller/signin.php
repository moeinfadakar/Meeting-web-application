<?php



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="view/bootstrap.rtl.css" type="text/css">
<link rel="stylesheet" href="view/style.css">
</head>
<body>
    <div class="back">

        <?php  if (isset( $_SESSION["massage__User__not__found"])): ?>
            <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
<strong><?php echo $_SESSION["massage__User__not__found"]; ?></strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php unset( $_SESSION["massage__User__not__found"]); ?>
            <?php endif; ?>

        <?php  if (isset( $_SESSION["massage__password__not__found"])): ?>

            <div class="text-center alert alert-danger alert-dismissible fade show" role="alert">
<strong><?php echo $_SESSION["massage__password__not__found"]  ; ?></strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<?php unset( $_SESSION["massage__password__not__found"]); ?>
            <?php endif; ?>

<form action="controller/login_process.php" method="post">
<div class="form__input w-50 h-a  bg-transparent ">
    <div class="name__wrapper w-100">
        <label for="name" class="fs-4 mt-4 text-white" >Username</label>
        <input name="username" id="name" type="text" class="nameInput p-2 border rounded-pill" style="border: 2px dotted white !important;">
    </div>
    <div class="password__wrapper mb-5">
        <label for="pass" class="fs-4 mt-5 text-white ">Password</label>
        <input name="Password" id="pass" type="password" class="passwordInput p-2 border rounded-pill" style="border: 2px dotted white !important;">
    </div>
    <div class="enter__wrapper">
        <button class="g__btn text-warning border-warning">Google</button>
        <button class="F__btn ">Facebook</button>
    </div>
    <div class="submit__wrapper text-center pt-3">
        <button type="submit" class="s__btn border bg-danger bored  p-3 w-100 mt-3 text-white fs-3  rounded-pill">Submit</button>
            <a href="../view/home.php" class="link link-light mt-3">Sign in Here</a>
    </div>

</div>
</form>



    </div>
<script src="view/bootstrap.bundle.js"></script>
</body>
</html>