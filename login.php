<?php

include 'core.php';
if(isset($_POST["username"])){
$username = $_POST["username"];
$password = $_POST["password"];

$row = mysqli_query($conn, "select * from 'user' where 'username' = '$username' ['username'] and 'pass' = '$password' ['password']");

}

if(mysqli_num_rows($row) < 1){
    echo "PASSWORD / USERNAME SALAH";}else{ esession_start();
        $_SESSION["status"] = "login";
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600;700&display=swap"
        rel="stylesheet">
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <title>Login Kalender Pelatihan</title>
</head>

<body>
<!-- Login -->

<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Masuk Kalender HSE TC Pertamina</h1>
            <div class="account-wall text-center">
                <img src="asset/Pertamina.png" style="width: 60%; margin-bottom: 20px;"
                    alt="">
                <form class="form-signin">
                <input type="text" class="form-control" placeholder="Usernam" required autofocus>
                <input type="password" class="form-control" placeholder="Password" required>
                <a href="indexmasuk.html">
                <button class="btn btn-lg btn-primary btn-block" type="button">
                    Masuk</button></a>
                <a href="index.html">
                <button href="index.html" class="btn btn-lg btn-danger btn-block" type="button" style="margin-top: 10px;">
                        Kembali ke Kalender</button></a>
            </div>
        </div>
    </div>
</div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>

</html>