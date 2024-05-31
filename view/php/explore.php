

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="/shabake/view/bootstrap.rtl.css">
<link rel="stylesheet" href="/shabake/view/style.css">

    <title>explore</title>
</head>
<body class="bg-warning">
    <div class="container-fluid">

    </div>



 
<div align="center"  class="flex-wrap  text-decoration-none d-flex justify-content-evenly">

 <?php foreach($alls as $all): ?>
        <a href="../controller/profilecontrol.php?id=<?php echo $all["userid"]; ?>" class="text-decoration-none">   
        <div align="center"  class="card" style="width: 15rem;">
  <img src="<?php echo $all["media"]; ?>" height="210" class="card-img-top" alt="...">
  <div class="card-body">
    <h5><?php echo $all["caption"]; ?></h5>
    <p class="card-text"><?php echo $all["Hashtags"]; ?>.</p>
  </div>
</div></a>
<br><br>
<?php endforeach; ?>
</div>
<script src="/shabake/view/bootstrap.bundle.js"></script>
</body>
