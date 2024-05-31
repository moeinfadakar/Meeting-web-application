<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/shabake/view/bootstrap.rtl.css">



    <title>Document</title>
</head>
<body>
    <?php foreach($array AS $findPost): ?>
            <form method="post" enctype="multipart/form-data" action="/shabake/controller/editProcess.php">

    <div class="card">
    <div class="card-body">

<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">caption</label>
<input type="hidden" value="<?php echo $id ; ?>" name="id" > 
 <input type="text" name="caption" class="form-control" value="<?php echo $findPost["caption"] ;?>" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">hashtag</label>
  <input type="text" name="hashtags" value="<?php echo $findPost["Hashtags"] ; ?>" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>

<input type="file" name="file" id="" value="<?php echo $findPost["media"]; ?>">
<button type="submit" class="btn btn-danger">submit</button>
<?php endforeach; ?>

    </div>
</div>

            </form>



<?php



?>

<script src="/shabake/view/bootstrap.bundle.js"></script>
</body>
</html>





















