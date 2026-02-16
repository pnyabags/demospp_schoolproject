<?php
session_start();
include ('../koneksi.php');

$user          = $_POST['username'];
$password_user = $_POST['password'];

$queryadmin = "SELECT * FROM petugas WHERE nama_petugas='$user' AND level_user='admin'";
$hasil_admin = mysqli_query($koneksi, $queryadmin);

$querypetugas = "SELECT * FROM petugas WHERE nama_petugas='$user' AND level_user='petugas'";
$hasil_petugas = mysqli_query($koneksi, $querypetugas);

$querysiswa = "SELECT * FROM siswa WHERE nis='$user'";
$hasil_siswa = mysqli_query($koneksi, $querysiswa);

if(mysqli_num_rows($hasil_admin) > 0){
    $data = mysqli_fetch_assoc($hasil_admin);
    if ($password_user == $data['password']) { 
        $_SESSION['id_petugas']  = $data['id_petugas']; 
        $_SESSION['username']  = $data['nama_petugas'];
        $_SESSION['level_user'] = $data['level_user'];
        echo "<script>
        alert('Berhasil Login');
        window.location='dashboard.php?page=dashboard';
        </script>";
    } else {
        echo "<script>
        alert('Gagal Login');
        window.location='../index.php';
        </script>";
    }
    
} elseif (mysqli_num_rows($hasil_petugas) > 0) {
    $data = mysqli_fetch_assoc($hasil_petugas);
    if ($password_user == $data['password']) {
        $_SESSION['id_petugas']  = $data['id_petugas'];
        $_SESSION['username']  = $data['nama_petugas'];
        $_SESSION['level_user'] = $data['level_user'];
        echo "<script>
        alert('Berhasil Login');
        window.location='dashboard.php?page=dashboard';
        </script>";
    } else {
        echo "<script>
        alert('Gagal Login');
        window.location='../index.php';
        </script>";
    }
} elseif (mysqli_num_rows($hasil_siswa) > 0) {
    $data = mysqli_fetch_assoc($hasil_siswa);
    if ($password_user == $data['password']) {
        $_SESSION['username']  = $data['nis'];
        $_SESSION['nama_siswa']  = $data['nama_siswa'];
        $_SESSION['level_user'] = 'siswa';
        echo "<script>
        alert('Berhasil Login');
        window.location='dashboard.php?page=dashboard';
        </script>";
    } else {
        echo "<script>
        alert('Gagal Login');
        window.location='../index.php';
        </script>";
    }
} else {
    echo "<script>
        alert('Anda tidak memiliki akun?');
        window.location='../index.php';
        </script>";
}
?>