<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<h3>Data Kategori</h3>

<form method="get">
    <input type="text" name="keyword" placeholder="Cari kategori..." value="<?= $_GET['keyword'] ?? '' ?>">
    <button type="submit">Cari</button>
    <a href="<?= base_url('kategori') ?>">Reset</a>
</form>

<br>

<a href="<?= base_url('kategori/create') ?>">Tambah Kategori</a>

<?php if (session()->getFlashdata('success')): ?>
    <div><?= session()->getFlashdata('success') ?></div>
<?php endif; ?>

<table border="1" cellpadding="5" cellspacing="0">
    <tr>
        <th>No</th>
        <th>Nama Kategori</th>
        <th>Aksi</th>
    </tr>

    <?php if (!empty($kategori)): ?>
        <?php $no = 1 + (10 * ($pager->getCurrentPage() - 1)); ?>
        <?php foreach ($kategori as $k): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $k['nama_kategori'] ?></td>
                <td>
                    <a href="<?= base_url('kategori/edit/' . $k['id_kategori']) ?>">Edit</a>
                    <a href="<?= base_url('kategori/delete/' . $k['id_kategori']) ?>"
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