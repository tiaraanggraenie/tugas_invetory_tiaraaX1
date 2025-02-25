<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman tambah Data</title>
</head>
<body>
    <h1>Halaman tambah Data Siswa</h1>
    <form action="proses_tambah.php" method="post">
        <label for="">id siswa</label>
        <input type="text" name="id_siswa">
        <br>
        <label for="">nis</label>
        <input type="text" name="nis">
        <br>
        <label for="">nama</label>
        <input type="text" name="nama">
        <br>
        <label for="">id kelas</label>
        <input type="text" name="id_kelas">
        <br>
        <label for="">alamat</label>
        <input type="text" name="alamat">
        <br>
        <button type="sumbit">Simpan</button>
    </form>
</body>
</html>