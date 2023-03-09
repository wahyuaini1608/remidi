<?php
include ("koneksi.php");
$id = $_GET['kode_barang'];
$sql = "DELETE FROM tb_master WHERE kode_barang='$id'";
$query = mysqli_query($koneksi, $sql);

if($query){
    header('location:stok.php?status=sukses');
}else{
    header('location:stok.php?status=gagal');
}
?>