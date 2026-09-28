<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div>

    <h3>Data Users</h3>

    <!-- FORM PENCARIAN & FILTER -->
    <form method="get" action="">
        <input type="text" name="keyword" placeholder="Cari nama..." value="<?= $_GET['keyword'] ?? '' ?>">

        <select name="role">
            <option value="">-- Semua Role --</option>
            <option value="admin" <?= (($_GET['role'] ?? '') == 'admin') ? 'selected' : '' ?>>Admin</option>
            <option value="petugas" <?= (($_GET['role'] ?? '') == 'petugas') ? 'selected' : '' ?>>Petugas</option>
            <option value="anggota" <?= (($_GET['role'] ?? '') == 'anggota') ? 'selected' : '' ?>>Anggota</option>
        </select>

        <button type="submit">Cari</button>
        <a href="<?= base_url('users') ?>">Reset</a>
                <a href="<?= base_url('users/print?' . http_build_query($_GET)) ?>" target="_blank">
            Print </a>
                </form>

    <br>

    <?php if (session()->getFlashdata('success')): ?>
        <div><?= session()->getFlashdata('success') ?></div>
    <?php endif; ?>

    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Username</th>
                <th>Role</th>
                <th>Foto</th>
                <?php if (session()->get('role') == 'admin') : ?>
                    <th>Aksi</th>
                <?php endif; ?>
            </tr>
        </thead>

        <tbody>
            <?php if (!empty($users)): ?>
                <?php $no = 1 + (10 * ($pager->getCurrentPage() - 1)); ?>
                <?php foreach ($users as $u): ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $u['nama'] ?></td>
                        <td><?= $u['email'] ?></td>
                        <td><?= $u['username'] ?></td>
                        <td><?= ucfirst($u['role']) ?></td>
                        <td>
                            <?php if ($u['foto']): ?>
                                <img src="<?= base_url('uploads/users/' . $u['foto']) ?>" width="60">
                            <?php else: ?>
                                -
                            <?php endif; ?>
                        </td>

                        <?php if (session()->get('role') == 'admin') : ?>
                            <td>
                                <a href="<?= base_url('users/detail/' . $u['id']) ?>">Detail</a>
                                <a href="<?= base_url('users/edit/' . $u['id']) ?>">Edit</a>
                                <a href="<?= base_url('users/wa/' . $u['id']) ?>" target="_blank">Kirim WA</a>
                                <a href="<?= base_url('users/delete/' . $u['id']) ?>"
                                    onclick="return confirm('Hapus user ini?')">Hapus</a>
                            </td>
                        <?php endif; ?>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="7">Belum ada data user</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

    <br>

    <!-- PAGINATION -->
    <div>
        <?= $pager->links() ?>
    </div>

</div>

<?= $this->endSection() ?>