<?php
require 'functions.php';

$id = $_GET["id"];


$furniture = query("SELECT * FROM furniture WHERE id = $id")[0];

//cek apakah tombol submit sudah ditekan atau belum 
if (isset($_POST["submit"])) {

    // cek apakah data berhasil di diganti atau tidak
    if (edit($_POST) > 0) {
        echo "
            <script>
                alert('data berhasil diganti!');
                document.location.href = 'admin.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal diubah!');
                document.location.href = 'admin.php';
            </script>
        ";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Furniture</title>
    <link rel="stylesheet" type="text/css" href="styleAdd.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>
    <h1 style="margin: 30px">Edit data furniture</h1>
    <div class="container">
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $furniture["id"]; ?>">
        <ul>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama" required value="<?= $furniture["nama"]; ?>">
            </li>
            <li>
                <label for="harga">Harga :</label>
                <input type="text" name="harga" id="harga" required value="<?= $furniture["harga"]; ?>">
            </li>
            <li>
            <label for="kategori">Kategori :</label>
                <select class="form-select" name="kategori">
                <option selected aria-label="Disabled select example" disabled>Pilih Kategori</option>
                <?php 
                $sql=mysqli_query($conn, "SELECT * FROM kategori");
                while ($data=mysqli_fetch_array($sql)) {
                ?>
                <option value="<?=$data['kategori']?>"><?=$data['kategori']?></option> 
                <?php
                }
                ?>
                </select>
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                <input type="file" name="gambar" id="gambar" required value="<?= $furniture["gambar"]; ?>">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data!</button>
            </li>
        </ul>
    </form>
    </div>
</body>

</html>