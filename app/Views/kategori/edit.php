<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<h3>Edit Kategori</h3>

<form method="post" action="<?= base_url('kategori/update/' . $kategori['id_kategori']) ?>">

    Nama Kategori:<br>
    <input type="text" name="nama_kategori" value="<?= $kategori['nama_kategori'] ?>"><br><br>

    <button type="submit">Update</button>
    <a href="<?= base_url('kategori') ?>">Kembali</a>

</form>
<?= $this->endSection() ?>