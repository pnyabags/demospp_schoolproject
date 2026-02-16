<main class="input">
    <section class="input-header">
        <h1>Insert Data Kelas</h1>
        <span></span>
    </section>
    <form class="form" action="dashboard.php?page=proses_insertkelas" method="post">
        <section class="input-body">
            <label for="kelas">Kelas</label>
            <input type="text" name="kelas" id="kelas" autofocus autocomplete="off">
        </section>
        <section class="input-body">
            <label for="jurusan">Jurusan</label>
            <input type="text" name="jurusan" id="jurusan">
        </section>
        <button type="submit" name="submit">SIMPAN DATA</button>
    </form>
    <form class="form" action="javascript:history.back()">
        <button type="submit" name="submit">KEMBALI</button>
    </form>
</main>