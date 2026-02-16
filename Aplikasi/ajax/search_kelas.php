<?php
include('../koneksi.php');
$search = $_GET['cari'];
$query = mysqli_query($koneksi, "SELECT * FROM kelas WHERE id_kelas LIKE '%$search%' OR kelas LIKE '%$search%' OR jurusan LIKE '%$search%' ORDER BY id_kelas DESC");
?>
<section class="table-body" >
    <table id="tablekelas">
        <thead>
            <tr>
                <th>ID Kelas</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                <th class="print">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($search_row = mysqli_fetch_assoc($query)) {
            ?>
                <tr>
                    <td data-label="ID Kelas"><?php echo $search_row['id_kelas']; ?></td>
                    <td data-label="ID Kelas"><?php echo $search_row['kelas']; ?></td>
                    <td data-label="ID SPP"><?php echo $search_row['jurusan']; ?></td>
                    <td data-label="Actions" class="print">
                        <a href="dashboard.php?update_kelas=<?php echo $search_row['id_kelas']; ?>"><img src="../images/pen-to-square-solid.svg" alt="Edit Button"></a>
                        <a href="dashboard.php?delete_kelas=<?php echo $search_row['id_kelas']; ?>"><img src="../images/trash-solid.svg" alt="Delete Button"></a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</section>