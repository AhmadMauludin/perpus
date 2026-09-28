<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<h3>Detail Rak</h3>

<?php $rak = $rak ?? []; ?>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <td><?= $rak['id_rak'] ?? '' ?></td>
    </tr>
    <tr>
        <th>Nama Rak</th>
        <td><?= $rak['nama_rak'] ?? '' ?></td>
    </tr>
    <tr>
        <th>Lokasi</th>
        <td><?= $rak['lokasi'] ?? '' ?></td>
    </tr>
</table>

<br>
<a href="<?= base_url('rak') ?>">Kembali</a>

<?= $this->endSection() ?>