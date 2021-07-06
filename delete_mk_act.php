<?php
include "config.php";
//Akhir Koneksi---------------------------------------------------------

$kode_mk  = $_GET['kode_mk'];
echo $nip_dosen;
$query = "DELETE FROM tbl_matakuliah WHERE kode_mk='$kode_mk'";
echo $query;
echo "<br>";

$data = mysqli_query($mysqli, $query) or die("data salah : " . mysqli_error($mysqli));

if ($data) {
    echo "Berhasil Input Data";
    echo "<a href='index.php'>lihat</a>";
} else {
    echo "Gagal Input Data!!!";
    echo "<a href='add_dosen.php'>Kembali</a>";
}
