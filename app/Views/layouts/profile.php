<?= $this->extend('layouts/main') ?>
<?= $this->section('content') ?>
<div class="container mt-2">
    <h3>Profile</h3>
    <p>Ini adalah Halaman Profile
        <table class="table table-bordered">
            <tr>
                <th>Nama</th>
                <td>Ahmad Mauludin</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>ahmad.mauludin@example.com</td>
            </tr>
        </table>
    </p>
</div>
<?= $this->endSection() ?>