<?php   
if (@$_SESSION['level_user'] == 'admin') {
?>
    <nav class="print">
        <ul>
            <li>
                <a href="dashboard.php?page=dashboard" class="logo">
                    <img src="../images/money-svgrepo.svg" alt="">
                    <span class="nav-logo">SPP</span>
                </a>
            </li>
            <li>
                <a href="dashboard.php?page=dashboard" class="sub-logo">
                    <img src="../images/house-solid.svg" alt="Dashboard">
                    <span class="nav-item">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="dashboard.php?page=siswa" class="sub-logo"> 
                    <img src="../images/user-solid.svg" alt="">
                    <span class="nav-item">Siswa</span>
                </a>
            </li>
            <li>
                <a href="dashboard.php?page=petugas" class="sub-logo">
                    <img src="../images/user-tie-solid.svg" alt="">
                    <span class="nav-item">Petugas</span>
                </a>
            </li>
            <li>
                <a href="dashboard.php?page=kelas" class="sub-logo">
                    <img src="../images/school-solid.svg" alt="">
                    <span class="nav-item">Kelas</span>
                </a>
            </li>
            <li>
                <a href="dashboard.php?page=spp" class="sub-logo">
                    <img src="../images/money-check-solid.svg" alt="">
                    <span class="nav-item">SPP</span>
                </a>
            </li>
            <li>
                <a href="dashboard.php?page=laporan" class="sub-logo">
                    <img src="../images/book-solid.svg" alt="">
                    <span class="nav-item">Laporan Pembayaran</span>
                </a>
            </li>
            <li>
                <a href="dashboard.php?page=pembayaran" class="sub-logo">
                    <img src="../images/money-check-solid.svg" alt="">
                    <span class="nav-item">Pembayaran</span>
                </a>
            </li>
            <li>
                <a href="dashboard.php?page=histori" class="sub-logo">
                    <img src="../images/clock-rotate-left-solid.svg" alt="">
                    <span class="nav-item">History Pembayaran</span>
                </a>
            </li>
            <li>
                <a href="../login/logout.php" class="logout">
                    <img src="../images/right-from-bracket-solid.svg" alt="">
                    <span class="nav-item">Logout</span>
                </a>
            </li>
        </ul>
    </nav>
<?php
    }else if(@$_SESSION['level_user']=='petugas'){
    ?>
    <nav class="print">
        <ul>
            <li>
                <a href="dashboard.php?page=dashboard" class="logo">
                    <img src="../images/money-svgrepo.svg" alt="">
                    <span class="nav-item">SPP</span>
                </a>
            </li>
            <li>
                <a href="dashboard.php?page=dashboard" class="sub-logo">
                    <img src="../images/house-solid.svg" alt="Dashboard">
                    <span class="nav-item">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="dashboard.php?page=pembayaran" class="sub-logo">
                    <img src="../images/money-check-solid.svg" alt="">
                    <span class="nav-item">Pembayaran</span>
                </a>
            </li>
            <li>
                <a href="dashboard.php?page=histori" class="sub-logo">
                    <img src="../images/clock-rotate-left-solid.svg" alt="">
                    <span class="nav-item">History Pembayaran</span>
                </a>
            </li>
            <li>
                <a href="../login/logout.php" class="logout">
                    <img src="../images/right-from-bracket-solid.svg" alt="">
                    <span class="nav-item">Logout</span>
                </a>
            </li>
        </ul>
    </nav>
<?php
    }elseif (@$_SESSION['level_user']=='siswa'){
    ?>
    <nav class="print">
        <ul>
            <li>
                <a href="dashboard.php?page=dashboard" class="logo">
                    <img src="../images/money-svgrepo.svg" alt="">
                    <span class="nav-item">SPP</span>
                </a>
            </li>
            <li>
                <a href="dashboard.php?page=dashboard" class="sub-logo">
                    <img src="../images/house-solid.svg" alt="Dashboard">
                    <span class="nav-item">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="dashboard.php?page=histori" class="sub-logo">
                    <img src="../images/clock-rotate-left-solid.svg" alt="">
                    <span class="nav-item">History Pembayaran</span>
                </a>
            </li>
            <li>
                <a href="../login/logout.php" class="logout">
                    <img src="../images/right-from-bracket-solid.svg" alt="">
                    <span class="nav-item">Logout</span>
                </a>
            </li>
        </ul>
    </nav>
    <?php
    }
    ?>