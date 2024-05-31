<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/shabake/view/bootstrap.rtl.css">
<link rel="stylesheet" href="/shabake/view/style.css">

    <title>Document</title>
</head>
<body>

<form enctype="multipart/form-data" method="post" action="../controller/addpostprocess.php" ><div class="row p-5">
<div class="card mb-5" id="newPostbox" style="position:fixed; top: 0px; left:0px; z-index:1">
  <h5 class="card-header ">Send A New Post</h5>
  <div class="card-body">
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
  <input type="hidden" class="form-control" name="userid" value="<?php echo $id; ?>"  >
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
 <button type="submit" class="btn btn-primary" >Send</button>
<button type="button" class="btn btn-danger"  >X</button>
</form>

 
  <script src="../view/bootstrap.bundle.js"></script>
</body>
</html>