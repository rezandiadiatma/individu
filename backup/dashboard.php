<?php
session_start();
if(!isset($_SESSION['id'])) {
   header('location:index.php'); 
} else { 
   $id = $_SESSION['id']; 
}
?>
<!DOCTYPE html>
<html>
<title>Dashboard</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Karma">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
.w3-bar-block .w3-bar-item {padding:20px}
</style>
<body ="green">

<!-- Sidebar (hidden by default) -->
<nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px;" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()"
  class="w3-bar-item w3-button">☰</a>
  <a href="#" onclick="w3_close()" class="w3-bar-item w3-button">Dashboard</a>
  <a href="#" onclick="w3_close()" class="w3-bar-item w3-button">Pendapatan</a>
  <a href="#" onclick="w3_close()" class="w3-bar-item w3-button">Pengeluaran</a>
  <a href="#" onclick="w3_close()" class="w3-bar-item w3-button">Kategori</a>
  <a href="#" onclick="w3_close()" class="w3-bar-item w3-button">Laporan Keuangan</a>
</nav>

<!-- Top menu -->
<div class="w3-top">
  <div class="w3-white w3-xlarge" style="max-width:1200px;margin:auto">
    <div class="w3-button w3-padding-16 w3-left" onclick="w3_open()">☰</div>
    <div class="w3-right w3-padding-16"><a href="proses/logout.php">Logout</a></div>
    <div class="w3-center w3-padding-16">Pengelolaan Keuangan</div>
  </div>
</div>
  
<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">	
Pendapatan Pengeluaran Laporan
<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>

</body>
</html>
