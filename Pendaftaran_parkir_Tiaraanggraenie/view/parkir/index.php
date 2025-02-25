<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Data Siswa Baru Kelas XI PPLG 1</h1>
    <a href="view_tambah.php">Tambah Pendaftaran Baru</a>
    <br><br>
    <table border="1">
        <tr>
            <th>No.</th>
            <th>ID siswa</th>
            <th>NIS</th>
            <th>Nama Siswa</th>
            <th>ID kelas</th>
            <TH>Alamat</TH>
            <th>Aksi</th>
        </tr>
        <?php
        include "../../config/koneksi.php";
        $query = mysqli_query($conn,"SELECT * FROM siswa");
        $no=1;
        if(mysqli_num_rows($query)){
            while($result=mysqli_fetch_assoc($query)){
                ?>

                <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $result['id_siswa']?></td>
                    <td><?php echo $result['nis']?></td>
                    <td><?php echo $result['nama']?></td>
                    <td><?php echo $result['id_kelas']?></td>
                    <td><?php echo $result['alamat']?></td>
                    <td>
                        <a href="">Edit  |</a>
                        <a href="">Hapus  |</a>
                    </td>
                </tr>
             <?php
                $no++;
            }
        }else{
            echo "Data Kosong";
        }
        ?>
        </table>
</body>
</html>