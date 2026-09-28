<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<h3>Data Rak</h3>

<form method="get">
    <input type="text" name="keyword" placeholder="Cari nama rak">
    <button type="submit">Cari</button>
</form>

<a href="<?= base_url('rak/create') ?>">Tambah</a>
<a href="<?= base_url('rak/print') ?>" target="_blank">Print</a>

<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>Nama Rak</th>
        <th>Lokasi</th>
        <th>Aksi</th>
    </tr>

    <?php if (isset($rak) && is_array($rak)): ?>
        <?php foreach ($rak as $r): ?>
            <tr>
                <td><?= $r['id_rak'] ?></td>
                <td><?= $r['nama_rak'] ?></td>
                <td><?= $r['lokasi'] ?></td>
                <td>
                    <a href="<?= base_url('rak/edit/' . $r['id_rak']) ?>">Edit</a>
                    <a href="<?= base_url('rak/detail/' . $r['id_rak']) ?>">Detail</a>
                    <a href="<?= base_url('rak/delete/' . $r['id_rak']) ?>" onclick="return confirm('Yakin?')">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="4">Data tidak ditemukan</td>
        </tr>
    <?php endif; ?>
</table>

<?= $this->endSection() ?>