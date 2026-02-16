<?php
include "../../koneksi.php";

$id = htmlspecialchars($_POST['id_spp']);
$tahun = htmlspecialchars($_POST['tahun_ajaran']);
$nominal = htmlspecialchars($_POST['nominal']);

$query = "UPDATE spp SET 
id_spp='$id', tahun_ajaran='$tahun', nominal='$nominal' WHERE id_spp='$id'";

$hasil = mysqli_query($koneksi, $query);

if (!$hasil) {
    die("Data Gagal" .mysqli_error($koneksi));
} else {
    echo "
    <script>
    alert('Data Berhasil Diubah');window.location='../../login/dashboard.php?page=spp';
    </script>
    ";
}
?>