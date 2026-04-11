<!-- app/Views/users/create.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tambah User</title>

    <!-- MemanggilBootstrap 5.3 CSS dan Icon -->
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/bootstrap-icons-1.13.1/bootstrap-icons.css') ?>" rel="stylesheet">
</head>

<body>

    <div>
        <div>
            <div>
                <h4>Form Tambah User</h4>
            </div>
            <div>

                <?php if (session()->getFlashdata('error')): ?>
                    <div><?= session()->getFlashdata('error') ?></div>
                <?php endif; ?>

                <form action="<?= base_url('users/store') ?>" method="post" enctype="multipart/form-data">

                    <div>
                        <label>Nama Lengkap</label><br>
                        <input type="text" name="nama" required>
                    </div>

                    <div>
                        <label>Email</label><br>
                        <input type="text" name="email" required>
                    </div>

                    <div>
                        <label>Username</label><br>
                        <input type="text" name="username" required>
                    </div>

                    <div>
                        <label>Password</label><br>
                        <input type="password" name="password" required>
                    </div>

                    <div>
                        <label>Role</label><br>
                        <select name="role" required>
                            <option value="">-- Pilih Role --</option>
                            <option value="admin">Admin</option>
                            <option value="petugas">Petugas</option>
                            <option value="anggota">Anggota</option>
                        </select>
                    </div>

                    <div>
                        <label>Foto Profil</label><br>
                        <input type="file" name="foto" accept="image/*"><br>
                        <small>Kosongkan jika tidak upload foto</small>
                    </div>

                    <br>
                    <button type="submit">Simpan</button>
                    <a href="<?= base_url('login') ?>">Sudah Punya Akun</a>

                </form>

            </div>
        </div>
    </div>

</body>

<!-- Memanggil Bootstrap JS -->
<script src="<?= base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

</html>