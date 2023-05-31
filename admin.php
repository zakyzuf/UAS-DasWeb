<?php
require 'functions.php';
$furniture = query("SELECT * FROM furniture");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" type="text/css" href="styleAdmin.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script>
        function pindah(url) {
        window.location = url;
        }
    </script>
</head>
<body>
    <h1 style="font-size: 30px; font-weight: bold; margin-top: 20px;">Halo min, selamat datang kembali!</h1><br>
    <button class="btn btn-secondary" style="height: 60px; margin-left:4%;"><div class="add" onclick="return pindah('add.php')" style="color: white;">Tambah Data Furniture?</div><br/></button><br><br>
    <div class="container" style="padding-top: 15px;">
    <table class="table table-dark table-striped" style="margin: 0;">

    <tr>
        <th></th><th>Nama</th> <th>Harga</th> <th>Gambar</th> <th>Kategori</th> <th>Fitur</th>
    </tr>
    <?php $i = 1; ?>
        <?php foreach ($furniture as $row) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $row["nama"] ?></td>
                <td><?= $row["harga"] ?></td>
                <td><img src="image/<?php echo $row["gambar"]; ?>" alt="" height="100" width="100" srcset=""></td>
                <td><?= $row['kategori']?></td>
                <td><a href="edit.php?id=<?php echo $row["id"];?>">Edit</a> 
                    <a href="hapus.php?id=<?= $row["id"]; ?>" onclick=" return confirm('Apakah data ingin dihapus?');">Hapus</a>
                </td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
    </div><br>
    <button type="button" class="btn btn-danger" style="margin-left: 4%;"><a href="logout.php" style="text-decoration:none; color: white;">Log out</a></button>
</body>
</html>