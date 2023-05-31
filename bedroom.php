<?php
require 'functions.php';
$living = query("SELECT * FROM furniture WHERE kategori = 'Bedroom'");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bedroom</title>
    <link rel="stylesheet" href="styleLiving.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
    <header>
        <h1>equals.</h1>
        <ul>
            <li><a href="index1.php">HOME</a></li>
            <li><a href="#inspiration">INSPIRATION</a></li>
            <li><a href="#aboutus">ABOUT US</a></li>
            <li><a href="#contacts">CONTACTS</a></li>
        </ul>
        <div class="icon">
            <img src="asset/search.png">
            <a href="logout.php"><img src="asset/user.png"></a>
            <img src="asset/heart.png">
            <img src="asset/shopping-bag.png">
        </div>
    </header><br><br><br>
    <h1 style="text-align: center; font-weight: medium; margin-left: 30px;" >BEDROOM</h1><br>
    <div class="container" style="margin-left: 5%; margin-right: 5%;">
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <?php $i = 1; ?>
        <?php foreach ($living as $row) : ?>
        <div class="col">
          <div class="card h-100">
            <img src="image/<?php echo $row["gambar"];?>" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title"><?= $row["nama"]?></h5>
              <p class="card-text">Rp. <?= $row["harga"]?></p>
            </div>
          </div>
        </div>
        <?php $i++; ?>
        <?php endforeach; ?>
      </div>
    </div>
</body>
</html>