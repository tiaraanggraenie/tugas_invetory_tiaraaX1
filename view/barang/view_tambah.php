<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Halaman Tambah Barang</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  
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
          <a class="nav-link active" aria-current="page" href="#">barang</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">jenis</a>
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
<h1>Data Barang</h1>

<br></br>
<form action="proses_tambah.php" method="POST">
  <div class="mb-3">
    <label for="teks" class="form-label">id_barang</label>
    <input type="teks" class="form-control" id="teks" aria-describedby="teks" name="id_barang">
    
  </div>
  <div class="mb-3">
    <label for="teks" class="form-label">id_jenis</label>
    <input type="teks" class="form-control" id="teks" aria-describedby="teks" name="id_jenis">
   
  </div>
  <div class="mb-3">
    <label for="teks" class="form-label">harga</label>
    <input type="teks" class="form-control" id="teks" aria-describedby="teks" name="harga">
    
  </div>
  <div class="mb-3">
    <label for="teks" class="form-label">stok</label>
    <input type="teks" class="form-control" id="teks" aria-describedby="teks" name="stok">
    
  </div>
  <div class="mb-3">
    <label for="teks" class="form-label">nama_barang</label>
    <input type="teks" class="form-control" id="teks" aria-describedby="teks" name="nama_barang">
   
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>
</body>