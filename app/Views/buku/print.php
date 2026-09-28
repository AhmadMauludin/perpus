<!DOCTYPE html>
<html>

<head>
    <title>Print Data Buku</title>
</head>

<body onload="window.print()">

    <h3>Data Buku</h3>

    <table border="1" width="100%">
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Kategori</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun</th>
            <th>Jumlah</th>
            <th>Cover</th>
        </tr>

        <?php $no = 1;
        if (!empty($buku) && is_array($buku)):
            foreach ($buku as $b): ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $b['judul'] ?></td>
                    <td><?= $b['nama_kategori'] ?></td>
                    <td><?= $b['nama_penulis'] ?></td>
                    <td><?= $b['nama_penerbit'] ?></td>
                    <td><?= $b['tahun_terbit'] ?></td>
                    <td><?= $b['jumlah'] ?></td>
                    <td>
                        <?php if (!empty($b['cover'])): ?>
                            <?= $b['cover'] ?>
                        <?php else: ?>
                            -
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach;
        else: ?>
            <tr>
                <td colspan="8">Data buku tidak tersedia.</td>
            </tr>
        <?php endif; ?>

    </table>

</body>

</html>
