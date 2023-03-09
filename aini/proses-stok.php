<?php
include ("koneksi.php");
if(isset($_POST['tambah'])){
    $kd =$_POST['kode_barang'];
    $nb =$_POST['nama_barang'];
    $hj =$_POST['harga_jual'];
    $hb =$_POST['harga_beli'];
    $s =$_POST['satuan'];
    $k =$_POST['kategori'];

    $sql = "INSERT INTO tb_master(kode_barang,nama_barang,harga_jual,harga_beli,satuan,kategori) 
            VALUES ('$kd', '$nb','$hj','$hb','$s','$k')";
    $query = mysqli_query ($koneksi, $sql);

    if($query){
        header('location:stok.php?status=sukses');
    }else{
        header('location:stok.php?status=gagal');
    }}else{
    die("akses dilarang");
}
?>