<?php
include "../koneksi.php";

$id = $_GET['delete_bayar'];

$query = "DELETE FROM pembayaran WHERE nis = '$id'";
$hasil = mysqli_query($koneksi, $query);


if (!$hasil) {
    die("Data Gagal Dihapus". mysqli_error($koneksi));
} else {
    echo "
    <script>
    window.location='../login/dashboard.php?delete_siswa=$id';
    </script>
    ";
}
?>

