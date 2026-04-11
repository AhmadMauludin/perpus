<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>

<div>

    <h3>Detail User</h3>

    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <td>Nama</td>
            <td><?= $user['nama'] ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?= $user['email'] ?></td>
        </tr>
        <tr>
            <td>Username</td>
            <td><?= $user['username'] ?></td>
        </tr>
        <tr>
            <td>password</td>
            <td>***</td>
        </tr>
        <tr>
            <td>Role</td>
            <td><?= ucfirst($user['role']) ?></td>
        </tr>
        <tr>
            <td>Foto</td>
            <td>
                <?php if ($user['foto']): ?>
                    <img src="<?= base_url('uploads/users/' . $user['foto']) ?>" width="100">
                <?php else: ?>
                    -
                <?php endif; ?>
            </td>
        </tr>
    </table>

    <br>

    <a href="<?= base_url('users') ?>">Kembali</a>

    <?php if (session()->get('role') == 'admin') : ?>
        <a href="<?= base_url('users/edit/' . $user['id']) ?>">Edit</a>
    <?php endif; ?>

</div>

<?= $this->endSection() ?>