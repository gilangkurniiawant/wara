<?php
require "function.php";
ini_set('date.timezone', 'Asia/Jakarta');
$tanggal = date('Y-m-d');
$waktu = date('H:i:s');
$file = upload();

$query = "INSERT INTO data_chat
                    VALUES
                    ('','$file','$tanggal','$waktu')
                    ";
mysqli_query($conn, $query);
header("location:data_costumer.php");
