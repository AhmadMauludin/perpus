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
        </tr>

        <?php $no = 1;
        foreach ($buku as $b): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $b['judul'] ?></td>
                <td><?= $b['nama_kategori'] ?></td>
                <td><?= $b['nama_penulis'] ?></td>
                <td><?= $b['nama_penerbit'] ?></td>
                <td><?= $b['tahun_terbit'] ?></td>
                <td><?= $b['jumlah'] ?></td>
            </tr>
        <?php endforeach; ?>

    </table>

</body>

</html>