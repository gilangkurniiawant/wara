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
    <!-- <div class="container"> -->
    <div class="card">
        <div class="card-header">
            Login
        </div>
        <div class="card-body">
            <form method="post" action="aksi_login.php?op=in">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Masukkan Username Anda">

                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                </div>
                <button type="submit" name=submit class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <!-- </div> -->
</body>

</html>