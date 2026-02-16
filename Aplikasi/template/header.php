<?php
session_start();

$aktif = @$_GET['page'];
include ("../koneksi.php");

if (!isset($_SESSION['username'])) {
    echo"
    <script>
        alert('Anda Belum Login');location.href='../index.php';
    </script>
    ";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../index.css">
    <link rel="icon" type="image/x-icon" href="../images/money-svgrepo.svg">
    <title>
        <?php
        if ($aktif=='siswa') {
            echo "Data Siswa";
        }elseif ($aktif=='petugas') {
            echo"Data Petugas";
        }elseif ($aktif=='kelas') {
            echo"Data Kelas";
        }elseif ($aktif=='spp') {
            echo"Data SPP";
        }elseif ($aktif=='laporan') {
            echo"Laporan Siswa";
        }elseif ($aktif=='pembayaran') {
            echo"Pembayaran";
        }elseif ($aktif=='histori') {
            echo"Histori Pembayaran";
        }else {
            echo "Dashboard";
        }
        ?>
    </title>
</head>
