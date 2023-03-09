<?php
include ("koneksi.php");
if(!isset($_GET['kode_barang'])){
    header("location:stok.php?");
}
$id = $_GET['kode_barang'];
$sql =  "SELECT * FROM tb_master WHERE kode_barang='$id'";
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
 <form action="pedit-stok.php" method="POST">
    <p>
        <label for="kode_barang">Kode Barang</label>
        <input type="number" name="kode_barang" value="<?php echo $row['kode_barang']?>"/>
    </p>
    <p>
        <label for="nama_barang">Nama Barang</label>
        <input type="text" name="nama_barang" value="<?php echo $row['nama_barang']?>"/>
    </p>
    <p>
        <label for="harga_jual">Harga Jual</label>
        <input type="number" name="harga_jual" value="<?php echo $row['harga_jual']?>"/>
    </p>
    <p>
        <label for="harga_beli">Harga Beli</label>
        <input type="number" name="harga_beli" value="<?php echo $row['harga_beli']?>"/>
    </p>
    <p>
        <label for="satuan">Satuan</label>
        <input type="text" name="satuan" value="<?php echo $row['satuan']?>"/>
    </p>
    <p>
        <label for="kategori">Kategori</label>
        <input type="text" name="kategori" value="<?php echo $row['kategori']?>"/>
    </p>
    <p>
        <input type="submit" value="Edit" name="edit"/>
    </p>
 </form>
</body>
</center>
</html>