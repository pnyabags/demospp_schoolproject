<?php
include "../../koneksi.php";

$id_spp = htmlspecialchars($_POST['id_spp']);
$id_kelas = htmlspecialchars($_POST['id_kelas']);
$nama_siswa = htmlspecialchars($_POST['nama_siswa']);
$pass = htmlspecialchars($_POST['password']);
$kelamin = htmlspecialchars($_POST['jenis_kelamin']);
$telepon = htmlspecialchars($_POST['telepon']);
$alamat = htmlspecialchars($_POST['alamat']);
$jatuh_tempo = htmlspecialchars($_POST['jatuh_tempo']);

$query = "INSERT INTO siswa VALUES
(null, '$id_spp', '$id_kelas', '$nama_siswa', '$pass', '$kelamin', '$telepon', '$alamat', '$jatuh_tempo')";
$hasil1 = mysqli_query($koneksi, $query);

    if ($hasil1) {
        $query ="SELECT siswa.*, spp.* FROM siswa, spp WHERE siswa.id_spp = spp.id_spp ORDER BY siswa.nis DESC LIMIT 1";
        
        $hasil2 = mysqli_query($koneksi, $query);
        $row = mysqli_fetch_assoc($hasil2);
        $nominal = $row['nominal'];
        $nis = $row['nis'];
        $awaltempo 	= $row['jatuh_tempo'];
        $keterangan = 'BELUM LUNAS';

        for ($i=0 ; $i<36; $i++){
            // tanggal jatuh tempo setiap tanggal 10
            $jatuhtempo = date("Y-m-d" , strtotime("+$i month" , strtotime($awaltempo)));

            $bulan = date('F' ,strtotime($jatuhtempo))." ".date('Y', strtotime($jatuhtempo));

            // simpan data
            $add = mysqli_query($koneksi,"INSERT INTO pembayaran(nis, id_kelas, jatuh_tempo, bulan, nominal, keterangan) VALUES ('$nis', '$id_kelas', '$jatuhtempo','$bulan','$nominal','$keterangan')");
            
        }echo "
        <script>
        alert('Data Berhasil Masuk');
        document.location = '../../login/dashboard.php?page=siswa';
        </script>
        "; 
        } 
?>