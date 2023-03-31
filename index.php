<?php 
require 'functions.php';
$film = query("SELECT * FROM data_flm")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Film</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Judul</th>
            <th>Pemain</th>
            <th>Tahun</th>
        </tr>


        <?php $i =1; ?>
        <?php foreach ($film as $row) : ?>
        <tr>
            <td><?= $i ?></td>
            <td>
                <a href="">ubah</a>
                <a href="">hapus</a>
            </td>
            <td>
                <img src="img/<?= $row['gambar']  ?>" width="50">
            </td>
            <td><?= $row['judul']  ?></td>
            <td><?= $row['pemain']  ?></td>
            <td><?= $row['tahun']  ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>

</body>
</html>