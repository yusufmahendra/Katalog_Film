<?php
//koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "film");

function query ($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi,$query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows [] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $koneksi;
     $judul = htmlspecialchars($data ["judul"]);
     $pemain = htmlspecialchars($data ["pemain"]);
     $tahun  = htmlspecialchars($data ["tahun"]);
     $gambar = htmlspecialchars($data ["gambar"]);

            // query insert ke database
            $query = "INSERT INTO data_flm
            VALUES
            ('','$judul','$pemain','$tahun','$gambar')
            ";

            mysqli_query($koneksi,$query);
            return mysqli_affected_rows($koneksi);
}

function hapus($id){
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM data_flm WHERE id = $id");
    return mysqli_affected_rows($koneksi);
}
?>