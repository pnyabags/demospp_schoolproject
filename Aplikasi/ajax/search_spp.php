<?php
include('../koneksi.php');
$search = $_GET['cari'];
$query = mysqli_query($koneksi, "SELECT * FROM spp WHERE id_spp LIKE '%$search%' OR tahun_ajaran LIKE '%$search%' OR nominal LIKE '%$search%' ORDER BY id_spp DESC");
?>
<section class="table-body">
    <table id="tablekelas">
        <thead>
            <tr>
                <th>ID Kelas</th>
                <th>Tahun Ajaran</th>
                <th>Nominal Bayar</th>
                <th class="print">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($search_row = mysqli_fetch_assoc($query)) {
            ?>
                <tr>
                    <td data-label="ID Kelas"><?php echo $search_row['id_spp']; ?></td>
                    <td data-label="ID Kelas"><?php echo $search_row['tahun_ajaran']; ?></td>
                    <td data-label="ID SPP"><?php echo $search_row['nominal']; ?></td>
                    <td data-label="Actions" class="print">
                        <a href="dashboard.php?update_spp=<?php echo $search_row['id_spp']; ?>"><img src="../images/pen-to-square-solid.svg" alt="Edit Button"></a>
                        <a href="dashboard.php?delete_spp=<?php echo $search_row['id_spp']; ?>"><img src="../images/trash-solid.svg" alt="Delete Button"></a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</section>