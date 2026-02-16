<?php
include "../koneksi.php";

$nama_petugas = htmlspecialchars($_POST['nama_petugas']);
$telp = htmlspecialchars($_POST['telepon']);
$alamat = htmlspecialchars($_POST['alamat']);
$password = htmlspecialchars($_POST['password']);
$level_user = htmlspecialchars($_POST['level_user']);

$query = "SELECT * FROM petugas WHERE nama_petugas='$nama_petugas'";
$cek = mysqli_query($koneksi, $query);
$jml = mysqli_num_rows($cek);
if ($jml > 0) {
    echo "<script>
        alert('User sudah digunakan, coba yang lain..'); 
        document.location = '../login/dashboard.php?page=insertpetugas';
        </script>";
    die();
} else {
    $query = "INSERT INTO petugas VALUES(null, '$nama_petugas', '$telp', '$alamat', '$password', '$level_user')";
    $hasil = mysqli_query($koneksi, $query);
    if (!$hasil) {
        die("Data Gagal" . mysqli_error($koneksi));
    } else {
        echo "
    <script>
    alert('Data Berhasil Masuk');
    document.location = '../login/dashboard.php?page=petugas';
    </script>
    ";
    }
}