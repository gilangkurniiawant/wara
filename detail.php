<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/dataTables.bootstrap4.min.css">

    <style>
        h5 {
            margin-top: 20px;
        }
    </style>


</head>

<body>


    <?php
    require "koneksi.php";

    $id = $_GET["id"];
    $limit = isset($_GET['all']) ? '' : 'ORDER BY tanggal DESC LIMIT 3';


    $q = "SELECT * FROM data_chat  WHERE id = $id " . $limit;

    $sql = "  select * from (" . $q . ")  tmp order by tmp.tanggal asc";
    $result = isset($_GET['all']) ? mysqli_query($conn, $q) : mysqli_query($conn, $sql);
    $url = isset($_GET['all']) ? "detail.php?id=$id" : "detail.php?id=$id&all";
    $teks = isset($_GET['all']) ? 'Lihat Sebagian' : 'Lihat Semua';

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
    <?php
    require "koneksi.php";
    ?>

    <div class="container">
        <table class="table table-striped table-borderd mt-5" id='data_table'>
            <thead>

                <?php
                $id = $_GET["id"];
                $result2 = mysqli_query($conn, "SELECT * FROM data_costumer WHERE id = $id");
                $data2 = mysqli_fetch_assoc($result2);
                ?>
                <h5>Nama :<?= $data2["nama"] ?> </h5>
                <h5>Nomer:<?= $data2["nomer"] ?></h5>

                <tr>
                    <a style="float:right" href="<?= $url ?>" class="btn btn-primary"><?= $teks ?></a>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Chat</th>

                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                ?>

                <?php while ($data = mysqli_fetch_array($result)) : ?>

                    <tr>
                        <?php
                        // function multiexplode($delimiters, $data)
                        // {
                        //     $MakeReady = str_replace($delimiters, $delimiters[0], $data);
                        //     $Return = explode($delimiters[0], $MakeReady);
                        //     return $Return;
                        // }


                        ?>
                        <th scope="row"><?= $i++ ?></th>
                        <td width="10%"><?= $data["nama"]; ?> </td>
                        <td width="20%"><?= str_replace(":00", "", $data["tanggal"]); ?> </td>
                        <td><?= str_replace("<Media tidak disertakan>", "->Media Tidak Disertakan ", $data["chat"]); ?></td>



                    <?php endwhile; ?>
            </tbody>
        </table>
        <a href="data_costumer.php"><button type="submit" class="btn btn-success">Kembali</button></a>

    </div>



    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    <script src="js/dataTables.bootstrap4.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script>
        $(document).ready(function() {
            $('#data_table').DataTable();
        });
    </script>

</body>

</html>