<html>

<head>
    <title>Print Data Rak</title>
</head>

<body onload="window.print()">

    <h3>Data Rak</h3>

    <table border="1" width="100%">
        <tr>
            <th>ID</th>
            <th>Nama Rak</th>
            <th>Lokasi</th>
        </tr>

        <?php foreach (isset($rak) && is_array($rak) ? $rak : [] as $r): ?>
            <tr>
                <td><?= $r['id_rak'] ?></td>
                <td><?= $r['nama_rak'] ?></td>
                <td><?= $r['lokasi'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

</body>

</html>