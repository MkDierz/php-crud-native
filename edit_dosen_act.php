<?php
include "config.php";

if (isset($_POST['update'])) {
    $nip_dosen  = $_POST['nip_dosen'];
    $nama_dosen  = $_POST['nama_dosen'];
    $no_hp_dosen  = $_POST['no_hp_dosen'];
    $kode_mk  = $_POST['kode_mk'];


    if (isset($mysqli)) {
        $data = mysqli_query($mysqli, "UPDATE tbl_dosen SET nama_dosen='$nama_dosen', no_hp_dosen='$no_hp_dosen', kode_mk=$kode_mk WHERE nip_dosen='$nip_dosen'") or die ("data salah : " . mysqli_error($mysqli));
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