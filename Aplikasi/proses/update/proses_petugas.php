<?php
include "../../koneksi.php";

$id     = htmlspecialchars($_POST['id_petugas']);
$nama   = htmlspecialchars($_POST['nama_petugas']);
$telp   = htmlspecialchars($_POST['telepon']);
$alamat = htmlspecialchars($_POST['alamat']);
$password = htmlspecialchars($_POST['password']);
$level_user = htmlspecialchars($_POST['level_user']);

$query = "UPDATE petugas SET 
id_petugas='$id', nama_petugas='$nama', telepon='$telp', alamat='$alamat', password='$password', level_user='$level_user' WHERE id_petugas='$id'";
$hasil = mysqli_query($koneksi, $query);

if (!$hasil) {
    die("Data Gagal" .mysqli_error($koneksi));
} else if(!$hasil){
    die("Data Gagal" .mysqli_error($koneksi));
} else {
    echo "
    <script>
    alert('Data Berhasil Diubah');window.location='../../login/dashboard.php?page=petugas';
    </script>
    ";
}
