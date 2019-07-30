<!DOCTYPE html>
<html lang="en">
<head>
<?php
session_start();
 if (isset($_SESSION['user'])){
    header("Location: index.php?page=bukutamu");

}
?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<?php
			if(@$_GET['alert']){
			?>
			<script>alert(<?php echo $_GET['alert'];?>);</script>
                <?php
				}
	
             

                ?>
    <div class="kotak_login">
        <p class="tulisan_login">Silakan Login</p>
        <form action="aksi.php?op=in" method="post">
            <label>Username</label>
            <input type="text" name="user" class="form_login">
            <label>Password</label>
            <input type="password" name="pass" class="form_login">
            <input type="submit" value="LOGIN" class="tombol_login">
        </form>
    </div>
</body>
</html>