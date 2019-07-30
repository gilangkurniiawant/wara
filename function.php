<?php
$conn = mysqli_connect("localhost", "root", "", "costumer");

function tambah($data)
{

    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $nomer = htmlspecialchars($data["nomer"]);
    $brands = htmlspecialchars($data["brands"]);


    $query = "INSERT INTO data_costumer
                    VALUES
                    ('','$nama','$nomer','','$brands')
                    ";
    mysqli_query($conn, $query);
    header("location:data_costumer.php");
}

function multiexplode($delimiters, $data)
{
    $MakeReady = str_replace($delimiters, $delimiters[0], $data);
    $Return = explode($delimiters[0], $MakeReady);
    return $Return;
}

function upload_file($data)
{
    global $conn;
    ini_set('date.timezone', 'Asia/Jakarta');
    $tanggal = date('Y-m-d');
    $waktu = date('H:i:s');
    $file = upload();
    $isi = getData($file);
    $a = explode("\n", $isi);

    if (rmdir("Upload")) {
        echo "berhasil dihapus";
    } else {
        echo "gagal dihapus";
    }


    $last = count($a) - 4;
    /*    
    for($x=0; $x<4; $x++){
        echo $a[$last+$x];
    }

    die();
*/

    $data = array();
    // $blacklist = '[]:';

    foreach ($a as $isi) {

        $str = $isi . ']';



        preg_match('/\[(.*?)\]/', $str, $tanggal);
        preg_match('/\:\s(.*?)\]/', $str, $chat);

        if (count($chat) < 1) {
            $nama = array('', '');
            preg_match('/\]\s(.*?)\]/', $str, $chat);
        } else {
            preg_match('/\]\s(.*?)\:/', $str, $nama);
        }

        if (count($tanggal) < 1) {

            preg_match('/(.*?)\s\-/', $str, $tanggal);
            preg_match('/\:\s(.*?)\]/', $str, $chat);



            if (count($chat) < 1) {
                $nama = array('', '');
                preg_match('/\s\-(.*?)\]/', $str, $chat);
            } else {
                preg_match('/-\s(.*?)\:/', $str, $nama);
            }
        }

        if (count($tanggal) > 1) {

            $data[] = array('tanggal' => str_replace("<br>", "", $tanggal[1]), 'nama' => $nama[1], 'chat' => $chat[1]);
        }
    }

    for ($a = 0; $a < count($data); $a++) {
        $chat = str_replace("'", "\'", $data[$a]['chat']);
        $nama  = $data[$a]['nama'];
        $tgl = $data[$a]['tanggal'];
        $id = $_GET['id'];
        $val = "SELECT * FROM data_chat where id = '$id' AND nama = '$nama'  AND tanggal = (SELECT STR_TO_DATE('$tgl', '%d/%m/%Y %H.%i')) AND chat = '$chat'";
        $val_isi_chat = "SELECT * FROM data_chat where id = '$id'";
        $eks_chat = mysqli_query($conn, $val) or die($val_isi_chat . "Error :" . mysqli_error($conn));
        $jum_chat = mysqli_num_rows($eks_chat);

        $exc = mysqli_query($conn, $val) or die($val . "Error :" . mysqli_error($conn));
        $jum = mysqli_num_rows($exc);

        if ($a == 0) {
            if ($jum_chat <= 1) {
                $sql = "UPDATE data_costumer set tanggal=STR_TO_DATE('$tgl', '%d/%m/%Y %H.%i') where id=$id";
                mysqli_query($conn, $sql) or die($sql . "Error :" . mysqli_error($conn));
            }
        }
        if ($jum == 0) {
            $sql = "INSERT INTO data_chat VALUES('$id','$nama',STR_TO_DATE('$tgl', '%d/%m/%Y %H.%i'),'$chat')";

            $exc = mysqli_query($conn, $sql) or die($sql . "Error :" . mysqli_error($conn));
        }
    }

    header("location:data_costumer.php");
}









/*
    $query = "INSERT INTO data_chat
    VALUES
    ('$id','$file','$tanggal','$waktu')
    ";
    
    $query = "SELECT nama FROM data_chat where id=" . $id;
    $exc = mysqli_query($conn, $query) or die($query . "Error :" . mysqli_error($conn));
    $data = mysqli_fetch_assoc($exc);

    // $db = $data['nama'] . "<br>" . $isi;

    if (count($data) > 0) {
        $query = "INSERT INTO data_chat
                    VALUES
                    ('$id','$isi','$tanggal','$waktu')
                    ";

        // $query = "UPDATE data_chat set nama='" . $db . "' where id=" . $id;
    } else {
        $query = "INSERT INTO data_chat
                    VALUES
                    ('$id','$isi','$tanggal','$waktu')
                    ";
    }
    mysqli_query($conn, $query) or die($query . "Error :" . mysqli_error($conn));

    header("location:data_costumer.php");

}
*/

function getData($nama)
{
    $hasil = '';
    $fh = fopen($nama . '/_chat.txt', 'r');
    while ($line = fgets($fh)) {
        $hasil .= $line . "<br>";
    }
    fclose($fh);



    return $hasil;
}
function upload()
{

    $namaFile = $_FILES['file_zip']['name'];
    if ($_FILES['file_zip']['name'] != '') {
        $file_name = $_FILES['file_zip']['name'];


        if (!file_exists('Upload/' . $namaFile)) {
            $namaFile = 'Upload/' . $namaFile;
            mkdir($namaFile, 0777, true);
        } else {
            $namaFile = 'Upload/' . $namaFile . rand(9, 100);
            mkdir($namaFile, 0777, true);
        }


        $array = explode(".", $file_name);

        $name = $array[0];
        $ext = $array[1];
        if ($ext == 'zip') {
            $path = $namaFile;
            if (!file_exists($path))
                mkdir($path);


            $location = $path . $file_name;
            if (move_uploaded_file($_FILES['file_zip']['tmp_name'], $location)) {
                $zip = new ZipArchive;
                if ($zip->open($location)) {
                    $zip->extractTo($path);
                    $zip->close();
                }
                return $namaFile;
                unlink($location);


                echo "<script>alert('Data berhasil diupload'); location='data_costumer.php';</script>";
            }
        } else {
            echo "<script>alert('Hanya .zip yang diperbolehkan'); location='data_costumer.php';</script>";
        }
    }
}
