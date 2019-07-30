<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>

<body>
    <?php

    require "function.php";
    if (isset($_POST["tambah"])) {

        if (tambah($_POST) > 0) {
            echo "
      <script>
alert('data berhasil ditambahkan!');
document.location.href = 'data_costumer.php';
      </script>
      ";
        } else {
            echo "
      <script>
alert('data gagal ditambahkan!');
document.location.href = 'data_costumer.php';
      </script>
      ";
        }
    }

    ?>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="col-md-6">

            <form method="post" action="">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama">

                </div>
                <div class="form-group">
                    <label for="nomer">Nomer</label>
                    <input type="text" class="form-control" name="nomer">
                </div>

                <div class="form-group">
                    <label for="brands">Brands</label>
                    <select class="form-control" id="brands" name="brands">
                        <option></option>
                        <option>Rachacha</option>
                        <option>Chagocha</option>
                        <option>Fremilt</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary" name="tambah">Submit</button>
            </form>
        </div>

    </div>


    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/bootstrap.js"></script>
</body>

</html>