<?php 
// koneksi
require "functions.php";

// cek apakah tombol submit sudah ditekan atau belum?
if (isset($_POST["submit"])) {
       // cek apakah data berhasil ditambahkan atau tidak?
       if (tambah($_POST) > 0){
        echo "
        <script>
        alert('Data Berhasil Disimpan');
        document.location.href = 'index.php';
        </script>
        ";
       } else {
        echo "<script>
        alert('Data Gagal Disimpan');
        document.location.href = 'index.php';
        </script>";
       }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah Filem Terbaru</title>
</head>
<body>
    <h1>Tambah Film Terbaru</h1>
    <form action="" method="POST">
        <ul>
            <li>
                <label for="judul">Judul :</label>
                <input type="text" name="judul" id="judul" required>
            </li>
            <li>
                <label for="pemain">Pemain :</label>
                <input type="text" name="pemain" id="pemain" required>
            </li>
            <li>
                <label for="tahun">Tahun :</label>
                <input type="text" name="tahun" id="tahun" required>
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                <input type="text" name="gambar" id="gambar" required>
            </li>
            <br>
            <br>
            <li>
                <button type="submit" name="submit">Simpan</button>
            </li>

        </ul>

    </form>
    
</body>
</html>