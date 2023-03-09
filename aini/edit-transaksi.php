<?php
include ("koneksi.php");
if(!isset($_GET['id'])){
    header("location:transaksi.php?");
}
$id = $_GET['id'];
$sql =  "SELECT * FROM tb_penjualan WHERE id='$id'";
$query = mysqli_query($koneksi,$sql);
$row = mysqli_fetch_assoc($query);
if(mysqli_num_rows($query)< 1){
    die("DATA TIDAK DITEMUKAN");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
</head>
<center>
<body>
 <h2>FORM STOK BARANG</h2>
 <form action="pedit-transaksi.php" method="POST">
 <p>
        <label for="id">ID</label>
        <input type="number" name="id" value="<?php echo $row['id']?>"/>
    </p>
    <p>
        <label for="no_faktur">No Faktur</label>
        <input type="text" name="no_faktur" value="<?php echo $row['no_faktur']?>"/>
    </p>
    <p>
        <label for="nama_konsumen">Nama Konsumen</label>
        <input type="text" name="nama_konsumen" value="<?php echo $row['nama_konsumen']?>"/>
    </p>
    <p>
        <label for="kode_barang">Kode Barang</label>
        <input type="number" name="kode_barang" value="<?php echo $row['kode_barang']?>"/>
    </p>
    <p>
        <label for="jumlah">Satuan</label>
        <input type="text" name="jumlah" value="<?php echo $row['jumlah']?>"/>
    </p>
    <p>
        <label for="harga_satuan">Harga Satuan</label>
        <input type="number" name="harga_satuan" value="<?php echo $row['harga_satuan']?>"/>
    </p>
    <p>
        <label for="harga_total">Harga Total</label>
        <input type="number" name="harga_total" value="<?php echo $row['harga_total']?>"/>
    </p>
    <p>
        <input type="submit" value="Edit" name="edit"/>
    </p>
 </form>
</body>
</center>
</html>