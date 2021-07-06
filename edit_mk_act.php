<?php
include "config.php";

if (isset($_POST['update'])) {
    $nama_mk = $_POST['nama_mk'];
    $kode_mk = $_POST['kode_mk'];


    if (isset($mysqli)) {
        $data = mysqli_query($mysqli, "UPDATE tbl_matakuliah SET nama_mk='$nama_mk' WHERE kode_mk='$kode_mk'") or die ("data salah : " . mysqli_error($mysqli));
        if ($data) {
            echo "Berhasil Update Data <br>";
            echo "<a href='index.php'>Kembali</a>";
        } else {
            echo "Gagal Input Data!!! <br>";
            echo "<a href='index.php'>Kembali</a>";
        }
    }

}
?>