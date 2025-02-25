<?php

$id_siswa = $_POST['id_siswa'];
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$id_kelas = $_POST['id_kelas'];
$alamat = $_POST['alamat'];

include '../../config/koneksi.php';
$query = mysqli_query($conn,
"INSERT INTO siswa VALUES('$id_siswa','$nis','$nama','$id_kelas','$alamat')");

echo "
<script>
alert('input data berhasil');
</script>
<script>
window.location.href = 'index.php';
</script>
";