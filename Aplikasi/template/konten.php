<?php
switch (@$_GET['page']) {
    case 'siswa':
        include "../sistem/siswa.php";
        break;
        
    case 'petugas':
        include "../sistem/petugas.php";
        break;
    
    case 'kelas':
        include "../sistem/kelas.php";
        break;

    case 'spp':
        include "../sistem/spp.php";
        break;

    case 'dashboard':
        include "../sistem/main-content.php";
        break;

    case 'histori':
        include "../sistem/histori.php";
        break;

    case 'pembayaran':
        include "../sistem/pembayaran.php";
        break;

    case 'laporan':
        include "../sistem/laporan.php";
        break;

    case 'dashboard_petugas':
        include "../sistem/.php";
        break;

    case 'insertsiswa';
        include "../insert/siswa.php";
        break;

    case 'insertpetugas';
        include "../insert/petugas.php";
        break;
    
    case 'insertkelas';
        include "../insert/kelas.php";
        break;
        
    case 'insertspp';
        include "../insert/spp.php";
        break;
    
    case 'proses_insertsiswa';
        include "../proses/insert/proses_siswa.php";
        break;

    case 'proses_insertpetugas';
        include "../proses/insert/proses_petugas.php";
        break;

    case 'proses_insertkelas';
        include "../proses/insert/proses_kelas.php";
        break;
    
    case 'proses_insertspp';
        include "../proses/insert/proses_spp.php";
        break;
    
    case 'proses_insertpembayaran';
        include "../proses/insert/proses_pembayaran.php";
        break;
    
}
    if (@$_GET['update_siswa']) {
        include "../update/siswa.php";
    } else if (@$_GET['update_kelas']) {
        include "../update/kelas.php";
    } elseif (@$_GET['update_petugas']) {
        include "../update/petugas.php";
    } elseif (@$_GET['update_spp']) {
        include "../update/spp.php";
    }

   if (@$_GET['delete_siswa']) {
        include "../proses/delete/proses_siswa.php";
    } elseif (@$_GET['delete_petugas']) {
       include "../proses/delete/proses_petugas.php";
    } elseif (@$_GET['delete_kelas']) {
        include "../proses/delete/proses_kelas.php";
    } elseif (@$_GET['delete_spp']) {
        include "../proses/delete/proses_spp.php";
    } elseif (@$_GET['delete_register']) {
        include "../proses/delete/proses_login.php";
    } elseif (@$_GET['delete_bayar']) {
        include "../proses/delete/proses_pembayaran.php";
    }

?>