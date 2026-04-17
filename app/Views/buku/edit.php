<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<h3>Edit Buku</h3>

<form method="post" action="<?= base_url('buku/update/' . $buku['id_buku']) ?>">

    Judul:<br>
    <input type="text" name="judul" value="<?= $buku['judul'] ?>"><br><br>

    ISBN:<br>
    <input type="text" name="isbn" value="<?= $buku['isbn'] ?>"><br><br>

    Kategori:<br>
    <select name="id_kategori">
        <?php foreach ($kategori as $k): ?>
            <option value="<?= $k['id_kategori'] ?>"
                <?= $buku['id_kategori'] == $k['id_kategori'] ? 'selected' : '' ?>>
                <?= $k['nama_kategori'] ?>
            </option>
        <?php endforeach; ?>
    </select><br><br>

    Penulis:<br>
    <select name="id_penulis">
        <?php foreach ($penulis as $p): ?>
            <option value="<?= $p['id_penulis'] ?>"
                <?= $buku['id_penulis'] == $p['id_penulis'] ? 'selected' : '' ?>>
                <?= $p['nama_penulis'] ?>
            </option>
        <?php endforeach; ?>
    </select><br><br>

    Penerbit:<br>
    <select name="id_penerbit">
        <?php foreach ($penerbit as $p): ?>
            <option value="<?= $p['id_penerbit'] ?>"
                <?= $buku['id_penerbit'] == $p['id_penerbit'] ? 'selected' : '' ?>>
                <?= $p['nama_penerbit'] ?>
            </option>
        <?php endforeach; ?>
    </select><br><br>

    Rak:<br>
    <select name="id_rak">
        <?php foreach ($rak as $r): ?>
            <option value="<?= $r['id_rak'] ?>">
                <?= $r['nama_rak'] ?> - <?= $r['lokasi'] ?>
            </option>
        <?php endforeach; ?>
    </select><br><br>

    Tahun:<br>
    <input type="number" name="tahun_terbit" value="<?= $buku['tahun_terbit'] ?>"><br><br>

    Jumlah:<br>
    <input type="number" name="jumlah" value="<?= $buku['jumlah'] ?>"><br><br>

    Tersedia:<br>
    <input type="number" name="tersedia" value="<?= $buku['tersedia'] ?>"><br><br>

    Deskripsi:<br>
    <textarea name="deskripsi"><?= $buku['deskripsi'] ?></textarea><br><br>

    <button type="submit">Update</button>
    <a href="<?= base_url('buku') ?>">Kembali</a>

</form>
<?= $this->endSection() ?>