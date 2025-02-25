<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Tambah barang</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <h1>Halaman Tambah barang</h1>
  <form action="proses_tambah.php" method="post">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">id_barang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">id_jenis</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="container">
    <h1>Data barang</h1>
    <br>
    <?php
    include '../../config/koneksi.php';
    $id_barang = $_GET ['id_barang'];
    $query = mysqli_query(mysql: $conn, query: "SELECT * FROM barang WHERE id_barang='$id_barang'");
    $result=mysqli_fetch_array(result: $query);
    ?>
    <form action="proses_edit.php?id_barang=<?php echo $result['id_barang']?> "method="POST">
    <div class="mb-3">
      
      </select>
    </div>
    <div class="mb-3">
    <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">id_barang</label>
    <input type="text" class="form-control" name="id_jenis"  value="<?php echo $result['id_barang']?>"
     id="exampleInputEmail1" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <div class="mb-3">
        <label for="" class="form-label">id_jenis</label>
        <input
            type="text"
            class="form-control"
            name="id_jenis"value="<?php echo $result['id_jenis']?>"
            id=""
            aria-describedby="helpId"
            placeholder=""
        />
        <small id="helpId" class="form-text text-muted">Help text</small>
    </div>
  <div class="mb-3">
    <div class="mb-3">
        <label for="" class="form-label">harga</label>
        <input
            type="text"
            class="form-control"
            name="harga"value="<?php echo $result['harga']?>"
            id=""
            aria-describedby="helpId"
            placeholder=""
        />
        <div class="mb-3">
    <div class="mb-3">
        <label for="" class="form-label">stok</label>
        <input
            type="text"
            class="form-control"
            name="stok"value="<?php echo $result['stok']?>"
            id=""
            aria-describedby="helpId"
            placeholder=""
        />
        <div class="mb-3">
    <div class="mb-3">
        <label for="" class="form-label">nama_barang</label>
        <input
            type="text"
            class="form-control"
            name="nama_barang"value="<?php echo $result['nama_barang']?>"
            id=""
            aria-describedby="helpId"
            placeholder=""
        />
        <small id="helpId" class="form-text text-muted">Help text</small>
    </div>
    
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
   
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>