<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stok</title>
</head>
<center>
<body>
<h2>APLIKASI PENJUALAN NINE MART</h2>
<h2>TRANSAKSI BARANG</h2>
<table border="1">
<a href="tambah-transaksi.php"><input type="button" value="Tambah Baru"/></a>
<br>
<br>
<a href="index.php"><input type="button" value="LOGOUT"/></a>
<br>
<br>
<tr>
    <th>No</th>
    <th>ID</th>
    <th>No Faktur</th>
    <th>Nama Konsumen</th>
    <th>Kode Barang</th>
    <th>Satuan</th>
    <th>Harga Satuan</th>
    <th>Harga Total</th>
    <th>Aksi</th>
</tr>
<?php
include("koneksi.php");
$query = mysqli_query($koneksi, "SELECT * FROM tb_penjualan");
$no = 1;
foreach ($query as $row):
    ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $row['id'];?></td>
        <td><?= $row['no_faktur'];?></td>
        <td><?= $row['nama_konsumen'];?></td>
        <td><?= $row['kode_barang'];?></td>
        <td><?= $row['jumlah'];?></td>
        <td><?= $row['harga_satuan'];?></td>
        <td><?= $row['harga_total'];?></td>
        <td>
        <a href="edit-transaksi.php?id=<?= $row['id'];?>">Edit</a>||
        <a href="hapus-transaksi.php?id=<?= $row['id'];?>">Hapus</a>
        </td>
    </tr>
    <?php endforeach; ?>
    </table>
</body>
</center>
</html>