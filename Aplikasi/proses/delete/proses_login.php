<?php
include "../koneksi.php";

$id = $_GET['delete_register'];

$query = "DELETE FROM login WHERE id_petugas = '$id'";
$hasil = mysqli_query($koneksi, $query);

if (!$hasil) {
    die("Data Gagal Dihapus". mysqli_error($koneksi));
} else {
    echo "
    <script>
    window.location='../login/dashboard.php?register_petugas=$id ';
    </script>
    ";
}
?>

