<?php   
if (@$_SESSION['level_user'] == 'admin') {
?>
<main class="content">
    <section class="header">
        <h1>Selamat Datang Admin <?= $_SESSION['username']; ?></h1>
    </section>
    <section class="card">
        <section class="body-siswa">
                <h2 class="number"><?=stat_siswa()?></h2>
                <span class="desc">JUMLAH SISWA</span>
                <!--<img src="../../images/dollar-sign-solid.svg" alt="Logo">-->
                <div class="icon">
                    <i class="fa fa-users"></i>
                </div>
        </section>
    </section>
    <section class="card">
        <section class="body-petugas">
            <h2 class="number"><?=stat_petugas()?></h2>
            <span class="desc">JUMLAH PETUGAS</span>
            <div class="icon">
                <i class="fa fa-users"></i>
            </div>
        </section>
    </section>
    <section class="card">
        <section class="body-transaksi">
            <h2 class="number"><?=stat_kelas()?></h2>
            <span class="desc">JUMLAH KELAS</span>
            <div class="icon">
                <i class="fa fa-users"></i>
            </div>
        </section>
    </section>
    <section class="card">
        <section class="body-status">
            <h2 class="number"><?=stat_status()?></h2>
            <span class="desc">BELUM LUNAS</span>
            <div class="icon">
                <i class="fa fa-users"></i>
            </div>
        </section>
    </section>
    <section class="card">
        <section class="body-status-lunas">
            <h2 class="number"><?=stat_status_lunas()?></h2>
            <span class="desc">LUNAS</span>
            <div class="icon">
                <i class="fa fa-users"></i>
            </div>
        </section>
    </section>
    <section class="card">
        <section class="body-status">
            <h2 class="number"><?=stat_pembayaranblunas()?></h2>
            <span class="desc">TOTAL PEMBAYARAN BELUM LUNAS</span>
            <div class="icon">
                <i class="fa fa-users"></i>
            </div>
        </section>
    </section>
    <section class="card">
        <section class="body-pembayaran">
            <h2 class="number"><?=stat_pembayaranlunas()?></h2>
            <span class="desc">TOTAL PEMBAYARAN LUNAS</span>
            <div class="icon">
                <i class="fa fa-users"></i>
            </div>
        </section>
    </section>
</main>
<?php
}else if(@$_SESSION['level_user']=='petugas'){
    ?>
    <main class="content">
    <section class="header">
        <h1>Selamat Datang Petugas <?= $_SESSION['username'];?></h1>
    </section>
    <section class="card">
        <section class="body-petugas">
            <h2 class="number"><?=stat_petugas()?></h2>
            <span class="desc">JUMLAH PETUGAS</span>
            <div class="icon">
                <i class="fa fa-users"></i>
            </div>
        </section>
    </section>
    <section class="card">
        <section class="body-status">
            <h2 class="number"><?=stat_status()?></h2>
            <span class="desc">BELUM LUNAS</span>
            <div class="icon">
                <i class="fa fa-users"></i>
            </div>
        </section>
    </section>
    <section class="card">
        <section class="body-status-lunas">
            <h2 class="number"><?=stat_status_lunas()?></h2>
            <span class="desc">LUNAS</span>
            <div class="icon">
                <i class="fa fa-users"></i>
            </div>
        </section>
    </section>
    <section class="card">
        <section class="body-status">
            <h2 class="number"><?=stat_pembayaranblunas()?></h2>
            <span class="desc">TOTAL PEMBAYARAN BELUM LUNAS</span>
            <div class="icon">
                <i class="fa fa-users"></i>
            </div>
        </section>
    </section>
    <section class="card">
        <section class="body-pembayaran">
            <h2 class="number"><?=stat_pembayaranlunas()?></h2>
            <span class="desc">TOTAL PEMBAYARAN LUNAS</span>
            <div class="icon">
                <i class="fa fa-users"></i>
            </div>
        </section>
    </section>
    </main>
    <?php
}elseif (@$_SESSION['level_user']=='siswa'){
    ?>
    <main class="content">
    <section class="header">
        <h1>Selamat Datang Siswa <?= $_SESSION['nama_siswa'];?></h1>
    </section>
    <section class="card">
        <section class="body-status-lunas">
            <h2 class="number"><?=stat_status_siswa_lunas()?></h2>
            <span class="desc">LUNAS</span>
            <div class="icon">
                <i class="fa fa-users"></i>
            </div>
        </section>
    </section>
    <section class="card">
        <section class="body-status">
            <h2 class="number"><?=stat_status_siswa_belumlunas()?></h2>
            <span class="desc">BELUM LUNAS</span>
            <div class="icon">
                <i class="fa fa-users"></i>
            </div>
        </section>
    </section>
    <section class="card">
        <section class="body-pembayaran">
            <h2 class="number"><?=stat_pembayaran_siswa_lunas()?></h2>
            <span class="desc">TOTAL PEMBAYARAN</span>
            <div class="icon">
                <i class="fa fa-users"></i>
            </div>
        </section>
    </section>
    <section class="card">
        <section class="body-status">
            <h2 class="number"><?=stat_pembayaran_siswa_blunas()?></h2>
            <span class="desc">TOTAL PEMBAYARAN</span>
            <div class="icon">
                <i class="fa fa-users"></i>
            </div>
        </section>
    </section>
    </main>
    <?php
    }
    ?>