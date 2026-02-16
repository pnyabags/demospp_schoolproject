<?php
include "../../koneksi.php";

$id = htmlspecialchars($_POST['nis']);
$id_spp = htmlspecialchars($_POST['id_spp']);
$id_kelas = htmlspecialchars($_POST['id_kelas']);
$nama_siswa = htmlspecialchars($_POST['nama_siswa']);
$pass = htmlspecialchars($_POST['password']);
$kelamin = htmlspecialchars($_POST['jenis_kelamin']);
$telepon = htmlspecialchars($_POST['telepon']);
$alamat = htmlspecialchars($_POST['alamat']);
$jatuh_tempo = htmlspecialchars($_POST['jatuh_tempo']);

$query = "UPDATE siswa SET 
nis='$id', id_spp='$id_spp', id_kelas='$id_kelas', nama_siswa='$nama_siswa', password='$pass', jenis_kelamin='$kelamin', telepon='$telepon', alamat='$alamat', jatuh_tempo='$jatuh_tempo' WHERE nis='$id'";

$hasil = mysqli_query($koneksi, $query);

if (!$hasil) {
    die("Data Gagal" .mysqli_error($koneksi));
} else {
    echo "
    <script>
    alert('Data Berhasil Diubah');
    window.location='../../login/dashboard.php?page=siswa';
    </script>
    ";
}
?>