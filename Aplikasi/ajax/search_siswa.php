<?php
    include ('../koneksi.php');
    $search = $_GET['cari'];
    $querysiswa = mysqli_query($koneksi, "SELECT * FROM siswa JOIN kelas USING (id_kelas) JOIN spp USING (id_spp) WHERE nis LIKE '%$search%' OR tahun_ajaran LIKE '%$search%' OR telepon LIKE '%$search%' OR kelas LIKE '%$search%' OR nama_siswa LIKE '%$search%' OR jenis_Kelamin LIKE '%$search%' OR alamat LIKE '%$search%' ORDER BY nis DESC"); 
?>
<section class="table-body" id="table-siswa"> 
            <table>
                <thead>
                    <tr>
                        <th>NIS</th>
                        <th>Tahun Ajaran</th>
                        <th>Kelas</th>
                        <th>Nama Siswa</th>
                        <th>Jenis Kelamin</th>
                        <th>Nomor Telepon</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  
                        while($search_row = mysqli_fetch_assoc($querysiswa)){
                        ?>   
                    <tr>
                        <td data-label="ID Kelas"><?php echo $search_row['nis'];?></td>
                        <td data-label="ID SPP"><?php echo $search_row['tahun_ajaran'];?></td>
                        <td data-label="ID Kelas"><?php echo $search_row['kelas'];?></td>
                        <td data-label="Nama Siswa"><?php echo $search_row['nama_siswa'];?></td>
                        <td data-label="jenis_kelamin"><?php echo $search_row['jenis_kelamin'];?></td>
                        <td data-label="jenis_kelamin"><?php echo $search_row['telepon'];?></td>
                        <td data-label="alamat"><?php echo $search_row['alamat'];?></td>
                        <td data-label="Actions" class="print">
                            <a href="dashboard.php?update_siswa=<?php echo $search_row['nis']; ?>"><img src="../images/pen-to-square-solid.svg" alt="Edit Button"></a>
                            <a href="dashboard.php?delete_siswa=<?php echo $search_row['nis']; ?>"><img src="../images/trash-solid.svg" alt="Delete Button"></a>
                        </td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </section>