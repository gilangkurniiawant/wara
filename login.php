<?php
session_start();
if (isset($_SESSION["user"])) {
    header("Location:data_costumer.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        .card {
            margin-top: 50px;
            width: 300px;
            margin-left: 40%;
        }
    </style>
</head>

<body>
<?php

require "function.php";
if (isset($_POST["submit"])) {

  login();
}

?>
    <!-- <div class="container"> -->
    <div class="card">
        <div class="card-header">
            Login
        </div>
        <div class="card-body">
            <form method="post" action="">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Masukkan Username Anda">

                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <!-- </div> -->
</body>

</html>