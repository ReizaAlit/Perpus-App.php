<?php
    include_once("./connect.php");

    $query = mysqli_query($db, "SELECT * FROM staff")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Staff</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    <div class="container w-75">
        <h1 class="my-4">Daftar Staff</h1>
        <table class="table table-striped">
            <tr>
                <td>Nama</td>
                <td>No.Telepon</td>
                <td>Email</td>
                <td>ACTION</td>
            </tr>
            
            <?php foreach($query as $staff) { ?>
                <tr>
                    <td><?php echo $staff["nama"] ?></td>
                    <td><?php echo $staff["telp"] ?></td>
                    <td><?php echo $staff["email"] ?></td>
                    <td>
                        <a href=<?php echo "edit-staff.php?id=" . $staff["id"] ?>>EDIT</a>
                        <a href=<?php echo "delete-staff.php?id=" . $staff["id"] ?>>HAPUS</a>
                    </td>            
                </tr>
            <?php } ?>
        </table>
        <br>
        <a class="btn btn-primary mb-4 " href="./tambah-staff.php"  >Tambah Staff</a> 
        <br>
        <a class="btn btn-success" href="./perpus.php">Kembali Ke Halaman Utama</a>
    </div>
    

</body>
</html>