<?php
include "../../koneksi.php";

$kelas = htmlspecialchars($_POST['kelas']);
$jurusan = htmlspecialchars($_POST['jurusan']);

$query = "INSERT INTO kelas VALUES(null, '$kelas', '$jurusan')";
$hasil = mysqli_query($koneksi, $query);
if (!$hasil) {
    die("Data Gagal" .mysqli_error($koneksi));
} else {
    echo "
    <script>
    alert('Data Berhasil Masuk');window.location='../login/dashboard.php?page=kelas';
    </script>
    ";
}
?>