<?php
include "../koneksi.php";

$id = $_GET['delete_kelas'];

$query = "DELETE FROM kelas WHERE id_kelas = '$id'";
$hasil = mysqli_query($koneksi, $query);

if (!$hasil) {
    die("Data Gagal Dihapus". mysqli_error($koneksi));
} else {
    echo "
    <script>
    alert('Data Berhasil Dihapus');window.location='../login/dashboard.php?page=kelas';
    </script>
    ";
}
?>

