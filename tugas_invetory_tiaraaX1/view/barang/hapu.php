<?php

$id_barang = $_GET['id_barang'];

include '../../config/koneksi.php';

$query = mysqli_query ($conn,"DELETE FROM  barang WHERE id_barang ='$id_barang'");
    

if($query){
echo "<script>alert('Data berhasil dihapus')</script>"; 
echo "<script>window.location.href='index.php'</script>";
}else{
echo "<script>alert('Data gagal dihapust')</script>";
echo "<script>window.location.href='tambah.php'</script>";
}