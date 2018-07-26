<?php
   session_start();
   if(isset($_SESSION['id'])) {
   header('location:index.php'); }
   require_once("proses/include/koneksi.php");
?>
<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="UTF-8">
	<title>Login</title>  
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="login-page">
  <div class="form">
  <h2 style="color:#f1103a;"><b>Aplikasi Pengelolaan Keuangan</b></h2><br>
    <form class="register-form" method="post" action="proses/sign-up.php">
      <input type="text" placeholder="nama" name="nama" required />
      <input type="password" placeholder="password" name="password" required />
      <input type="email" placeholder="email address" name="email" required />
      <button>daftar</button>
      <p class="message">Sudah mendaftar? <a href="#">Masuk</a></p>
    </form>
    <form class="login-form" method="post" action="proses/login.php">
      <input type="email" placeholder="email" name="email" required />
      <input type="password" placeholder="password" name="password" required />
      <button name="login">masuk</button>
	   <p class="message">admin@admin.com - admin</p>
      <p class="message">Belum mendaftar? <a href="#">Daftar</a></p>
    </form>
  </div>
</div>
	<script src='js/jqueryindex.min.js'></script>
    <script  src="js/index.js"></script>
</body>
</html>
