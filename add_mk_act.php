<?php
 include "config.php";
//Akhir Koneksi---------------------------------------------------------
 
if(isset($_POST['simpan'])){
    $kode_mk  = $_POST['kode_mk'];
    $nama_mk  = $_POST['nama_mk'];
    $nama_table = 'tbl_matakuliah';

    $query = "INSERT INTO $nama_table VALUES ('$kode_mk', '$nama_mk')";
    echo $query;
    echo "<br>";
    
    $data = mysqli_query($mysqli, $query) or die ("data salah : ".mysqli_error($mysqli));
 
    if ($data) {
        echo "Berhasil Input Data";
        echo "<a href='index.php'>lihat</a>";
    } else {
        echo "Gagal Input Data!!!";
        echo "<a href='add_dosen.php'>Kembali</a>";
    }
}
