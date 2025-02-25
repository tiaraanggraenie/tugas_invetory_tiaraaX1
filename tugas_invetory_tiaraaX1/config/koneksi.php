<?php
//variable
$hostname = 'localhost';
$username = 'root';
$password = '';
$database_name = 'tugas_invetory_tiaraaX1';

$conn = mysqli_connect($hostname,$username,$password,$database_name);

if(!$conn){
    die('koneksi gagal' . mysqli_connect_error());
}
?>