<?php
    include_once("./connect.php");

    $id = $_GET["id"];

    $query_get_data = mysqli_query($db, "SELECT * FROM buku WHERE id=$id");
    $buku = mysqli_fetch_assoc($query_get_data);

    if(isset($_POST["submit"])){
        $nama = $_POST["nama"];
        $isbn = $_POST["isbn"];
        $unit = $_POST["unit"];

        $query = mysqli_query($db, "UPDATE buku SET nama='$nama',
        isbn='$isbn', unit='$unit' WHERE id=$id");
    }

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="container w-75">
        <h2 class="my-4">Form Edit Buku</h2>
        <form action="" method="POST">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input value="<?php echo $buku["nama"] ?>" type="text" id="nama" name="nama" class="form-control">
            </div>
            <div class="mb-3">
                <label for="isbn" class="form-label">ISBN</label>
                <input value="<?php echo $buku["isbn"] ?>" type="text" id="isbn" name="isbn" class="form-control">
            </div>
            <div class="mb-3">
                <label for="unit" class="form-label">Unit</label>
                <input value="<?php echo $buku["unit"] ?>" type="number" id="unit" name="unit" class="form-control">
            </div>
            
            <button type="submit" name="submit" class="btn btn-success">SUBMIT</button>
            <a href="./buku.php" class="btn btn-danger">Kembali Ke Daftar Buku</a>
        </form>
    </div>
</body>
</html>