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
    require "koneksi.php";
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
        <a href="tambah.php"><button type="submit" class="btn btn-primary">Tambah Data</button></a>
        <table class="table mt-5">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Nomer HP</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = mysqli_query($conn, "SELECT * FROM data_costumer");

                ?>
                <?php $i = 1; ?>
                <?php while ($data = mysqli_fetch_assoc($result)) : ?>
                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $data["nama"] ?></td>
                        <td><?= $data["nomer"] ?></td>
                        <td>

                            <a href="upload.php?id=<?= $data['id'] ?>"><button type="submit" class="btn btn-primary">Upload</button></a>
                            <a href="detail.php?id=<?= $data['id'] ?>"> <button type="submit" class="btn btn-success">Detail</button></a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>






    </div>

    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/bootstrap.js"></script>
</body>

</html>