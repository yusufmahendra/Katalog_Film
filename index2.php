<?php 
//koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "film");

//ambil data dari tabel data_flm/ quary data filem
$result = mysqli_query($koneksi, "SELECT * FROM data_flm");

// ambil data (fetch) dari objek result
// mysqli_fetch_row(); // mengembalikan array numerik
// mysqli_fetch_assoc(); // mengembalkan array assosiatif
// mysqli_fetch_array(); // mengembalikan array numerik $array assosiatif
// mysqli_fetch_object(); // mengembalikan sebuah objek

/* while ( $flm = mysqli_fetch_assoc($result) ) {
    var_dump($flm);
}
*/
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
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
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
        <?php endwhile; ?>
    </table>

</body>
</html>