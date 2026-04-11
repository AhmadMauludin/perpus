<!DOCTYPE html>
<html>

<head>
    <title>Print Data Users</title>
</head>

<body onload="window.print()">

    <h3>Data Users</h3>

    <table border="1" cellpadding="5" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Username</th>
                <th>Role</th>
            </tr>
        </thead>

        <tbody>
            <?php if (!empty($users)): ?>
                <?php $no = 1;
                foreach ($users as $u): ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $u['nama'] ?></td>
                        <td><?= $u['email'] ?></td>
                        <td><?= $u['username'] ?></td>
                        <td><?= ucfirst($u['role']) ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5">Tidak ada data</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>

</body>

</html>