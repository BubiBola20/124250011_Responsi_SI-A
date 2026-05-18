<?php
require 'koneksi.php';
$result = mysqli_query($conn, "SELECT * FROM buku ORDER BY id ASC");
$success = $_SESSION['success'] ?? '';
$error_msg = $_SESSION['error_msg'] ?? '';
unset($_SESSION['success'], $_SESSION['error_msg']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koleksi</title>
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

    <h1 class = "text-center">Koleksi Buku</h1>
    <?php if ($success): ?>
        <p style="color: green;"><?php echo $success; ?></p>
    <?php endif; ?>
    <?php if ($error_msg): ?>
        <p style="color: red;"><?php echo $error_msg; ?></p>
    <?php endif; ?>
    <table class="table">
       <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Kategori</th>
            <th>Stok</th>
            <th>Status</th>
            <th>Aksi</th>
       </tr>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['judul']; ?></td>
                    <td><?php echo $row['penulis']; ?></td>
                    <td><?php echo $row['kategori']; ?></td>
                    <td><?php echo $row['stok']; ?></td>
                    <td><?php echo $row['status']; ?></td>
                    <td><a href="pinjam.php?id=<?php echo $row['id']; ?>">Pinjam</a></td>
                </tr>
            <?php endwhile; ?>
        </tbody>

    </table>
</body>
</html>