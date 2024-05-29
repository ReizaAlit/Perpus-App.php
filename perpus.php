<?php
    session_start();
    
    if(!isset($_SESSION['email'])){
        header("Location: login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <h6>Nama : Reiza Alithian Syach</h6>
        <h6>NPM : 2210631170098</h6>
        <h6>Kelas : 4A-Informatika</h6>
        <h6>Mata Kuliah : Pemrograman Web</h6>
        <h1 class="my-4">Aplikasi Perpustakaan</h1>

        <a class="btn btn-primary mb-2" href="./buku.php">Lihat Daftar Buku</a>
        <br>
        <a class="btn btn-success" href="./staff.php">Lihat Daftar Staff</a>
        <br><br>
        <form class="mt-4" action="logout_process.php">
            <button class="btn btn-danger" type="submit">Logout</button>
        </form>

    </div>
</body>
</html>