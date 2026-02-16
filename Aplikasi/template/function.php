<?php

function stat_siswa(){
	include ("../koneksi.php");
	$select = mysqli_query($koneksi, "SELECT count(nis) AS jumlah_siswa FROM siswa");
	$row = mysqli_fetch_array($select);
	echo $row['jumlah_siswa'];
}
function stat_kelas(){
	include ("../koneksi.php");
	$select = mysqli_query($koneksi, "SELECT count(id_kelas) AS jumlah_kelas FROM kelas");
	$row = mysqli_fetch_array($select);
	echo $row['jumlah_kelas'];
}

function stat_petugas(){
	include ("../koneksi.php");
	$select = mysqli_query($koneksi, "SELECT count(id_petugas) AS jumlah_petugas FROM petugas");
	$row = mysqli_fetch_array($select);
	echo $row['jumlah_petugas'];
}

function stat_spp(){
	include ("../koneksi.php");
	$select = mysqli_query($koneksi, "SELECT count(id_spp) AS jumlah_spp FROM spp");
	$row = mysqli_fetch_array($select);
	echo $row['jumlah_spp'];
}

function stat_pembayaranlunas(){
	include ("../koneksi.php");
	$id_siswa = $_SESSION['username'];
	$select = mysqli_query($koneksi, "SELECT sum(nominal) AS Ttransaksi FROM pembayaran WHERE keterangan= 'LUNAS'");
	$row = mysqli_fetch_array($select);
	echo rupiah($row['Ttransaksi']);
}

function stat_pembayaranblunas(){
	include ("../koneksi.php");
	$id_siswa = $_SESSION['username'];
	$select = mysqli_query($koneksi, "SELECT sum(nominal) AS Ttransaksi FROM pembayaran WHERE keterangan= 'BELUM LUNAS'");
	$row = mysqli_fetch_array($select);
	echo rupiah($row['Ttransaksi']);
}

function stat_pembayaran_siswa_lunas(){
	include ("../koneksi.php");
	$id_siswa = $_SESSION['username'];
	$select = mysqli_query($koneksi, "SELECT sum(nominal) AS Ttransaksilunas FROM pembayaran WHERE nis='$id_siswa' AND keterangan= 'LUNAS'");
	$row = mysqli_fetch_array($select);
	echo rupiah($row['Ttransaksilunas']);
}

function stat_pembayaran_siswa_blunas(){
	include ("../koneksi.php");
	$id_siswa = $_SESSION['username'];
	$select = mysqli_query($koneksi, "SELECT sum(nominal) AS Ttransaksiblunas FROM pembayaran WHERE nis='$id_siswa' AND keterangan= 'BELUM LUNAS'");
	$row = mysqli_fetch_array($select);
	echo rupiah($row['Ttransaksiblunas']);
}


function stat_status(){
	include ("../koneksi.php");
	$select = mysqli_query($koneksi, "SELECT count(id_bayar) AS belum_lunas FROM pembayaran WHERE keterangan= 'BELUM LUNAS' ");
	$row = mysqli_fetch_array($select);
	echo $row['belum_lunas'];
}

function stat_status_lunas(){
	include ("../koneksi.php");
	$select = mysqli_query($koneksi, "SELECT count(id_bayar) AS lunas FROM pembayaran WHERE keterangan= 'LUNAS'");
	$row = mysqli_fetch_array($select);
	echo $row['lunas'];
}

function stat_status_siswa_belumlunas(){
	include ("../koneksi.php");
	$id_siswa = $_SESSION['username'];
	$select = mysqli_query($koneksi, "SELECT count(id_bayar) AS belum_lunas FROM pembayaran WHERE keterangan= 'BELUM LUNAS' AND nis='$id_siswa'");
	$row = mysqli_fetch_array($select);
	echo $row['belum_lunas'];
}

function stat_status_siswa_lunas(){
	include ("../koneksi.php");
	$id_siswa = $_SESSION['username'];
	$select = mysqli_query($koneksi, "SELECT count(id_bayar) AS lunas FROM pembayaran WHERE keterangan= 'LUNAS' AND nis='$id_siswa'");
	$row = mysqli_fetch_array($select);
	echo $row['lunas'];
}

function stat_Ttransaksi(){
	include ("../koneksi.php");
	$bulan = date("F");
	$select = mysqli_query($koneksi, "SELECT sum(nominal) AS transaksiBulan FROM pembayaran WHERE bulan='$bulan'");
	$row = mysqli_fetch_array($select);
	echo rupiah($row['transaksiBulan']);
}

function rupiah($angka){
	$hasil = "Rp. ". number_format($angka, 2, ',', '.');
	return $hasil;
}

function angka($angka){
	$hasil = number_format($angka, 0, ',', '.');
	return $hasil;
}

function confirm(){
  return confirm("Yakin Mau Bayar?");
}
?>  