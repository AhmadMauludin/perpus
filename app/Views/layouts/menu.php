    <a href="#">
        <b>Maldin17</b>App
    </a><br>

    <a href="<?= base_url('/') ?>">
        Dashboard
    </a><br>

    <!-- Tambahkan link ke halaman profile -->
    <a href="<?= base_url('profile') ?>">
        Profile
    </a><br>
    <a href="<?= base_url('/rak') ?>"> Rak </a><br>
    <a href="<?= base_url('/buku') ?>"> Buku </a><br>

    <?php if (session()->get('role') == 'admin' || session()->get('role') == 'petugas') : ?>
    <a href="<?= base_url('/users') ?>">Users</a><br>
    <?php endif; ?>

    <?php $idu = session('id'); ?>
    <a href="<?= base_url('users/edit/' . $idu) ?>">Setting </a><br>

    <a href="<?= base_url('/logout') ?>">Log Out</a>

    <hr>

    Masuk sebagai: <b><?= session('nama'); ?> (<?= session('role'); ?>)</b>
    <br>
    <img src="<?= base_url('uploads/users/' . session()->get('foto')) ?>" height="80" />