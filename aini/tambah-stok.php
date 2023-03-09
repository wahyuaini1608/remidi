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
 <form action="proses-stok.php" method="POST">
    <p>
        <label for="kode_barang">Kode Barang</label>
        <input type="number" name="kode_barang"/>
    </p>
    <p>
        <label for="nama_barang">Nama Barang</label>
        <input type="text" name="nama_barang"/>
    </p>
    <p>
        <label for="harga_jual">Harga Jual</label>
        <input type="number" name="harga_jual"/>
    </p>
    <p>
        <label for="harga_beli">Harga Beli</label>
        <input type="number" name="harga_beli"/>
    </p>
    <p>
        <label for="satuan">Satuan</label>
        <input type="text" name="satuan"/>
    </p>
    <p>
        <label for="kategori">Kategori</label>
        <input type="text" name="kategori"/>
    </p>
    <p>
        <input type="submit" value="Daftar" name="tambah"/>
    </p>
 </form>
</body>
</center>
</html>