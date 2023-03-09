<?php
include ("koneksi.php");
if(isset($_POST['edit'])){
    $id =$_POST['kode_barang'];
    $nb =$_POST['nama_barang'];
    $hj =$_POST['harga_jual'];
    $hb =$_POST['harga_beli'];
    $s =$_POST['satuan'];
    $k =$_POST['kategori'];

    $sql = "UPDATE tb_master SET kode_barang='$id',nama_barang='$nb',harga_jual='$hj',harga_beli='$hb',satuan='$s',kategori='$k' WHERE kode_barang='$id'";
    $query = mysqli_query ($koneksi, $sql);

    if($query){
        header('location:stok.php?status=sukses');
    }else{
        header('location:stok.php?status=gagal');
    }}else{
    die("akses dilarang");
}
?>