!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Data parkir kendaraan </h1>
    <a href="view_tambah.php">Tambah Pendaftaran Baru</a>
    <br><br>
    <table border="1">
        <tr>
            <th>no.</th>
            <th>ID kelas</th>
            <th>nama kelas</th>
            <th>aksi</th>
        </tr>
        <?php
        include "../../config/koneksi.php";
        $query = mysqli_query($conn,"SELECT * FROM kelas");
        $no=1;
        if(mysqli_num_rows($query)){
            while($result=mysqli_fetch_assoc($query)){
                ?>

                <tr>
                    <td><?php echo $no;?></td>
                    <td><?php echo $result['id_kelas']?></td>
                    <td><?php echo $result['nama_kelas']?></td>
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