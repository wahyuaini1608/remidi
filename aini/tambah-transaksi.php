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
 <h2>FORM TRANSAKSI</h2>
 <form action="proses-transaksi.php" method="POST">
    <p>
        <label for="id">ID</label>
        <input type="number" name="id"/>
    </p>
    <p>
        <label for="no_faktur">No Faktur</label>
        <input type="text" name="no_faktur"/>
    </p>
    <p>
        <label for="nama_konsumen">Nama Konsumen</label>
        <input type="text" name="nama_konsumen"/>
    </p>
    <p>
        <label for="kode_barang">Kode Barang</label>
        <input type="number" name="kode_barang"/>
    </p>
    <p>
        <label for="jumlah">Satuan</label>
        <input type="text" name="jumlah"/>
    </p>
    <p>
        <label for="harga_satuan">Harga Satuan</label>
        <input type="number" name="harga_satuan"/>
    </p>
    <p>
        <label for="harga_total">Harga Total</label>
        <input type="number" name="harga_total"/>
    </p>
    <p>
        <input type="submit" value="Daftar" name="tambah"/>
    </p>
 </form>
</body>
</center>
</html>