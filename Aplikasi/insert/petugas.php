<main class="input">
    <section class="input-header">
        <h1>Insert Data Petugas</h1>
        <span></span>
    </section>
    <form class="form" action="dashboard.php?page=proses_insertpetugas" method="post">
        <section class="input-body">
            <label for="nama_petugas">Nama Petugas</label>
            <input type="text" name="nama_petugas" id="nama_petugas" required autofocus autocomplete="off">
        </section>
        <section class="input-body">
            <label for="jurusan">Telepon</label>
            <input type="number" name="telepon" id="telepon" maxlength="15" required autocomplete="off">
        </section>
        <section class="input-body">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" id="alamat" required autocomplete="off">
        </section>
        <section class="input-body">
            <label for="password">Password</label>
            <input type="text" name="password" id="password" required>
        </section>
        <section class="select-body">
            <section class="column">
                <label for="level_user">Level User</label>
                <select name="level_user" id="level_user">
                    <option value="admin">Admin</option>
                    <option value="karyawan">Karyawan</option>
                </select>
            </section>
        </section>
        <button type="submit" name="submit">SIMPAN DATA</button>
    </form>
    <form class="form" action="javascript:history.back()">
        <button type="submit" name="submit">KEMBALI</button>
    </form>
</main>