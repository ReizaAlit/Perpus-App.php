<?php
    session_start();
    if(isset($_SESSION["email"])){
        header("Location : perpus.php");
    }
    include_once("./connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1>Register</h1>
        <div class="container w-75">
                <h2 class="my-4">Register</h2>
                <form method="POST" action="./register_process.php">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input reuqired name ="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input required name ="password" type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button name="submit" type="submit" class="btn btn-primary">Register</button>
        </div>
    
    <form method="POST" action="./register_process.php">
        <label for="email">Email:</label><br>
        <input type="email" name="email" id="email"><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br>

        <input type="submit" value="Register">
    </form>
    
</body>
</html>