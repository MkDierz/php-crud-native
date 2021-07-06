<?php
 include "config.php";
//Akhir Koneksi---------------------------------------------------------
 
if(isset($_POST['simpan'])){
    $nip_dosen  = $_POST['nip_dosen'];
    $nama_dosen  = $_POST['nama_dosen'];
    $no_hp_dosen  = $_POST['no_hp_dosen'];
    $kode_mk  = $_POST['kode_mk'];
        
    $query = "INSERT INTO tbl_dosen VALUES ('$nip_dosen', '$nama_dosen', '$no_hp_dosen', '$kode_mk')";
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
