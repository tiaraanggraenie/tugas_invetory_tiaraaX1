<?php

$id_barang = $_POST['id_barang'];
$id_jenis = $_POST['id_jenis'];
$harga = $_POST['harga'];
$stok= $_POST['stok'];
$nama_barang = $_POST['nama_barang'];

include '../../config/koneksi.php';

$query = mysqli_query ($conn, "INSERT INTO barang VALUES(
    
'$id_barang',  
'$id_jenis',   
'$harga',
'$stok',
'$nama_barang'  
)");

if($query){
echo "<script>alert('Data berhasil disimpan')</script>"; 
echo "<script>window.location.href='index.php'</script>";
}else{
echo "<script>alert('Data gagal disimpan')</script>";
echo "<script>window.location.href='tambah.php'</script>";
}