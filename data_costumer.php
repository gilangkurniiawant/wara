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
        <div class="logout">
            <a href="logout.php"><button class="btn btn-success pull-right">Logout</button></a>
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
                    <th scope="col">Brands</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $result = mysqli_query($conn, "SELECT * FROM data_costumer");


                ?>
                <?php $i = 1; ?>

                <?php while ($data = mysqli_fetch_assoc($result)) :

                    ?>

                    <tr>
                        <th scope="row"><?= $i++; ?></th>
                        <td><?= $data["nama"] ?></td>
                        <td><?= $data["nomer"] ?></td>
                        <td><?= $data["brands"] ?></td>
                        <td><?= str_replace("0000-00-00 00:00:00", "-", $data["tanggal"])  ?></td>

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