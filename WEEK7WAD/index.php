<?php
//koneksi ke database kerupuk
require 'fungsi.php';
$jeniskerupuk = query("SELECT * FROM jenis_kerupuk");
?>

<!doctype html>
<html>
<head>
    <title>Toko R3</title>
</head>
<body>
    <h1>Daftar Jenis Kerupuk Palembang</h1>
    <a href="tambah.php">Tambah jenis kerupuk</a>
    <br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Nomor </th>
            <th>Aksi</th>
            <th>Nama Dimsum</th>
            <th>Kode Dimsum</th>
            <th>Harga Dimsum</th>
            <th>Stock Dimsum</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($jeniskerupuk as $row ): ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="ubah.php?nomor=<?= $row["nomor"]; ?>">ubah</a> | 
                <a href="hapus.php?nomor=<?= $row["nomor"]; ?>" onclick = "
                    return confirm('apakah anda yakin');">hapus</a>

            </td>
            <td><?= $row["nama_kerupuk"]; ?> </td>
            <td><?= $row["kode_kerupuk"]; ?></td>
            <td><?= $row["harga_kerupuk"]; ?></td>
            <td><?= $row["stock_kerupuk"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>