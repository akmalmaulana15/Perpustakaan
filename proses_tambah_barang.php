<?php
if($_POST){
    $nama_kelas = $_POST["nama_barang"];
    $kelompok = $_POST["size"];
    
    

    include "koneksi.php";
    $input = mysqli_query($koneksi, "INSERT INTO barang (nama_barang, size) VALUES ('{$nama_barang}', '{$size}')"); 
    
    if ($input) {
        echo "<script>alert('Berhasil');location.href='tambah_barang.php';</script>";

    }
    else{
        echo "<script>alert('Gagal');location.href='tambah_barang.php';</script>";
    }
}
?>