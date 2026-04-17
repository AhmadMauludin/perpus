<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<h3>Tambah Buku</h3>

<form method="post" action="<?= base_url('buku/store') ?>" enctype="multipart/form-data">

    Judul:<br>
    <input type="text" name="judul"><br><br>

    ISBN:<br>
    <input type="text" name="isbn"><br><br>

    Kategori:<br>
    <select name="id_kategori">
        <option value="">Pilih</option>
        <?php foreach ($kategori as $k): ?>
            <option value="<?= $k['id_kategori'] ?>"><?= $k['nama_kategori'] ?></option>
        <?php endforeach; ?>
    </select><br><br>

    Penulis:<br>
    <select name="id_penulis">
        <option value="">Pilih</option>
        <?php foreach ($penulis as $p): ?>
            <option value="<?= $p['id_penulis'] ?>"><?= $p['nama_penulis'] ?></option>
        <?php endforeach; ?>
    </select><br><br>

    Penerbit:<br>
    <select name="id_penerbit">
        <option value="">Pilih</option>
        <?php foreach ($penerbit as $p): ?>
            <option value="<?= $p['id_penerbit'] ?>"><?= $p['nama_penerbit'] ?></option>
        <?php endforeach; ?>
    </select><br><br>

    Rak:<br>
    <select name="id_rak">
        <option value="">Pilih</option>
        <?php foreach ($rak as $r): ?>
            <option value="<?= $r['id_rak'] ?>">
                <?= $r['nama_rak'] ?> - <?= $r['lokasi'] ?>
            </option>
        <?php endforeach; ?>
    </select><br><br>

    Tahun Terbit:<br>
    <input type="number" name="tahun_terbit"><br><br>

    Jumlah:<br>
    <input type="number" name="jumlah"><br><br>

    Tersedia:<br>
    <input type="number" name="tersedia"><br><br>

    Deskripsi:<br>
    <textarea name="deskripsi"></textarea><br><br>

    Cover / file :<br>
    <input type="file" name="cover"><br><br>

    <button type="submit">Simpan</button>
    <a href="<?= base_url('buku') ?>">Kembali</a>

</form>
<?= $this->endSection() ?>