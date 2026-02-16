<?php
include "../../koneksi.php";

$tahun = htmlspecialchars($_POST['tahun_ajaran']);
$nominal = htmlspecialchars($_POST['nominal']);

$query = "INSERT INTO spp VALUES(null, '$tahun', '$nominal')";
$hasil = mysqli_query($koneksi, $query);
if (!$hasil) {
    die("Data Gagal" .mysqli_error($koneksi));
} else {
    echo "
    <script>
    alert('Data Berhasil Masuk');window.location='../login/dashboard.php?page=spp';
    </script>
    ";
}
?>