<?php
include "../koneksi.php";

$id = $_GET['delete_petugas'];

$query = "DELETE FROM petugas WHERE id_petugas = '$id'";
$hasil = mysqli_query($koneksi, $query);

if (!$hasil) {
    die("Data Gagal Dihapus". mysqli_error($koneksi));
} else {
    echo "
    <script>
    alert('Data Berhasil Dihapus');
    window.location='../login/dashboard.php?page=petugas';
    </script>
    ";
}
?>

