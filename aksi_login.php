<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'costumer');
$username = $_POST['username'];
$password = $_POST['password'];
$op = $_GET['op'];

if ($op = "in") {
    $query = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'") or die(mysqli_error($conn));
    if (mysqli_num_rows($query) == 1) {
        $q = mysqli_fetch_array($query);
        $_SESSION['username'] = $q['user'];
        header("Location: data_costumer.php");
    } else {
        $q = mysqli_fetch_array($query);
        $_SESSION['username'] != $q['user'];
        header("Location: login.php");
    }
}
