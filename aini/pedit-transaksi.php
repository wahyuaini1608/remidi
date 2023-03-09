<?php
include ("koneksi.php");
if(isset($_POST['edit'])){
    $id =$_POST['id'];
    $nf =$_POST['no_faktur'];
    $nk =$_POST['nama_konsumen'];
    $kd =$_POST['kode_barang'];
    $j =$_POST['jumlah'];
    $hs =$_POST['harga_satuan'];
    $ht =$_POST['harga_total'];

    $sql = "UPDATE tb_penjualan SET id='$id',no_faktur='$nf',nama_konsumen='$nk',kode_barang='$kd',jumlah='$j',harga_satuan='$hs',harga_total='$ht' WHERE id='$id'";
    $query = mysqli_query ($koneksi, $sql);

    if($query){
        header('location:transaksi.php?status=sukses');
    }else{
        header('location:transaksi.php?status=gagal');
    }}else{
    die("akses dilarang");
}
?>