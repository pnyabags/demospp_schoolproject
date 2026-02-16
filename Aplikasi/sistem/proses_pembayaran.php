<?php
session_start();

include ('../koneksi.php');

$nis = $_GET['nis'];
$id_pembayaran = $_GET['id_bayar'];
$tanggalbayar = date('Y-m-d');
$id_petugas = $_SESSION['id_petugas'];


$query = "SELECT * FROM pembayaran WHERE id_bayar = '$id_pembayaran'";
$hasil = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($hasil);

$query = "UPDATE pembayaran SET tanggal_bayar='$tanggalbayar', id_petugas='$id_petugas', keterangan = 'LUNAS' WHERE id_bayar='$id_pembayaran'";
$pembayaran = mysqli_query($koneksi, $query);


if ($pembayaran) {
    echo "
    <script>
    alert('Bulan $row[bulan] sudah terbayar');
    document.location = '../login/dashboard.php?page=pembayaran&cari_nis=$nis&cari=';
    </script>
    ";
} else {
    echo "
    <script>
    alert('Maaf, gagal');
    document.location = '../login/dashboard.php?page=pembayaran&cari_nis=$nis&cari=';
    </script>
    ";
}
?>