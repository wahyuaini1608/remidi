<?php
include ("koneksi.php");
if(isset($_POST['tambah'])){
    $id =$_POST['id'];
    $nf =$_POST['no_faktur'];
    $nk =$_POST['nama_konsumen'];
    $kd =$_POST['kode_barang'];
    $j =$_POST['jumlah'];
    $hs =$_POST['harga_satuan'];
    $ht =$_POST['harga_total'];

    $sql = "INSERT INTO tb_penjualan(id,no_faktur,nama_konsumen,kode_barang,jumlah,harga_satuan,harga_total) 
            VALUES ('$id', '$nf','$nk','$kd','$j','$hs','$ht')";
    $query = mysqli_query ($koneksi, $sql);

    if($query){
        header('location:transaksi.php?status=sukses');
    }else{
        header('location:transaksi.php?status=gagal');
    }}else{
    die("akses dilarang");
}
?>