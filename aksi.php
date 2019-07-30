<?php
if(@$_GET['op']){
$op= $_GET['op'];
$cek="0";
}

if($cek=="1"){
    session_start();
    if (!isset($_SESSION['user'])){
        header("Location: login.php?alert='Anda Harus Login!.'");
        exit;
    }

} elseif($op=="out"){
    session_start();
    session_unset();
    session_destroy();
    header("Location: login.php?alert='Logout Berhasil!.'");
}else {
session_start();
include "config.php";
$user = $_POST['user'];
$pass = $_POST['pass'];

if($op=="in"){
	$result = mysqli_query($conn, "SELECT * FROM user WHERE username='".$user."' AND password='".$pass."'");
	if(mysqli_num_rows($result)==1){
        $q =mysqli_fetch_array($result);
        $_SESSION['user'] = $q['username'];
        
        header("Location: index.php?page=bukutamu&alert='Anda Berhasil Login'");
        
	} else {
        header("Location: login.php?alert='Username/Katasandi Salah'");
    }


}
}
?>
