<?php

$id_barang = $_GET['id_barang'];
$id_jenis = $_POST['id_jenis'];
$harga = $_POST['harga'];
$stok= $_POST['stok'];
$nama_barang = $_POST['nama_barang'];
include '../../config/koneksi.php';

$query = mysqli_query (mysql: $conn,
query: "UPDATE barang SET id_jenis='$id_jenis',harga='$harga',stok='$stok', nama_barang='$nama_barang'
WHERE id_barang ='$id_barang'");
    

if($query){
echo "<script>alert('Data berhasil diedit')</script>"; 
echo "<script>window.location.href='index.php'</script>";
}else{
echo "<script>alert('Data gagal diedit')</script>";
echo "<script>window.location.href='tambah.php'</script>";
}