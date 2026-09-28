<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<?php $rak = $rak ?? []; ?>

<h3>Edit Rak</h3>

<form action="<?= base_url('rak/update/' . $rak['id_rak']) ?>" method="post">
    <label>Nama Rak</label><br>
    <input type="text" name="nama_rak" value="<?= $rak['nama_rak'] ?>"><br><br>

    <label>Lokasi</label><br>
    <input type="text" name="lokasi" value="<?= $rak['lokasi'] ?>"><br><br>

    <button type="submit">Update</button>
</form>

<?= $this->endSection() ?>