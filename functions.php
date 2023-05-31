<?php 
//koneksi ke Database
$conn = mysqli_connect("localhost", "root", "", "furniture");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    global $conn;
       $nama = htmlspecialchars($data["nama"]);
       $harga = htmlspecialchars($data["harga"]);
       $kategori = $data["kategori"];
       $gambar= upload();
       if(!$gambar)
       {
        return false;
       }
           // query insert data
    $query = "INSERT INTO furniture
    VALUES
    ('', '$nama', '$harga', '$kategori', '$gambar')
";
mysqli_query($conn, $query);

return mysqli_affected_rows($conn);
}

function upload(){
    $nama_file=$_FILES['gambar']['name'];
    $ukuran_file=$_FILES['gambar']['size'];
    $error=$_FILES['gambar']['error'];
    $tmpfile=$_FILES['gambar']['tmp_name'];

    if($error==4){
        echo "
            <script>
                alert('Tidak ada gambar yang diupload');
            <Script>
        ";
        return false;
    }

    $jenis_gambar=['jpg', 'jpeg', 'gif', 'png'];
    $pecah_gambar=explode('.', $nama_file);
    $pecah_gambar=strtolower(end($pecah_gambar));
    if(!in_array($pecah_gambar,$jenis_gambar))
    {
        echo "
            <script>
                alert('yang anda upload bukan file gambar');
            <script>
        ";
        return false;
    }
    $namafilebaru=uniqid();
    $namafilebaru .= '.';
    $namafilebaru .= $pecah_gambar;

    move_uploaded_file($tmpfile,'image/'.$namafilebaru);

    return $namafilebaru;
}

function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM furniture WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function edit($data){
    global $conn;
    $id = $data["id"];

    $nama = htmlspecialchars($data["nama"]);
    $harga = htmlspecialchars($data["harga"]);
    $kategori = $data["kategori"];
    $gambarlama = htmlspecialchars($data["gambarlama"]);
    if ($_FILES["gambar"]["error"]==4) {
        $gambar=$gambarlama;
    } else {
        $gambar=upload();
    }

        // query insert data
    $query = "UPDATE furniture SET
            nama = '$nama',
            harga = '$harga',
            kategori = '$kategori',
            gambar = '$gambar'       
            WHERE id = $id
        ";
mysqli_query($conn, $query);

return mysqli_affected_rows($conn);
}