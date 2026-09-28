<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<h3>Tambah Rak</h3>

<form action="<?= base_url('rak/store') ?>" method="post">
    <label>Nama Rak</label><br>
    <input type="text" name="nama_rak"><br><br>

    <label>Lokasi</label><br>
    <input type="text" name="lokasi"><br><br>

    <button type="submit">Simpan</button>
</form>

<?= $this->endSection() ?>
