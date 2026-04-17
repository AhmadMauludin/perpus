<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<h3>Data Buku</h3>

<form method="get">
    <input type="text" name="keyword" placeholder="Cari judul">
    <button type="submit">Cari</button>
</form>

<a href="<?= base_url('buku/create') ?>">Tambah</a>
<a href="<?= base_url('buku/print') ?>" target="_blank">Print</a>

<table border="1">
    <tr>
        <th>ID</th>
        <th>ISBN</th>
        <th>Judul</th>
        <th>Kategori</th>
        <th>Penulis</th>
        <th>Penerbit</th>
        <th>Rak</th>
        <th>Tahun</th>
        <th>Jumlah</th>
        <th>Tersedia</th>
        <th>Cover</th>
        <th>Aksi</th>
    </tr>

    <?php foreach ($buku as $b): ?>
        <tr>
            <td><?= $b['id_buku'] ?></td>
            <td><?= $b['isbn'] ?></td>
            <td><?= $b['judul'] ?></td>
            <td><?= $b['nama_kategori'] ?></td>
            <td><?= $b['nama_penulis'] ?></td>
            <td><?= $b['nama_penerbit'] ?></td>
            <td><?= $b['nama_rak'] ?></td>
            <td><?= $b['tahun_terbit'] ?></td>
            <td><?= $b['jumlah'] ?></td>
            <td><?= $b['tersedia'] ?></td>
            <td>
                <?php if ($b['cover']): ?>

                    <?php $ext = pathinfo($b['cover'], PATHINFO_EXTENSION); ?>

                    <?php if (in_array($ext, ['jpg', 'jpeg', 'png', 'gif'])): ?>
                        <img src="<?= base_url('uploads/buku/' . $b['cover']) ?>" width="60">
                    <?php else: ?>
                        <a href="<?= base_url('uploads/buku/' . $b['cover']) ?>" target="_blank">File</a>
                    <?php endif; ?>

                <?php else: ?>
                    -
                <?php endif; ?>
            </td>
            <td>
                <a href="<?= base_url('buku/detail/' . $b['id_buku']) ?>">Detail</a>
                <a href="<?= base_url('buku/edit/' . $b['id_buku']) ?>">Edit</a>
                <a href="<?= base_url('buku/delete/' . $b['id_buku']) ?>">Hapus</a>
                <a href="<?= base_url('buku/wa/' . $b['id_buku']) ?>" target="_blank">WA</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<?= $this->endSection() ?>