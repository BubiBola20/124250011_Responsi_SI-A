<?php
session_start();
include 'koneksi.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['username'] = $username;
        header("Location: home.php");
        exit();
    } else {
        echo "Login gagal. Periksa username dan password Anda.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <div class="container mt-5">
    <div class="card mx-auto" style="width: 30rem;">
        <div class="card-body">
            <h2 class="text-center">Pusdigif</h2>
            <h6 class="text-center mb-4">Sitem Perpustakaan Informatika</h6>
            <form method="POST" action="">
                <div class="form-label mb-3">
                    <label for="Input">Username</label>
                    <input type="text" name="username" class="form-control" id="floatingInput" placeholder="Username" required>
                </div>
                <div class="form-label mb-3">
                    <label for="Password">Password</label>
                    <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                </div>
                <button type="submit" name="login" class="btn btn-primary w-100">Masuk</button>
            </form>
        </div>
    </div>
     
   </div>
</body>
</html>