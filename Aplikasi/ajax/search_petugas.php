<?php
include('../koneksi.php');
$search = $_GET['cari'];
$query = mysqli_query($koneksi, "SELECT * FROM petugas WHERE id_petugas LIKE '%$search%' OR nama_petugas LIKE '%$search%' OR telepon LIKE '%$search%' OR alamat LIKE '%$search%' OR level_user LIKE '%$search%' ORDER BY id_petugas DESC");
?>
<section class="table-body">
    <table id="tablepetugas">
        <thead>
            <tr>
                <th>ID Petugas</th>
                <th>Petugas</th>
                <th>Telepon</th>
                <th>Alamat</th>
                <th>Level User</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($search_row = mysqli_fetch_assoc($query)) {
            ?>
                <tr>
                    <td data-label="ID Kelas"><?php echo $search_row['id_petugas']; ?></td>
                    <td data-label="ID Kelas"><?php echo $search_row['nama_petugas']; ?></td>
                    <td data-label="ID SPP"><?php echo $search_row['telepon']; ?></td>
                    <td data-label="ID SPP"><?php echo $search_row['alamat']; ?></td>
                    <td data-label="ID SPP"><?php echo $search_row['level_user']; ?></td>
                    <td data-label="Actions" class="print">
                        <a href="dashboard.php?update_petugas=<?php echo $search_row['id_petugas']; ?>"><img src="../images/pen-to-square-solid.svg" alt="Edit Button"></a>
                        <a href="dashboard.php?delete_petugas=<?php echo $search_row['id_petugas']; ?>"><img src="../images/trash-solid.svg" alt="Delete Button"></a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</section>