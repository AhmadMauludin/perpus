<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<h3>Data Penulis</h3>

<form method="get">
    <input type="text" name="keyword" placeholder="Cari penulis..." value="<?= $_GET['keyword'] ?? '' ?>">
    <button type="submit">Cari</button>
    <a href="<?= base_url('penulis') ?>">Reset</a>
</form>

<br>

<a href="<?= base_url('penulis/create') ?>">Tambah Penulis</a>

<?php if (session()->getFlashdata('success')): ?>
    <div><?= session()->getFlashdata('success') ?></div>
<?php endif; ?>

<table border="1" cellpadding="5" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Nama Penulis</th>
        <th>Aksi</th>
    </tr>

    <?php if (!empty($penulis)): ?>
        <?php $no = 1 + (10 * ($pager->getCurrentPage() - 1)); ?>
        <?php foreach ($penulis as $p): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $p['nama_penulis'] ?></td>
                <td>
                    <a href="<?= base_url('penulis/edit/' . $p['id_penulis']) ?>">Edit</a>
                    <a href="<?= base_url('penulis/delete/' . $p['id_penulis']) ?>"
                        onclick="return confirm('Hapus data?')">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="3">Belum ada data</td>
        </tr>
    <?php endif; ?>

</table>

<br>

<?= $pager->links() ?>
<?= $this->endSection() ?>