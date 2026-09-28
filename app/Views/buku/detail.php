<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<h3>Detail Buku</h3>

<table border="1">
    <tr>
        <td>ID</td>
        <td><?= esc($buku['id_buku'] ?? '') ?></td>
    </tr>
    <tr>
        <td>Judul</td>
        <td><?= esc($buku['judul'] ?? '') ?></td>
    </tr>
    <tr>
        <td>ISBN</td>
        <td><?= esc($buku['isbn'] ?? '') ?></td>
    </tr>
    <tr>
        <td>Kategori</td>
        <td><?= esc($buku['nama_kategori'] ?? '') ?></td>
    </tr>
    <tr>
        <td>Penulis</td>
        <td><?= esc($buku['nama_penulis'] ?? '') ?></td>
    </tr>
    <tr>
        <td>Penerbit</td>
        <td><?= esc($buku['nama_penerbit'] ?? '') ?></td>
    </tr>
    <tr>
        <td>Rak</td>
        <td><?= esc($buku['nama_rak'] ?? '') ?> - <?= esc($buku['lokasi'] ?? '') ?></td>
    </tr>
    <tr>
        <td>Tahun</td>
        <td><?= esc($buku['tahun_terbit'] ?? '') ?></td>
    </tr>
    <tr>
        <td>Jumlah</td>
        <td><?= esc($buku['jumlah'] ?? '') ?></td>
    </tr>
    <tr>
        <td>Tersedia</td>
        <td><?= esc($buku['tersedia'] ?? '') ?></td>
    </tr>
    <tr>
        <td>Deskripsi</td>
        <td><?= esc($buku['deskripsi'] ?? '') ?></td>
    </tr>
    <tr>
        <td>Cover</td>
        <td>
            <?php if (!empty($buku['cover'])): ?>

                <?php $ext = pathinfo($buku['cover'], PATHINFO_EXTENSION); ?>

                <?php if (in_array(strtolower($ext), ['jpg', 'jpeg', 'png', 'gif'])): ?>
                    <img src="<?= base_url('uploads/buku/' . $buku['cover']) ?>" width="150">
                <?php else: ?>
                    <a href="<?= base_url('uploads/buku/' . $buku['cover']) ?>" target="_blank">Lihat File</a>
                <?php endif; ?>

            <?php else: ?>
                -
            <?php endif; ?>
        </td>
    </tr>
</table>

<br>

<a href="<?= base_url('buku') ?>">Kembali</a>
<a href="<?= base_url('buku/wa/' . ($buku['id_buku'] ?? '')) ?>" target="_blank">Kirim WA</a>
<?= $this->endSection() ?>
