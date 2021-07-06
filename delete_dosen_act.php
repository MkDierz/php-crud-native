<?php
include "config.php";
//Akhir Koneksi---------------------------------------------------------

$nip_dosen  = $_GET['nip_dosen'];
echo $nip_dosen;
$query = "DELETE FROM tbl_dosen WHERE nip_dosen='$nip_dosen'";
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
