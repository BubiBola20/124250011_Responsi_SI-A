<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-primary">
    <div class ="container-fluid">
        <a class="navbar-brand" href="#">Pusdigif</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="home.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Koleksi.php">Koleksi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="peminjaman.php">Peminjaman</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
            </ul>
        </div>
    </div>
    </nav>

    <h1 class="judul text-center mt-5">
        PERPUSTAKAAN DIGITAL INFORMATIKA
    </h1>

    <h6 class="text-center mt-4">
       Selamat datang di perpustakaan digital informatika 
    </h6>

    <div class = "buttons text-center mt-4">
        <a href="koleksi.php" class="btn btn-primary">Koleksi</a>
        <a href="peminjaman.php" class="btn btn-primary">Peminjaman</a>
    </div>
</body>
</html>