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
<h2>DAFTAR BARANG DI GUDANG</h2>
<table border="1">
<a href="tambah-stok.php"><input type="button" value="Tambah Baru"/></a>
<br>
<br>
<a href="index.php"><input type="button" value="LOGOUT"/></a>
<br>
<br>
<tr>
    <th>No</th>
    <th>Kode Barang</th>
    <th>Nama Barang</th>
    <th>Harga Jual</th>
    <th>Harga Beli</th>
    <th>Satuan</th>
    <th>Kategori</th>
    <th>Aksi</th>
</tr>
<?php
include("koneksi.php");
$query = mysqli_query($koneksi, "SELECT * FROM tb_master");
$no = 1;
foreach ($query as $row):
    ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $row['kode_barang'];?></td>
        <td><?= $row['nama_barang'];?></td>
        <td><?= $row['harga_jual'];?></td>
        <td><?= $row['harga_beli'];?></td>
        <td><?= $row['satuan'];?></td>
        <td><?= $row['kategori'];?></td>
        <td>
            <a href="edit-stok.php?kode_barang=<?= $row['kode_barang'];?>">Edit</a>||
            <a href="hapus-stok.php?kode_barang=<?= $row['kode_barang'];?>">Hapus</a>
        </td>
    </tr>
    <?php endforeach; ?>
    </table>
</body>
</center>
</html>