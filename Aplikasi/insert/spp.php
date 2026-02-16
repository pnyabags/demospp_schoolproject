<main class="input">
    <section class="input-header">
        <h1>Insert Data SPP</h1>
        <span></span>
    </section>
    <form class="form" action="dashboard.php?page=proses_insertspp" method="post">
        <section class="input-body">
            <label for="kelas">Tahun Ajaran</label>
            <input type="number" name="tahun_ajaran" id="tahun_ajaran" required autofocus autocomplete="off">
        </section>
        <section class="input-body">
            <label for="jurusan">Nominal Pembayaran</label>
            <input type="number" name="nominal" id="nominal" required>
        </section>
        <button type="submit" name="submit">SIMPAN DATA</button>
    </form>
    <form class="form" action="javascript:history.back()">
        <button type="submit" name="submit">KEMBALI</button>
    </form>
</main>