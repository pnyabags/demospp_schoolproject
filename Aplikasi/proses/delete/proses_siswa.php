<?php
include "../koneksi.php";

$id = $_GET['delete_siswa'];

$query = "DELETE FROM siswa WHERE nis = '$id'";
$hasil = mysqli_query($koneksi, $query);
$query = "DELETE FROM pembayaran WHERE nis = '$id'";
$hasil = mysqli_query($koneksi, $query);


if (!$hasil) {
    die("Data Gagal Dihapus". mysqli_error($koneksi));
} else {
    echo "
    <script>
    alert('Data Berhasil Dihapus');window.location='../login/dashboard.php?page=siswa';
    </script>
    ";
}
?>