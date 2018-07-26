<?php
include_once("proses/include/koneksi.php");
$resulti1 = mysqli_query($db, "SELECT * FROM pendapatan where date between '2018-01-00' and '2018-01-31'");
$resulto1 = mysqli_query($db, "SELECT * FROM pendapatan where date between '2018-01-00' and '2018-01-31'");

$resulti2 = mysqli_query($db, "SELECT * FROM pendapatan where date between '2018-02-00' and '2018-02-30'");
$resulto2 = mysqli_query($db, "SELECT * FROM pendapatan where date between '2018-02-00' and '2018-02-30'");

$resulti3 = mysqli_query($db, "SELECT * FROM pendapatan where date between '2018-03-00' and '2018-03-31'");
$resulto3 = mysqli_query($db, "SELECT * FROM pendapatan where date between '2018-03-00' and '2018-03-31'");

$resulti4 = mysqli_query($db, "SELECT * FROM pendapatan where date between '2018-04-00' and '2018-04-30'");
$resulto4 = mysqli_query($db, "SELECT * FROM pendapatan where date between '2018-04-00' and '2018-04-30'");

$resulti5 = mysqli_query($db, "SELECT * FROM pendapatan where date between '2018-05-00' and '2018-05-31'");
$resulto5 = mysqli_query($db, "SELECT * FROM pendapatan where date between '2018-05-00' and '2018-05-31'");

$resulti6 = mysqli_query($db, "SELECT * FROM pendapatan where date between '2018-06-00' and '2018-06-30'");
$resulto6 = mysqli_query($db, "SELECT * FROM pendapatan where date between '2018-06-00' and '2018-06-30'");

$resulti7 = mysqli_query($db, "SELECT * FROM pendapatan where date between '2018-07-00' and '2018-07-31'");
$resulto7 = mysqli_query($db, "SELECT * FROM pendapatan where date between '2018-07-00' and '2018-07-31'");

$resulti8 = mysqli_query($db, "SELECT * FROM pendapatan where date between '2018-08-00' and '2018-08-30'");
$resulto8 = mysqli_query($db, "SELECT * FROM pendapatan where date between '2018-08-00' and '2018-08-30'");

$resulti9 = mysqli_query($db, "SELECT * FROM pendapatan where date between '2018-09-00' and '2018-09-31'");
$resulto9 = mysqli_query($db, "SELECT * FROM pendapatan where date between '2018-09-00' and '2018-09-31'");

$resulti10 = mysqli_query($db, "SELECT * FROM pendapatan where date between '2018-10-00' and '2018-10-30'");
$resulto10 = mysqli_query($db, "SELECT * FROM pendapatan where date between '2018-10-00' and '2018-10-30'");

$resulti11 = mysqli_query($db, "SELECT * FROM pendapatan where date between '2018-11-00' and '2018-11-31'");
$resulto11 = mysqli_query($db, "SELECT * FROM pendapatan where date between '2018-11-00' and '2018-11-31'");

$resulti12 = mysqli_query($db, "SELECT * FROM pendapatan where date between '2018-12-00' and '2018-12-30'");
$resulto12 = mysqli_query($db, "SELECT * FROM pendapatan where date between '2018-12-00' and '2018-12-30'");
?>
<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="UTF-8">
	<title>Laporan</title>  
	<link rel="stylesheet" href="css/kategori_style.css">
</head>
<body><div class="scroller">
<h1>Januari</h1>
  <table id="customers">
  <tr>
	<th>Pemasukan</th>
  </tr>
  <tr>
    <th>Kategori</th>
    <th>Jumlah</th>
	<th>Date</th>
  </tr>
  <?php
  while($row = mysqli_fetch_array($resulti1)) {
		echo "<tr>";
        echo "<td>".$row['kategori']."</td>"; 
		echo "<td>".$row['jumlah']."</td>";
		echo "<td>".$row['date']."</td>";
		echo "</tr>";
		}
    ?>
</table><br>
<table id="customers">
  <tr>
	<th>Pengeluaran</th>
  </tr>
  <tr>
    <th>Kategori</th>
    <th>Jumlah</th>
	<th>Date</th>
  </tr>
  <?php
  while($row = mysqli_fetch_array($resulto1)) {
		echo "<tr>";
        echo "<td>".$row['kategori']."</td>"; 
		echo "<td>".$row['jumlah']."</td>";
		echo "<td>".$row['date']."</td>";
		echo "</tr>";
		}
    ?>
</table> <br><br>

<h1>Februari</h1>
  <table id="customers">
  <tr>
	<th>Pemasukan</th>
  </tr>
  <tr>
    <th>Kategori</th>
    <th>Jumlah</th>
	<th>Date</th>
  </tr>
  <?php
  while($row = mysqli_fetch_array($resulti2)) {
		echo "<tr>";
        echo "<td>".$row['kategori']."</td>"; 
		echo "<td>".$row['jumlah']."</td>";
		echo "<td>".$row['date']."</td>";
		echo "</tr>";
		}
    ?>
</table><br>
<table id="customers">
  <tr>
	<th>Pengeluaran</th>
  </tr>
  <tr>
    <th>Kategori</th>
    <th>Jumlah</th>
	<th>Date</th>
  </tr>
  <?php
  while($row = mysqli_fetch_array($resulto2)) {
		echo "<tr>";
        echo "<td>".$row['kategori']."</td>"; 
		echo "<td>".$row['jumlah']."</td>";
		echo "<td>".$row['date']."</td>";
		echo "</tr>";
		}
    ?>
</table> <br><br>

<h1>Maret</h1>
  <table id="customers">
  <tr>
	<th>Pemasukan</th>
  </tr>
  <tr>
    <th>Kategori</th>
    <th>Jumlah</th>
	<th>Date</th>
  </tr>
  <?php
  while($row = mysqli_fetch_array($resulti3)) {
		echo "<tr>";
        echo "<td>".$row['kategori']."</td>"; 
		echo "<td>".$row['jumlah']."</td>";
		echo "<td>".$row['date']."</td>";
		echo "</tr>";
		}
    ?>
</table><br>
<table id="customers">
  <tr>
	<th>Pengeluaran</th>
  </tr>
  <tr>
    <th>Kategori</th>
    <th>Jumlah</th>
	<th>Date</th>
  </tr>
  <?php
  while($row = mysqli_fetch_array($resulto3)) {
		echo "<tr>";
        echo "<td>".$row['kategori']."</td>"; 
		echo "<td>".$row['jumlah']."</td>";
		echo "<td>".$row['date']."</td>";
		echo "</tr>";
		}
    ?>
</table> <br><br>

<h1>April</h1>
  <table id="customers">
  <tr>
	<th>Pemasukan</th>
  </tr>
  <tr>
    <th>Kategori</th>
    <th>Jumlah</th>
	<th>Date</th>
  </tr>
  <?php
  while($row = mysqli_fetch_array($resulti4)) {
		echo "<tr>";
        echo "<td>".$row['kategori']."</td>"; 
		echo "<td>".$row['jumlah']."</td>";
		echo "<td>".$row['date']."</td>";
		echo "</tr>";
		}
    ?>
</table><br>
<table id="customers">
  <tr>
	<th>Pengeluaran</th>
  </tr>
  <tr>
    <th>Kategori</th>
    <th>Jumlah</th>
	<th>Date</th>
  </tr>
  <?php
  while($row = mysqli_fetch_array($resulto4)) {
		echo "<tr>";
        echo "<td>".$row['kategori']."</td>"; 
		echo "<td>".$row['jumlah']."</td>";
		echo "<td>".$row['date']."</td>";
		echo "</tr>";
		}
    ?>
</table> <br><br>

<h1>Mei</h1>
  <table id="customers">
  <tr>
	<th>Pemasukan</th>
  </tr>
  <tr>
    <th>Kategori</th>
    <th>Jumlah</th>
	<th>Date</th>
  </tr>
  <?php
  while($row = mysqli_fetch_array($resulti5)) {
		echo "<tr>";
        echo "<td>".$row['kategori']."</td>"; 
		echo "<td>".$row['jumlah']."</td>";
		echo "<td>".$row['date']."</td>";
		echo "</tr>";
		}
    ?>
</table><br>
<table id="customers">
  <tr>
	<th>Pengeluaran</th>
  </tr>
  <tr>
    <th>Kategori</th>
    <th>Jumlah</th>
	<th>Date</th>
  </tr>
  <?php
  while($row = mysqli_fetch_array($resulto5)) {
		echo "<tr>";
        echo "<td>".$row['kategori']."</td>"; 
		echo "<td>".$row['jumlah']."</td>";
		echo "<td>".$row['date']."</td>";
		echo "</tr>";
		}
    ?>
</table> <br><br>

<h1>Juni</h1>
  <table id="customers">
  <tr>
	<th>Pemasukan</th>
  </tr>
  <tr>
    <th>Kategori</th>
    <th>Jumlah</th>
	<th>Date</th>
  </tr>
  <?php
  while($row = mysqli_fetch_array($resulti6)) {
		echo "<tr>";
        echo "<td>".$row['kategori']."</td>"; 
		echo "<td>".$row['jumlah']."</td>";
		echo "<td>".$row['date']."</td>";
		echo "</tr>";
		}
    ?>
</table><br>
<table id="customers">
  <tr>
	<th>Pengeluaran</th>
  </tr>
  <tr>
    <th>Kategori</th>
    <th>Jumlah</th>
	<th>Date</th>
  </tr>
  <?php
  while($row = mysqli_fetch_array($resulto6)) {
		echo "<tr>";
        echo "<td>".$row['kategori']."</td>"; 
		echo "<td>".$row['jumlah']."</td>";
		echo "<td>".$row['date']."</td>";
		echo "</tr>";
		}
    ?>
</table> <br><br>

<h1>July</h1>
  <table id="customers">
  <tr>
	<th>Pemasukan</th>
  </tr>
  <tr>
    <th>Kategori</th>
    <th>Jumlah</th>
	<th>Date</th>
  </tr>
  <?php
  while($row = mysqli_fetch_array($resulti7)) {
		echo "<tr>";
        echo "<td>".$row['kategori']."</td>"; 
		echo "<td>".$row['jumlah']."</td>";
		echo "<td>".$row['date']."</td>";
		echo "</tr>";
		}
    ?>
</table><br>
<table id="customers">
  <tr>
	<th>Pengeluaran</th>
  </tr>
  <tr>
    <th>Kategori</th>
    <th>Jumlah</th>
	<th>Date</th>
  </tr>
  <?php
  while($row = mysqli_fetch_array($resulto7)) {
		echo "<tr>";
        echo "<td>".$row['kategori']."</td>"; 
		echo "<td>".$row['jumlah']."</td>";
		echo "<td>".$row['date']."</td>";
		echo "</tr>";
		}
    ?>
</table> <br><br>

<h1>Agustus</h1>
  <table id="customers">
  <tr>
	<th>Pemasukan</th>
  </tr>
  <tr>
    <th>Kategori</th>
    <th>Jumlah</th>
	<th>Date</th>
  </tr>
  <?php
  while($row = mysqli_fetch_array($resulti8)) {
		echo "<tr>";
        echo "<td>".$row['kategori']."</td>"; 
		echo "<td>".$row['jumlah']."</td>";
		echo "<td>".$row['date']."</td>";
		echo "</tr>";
		}
    ?>
</table><br>
<table id="customers">
  <tr>
	<th>Pengeluaran</th>
  </tr>
  <tr>
    <th>Kategori</th>
    <th>Jumlah</th>
	<th>Date</th>
  </tr>
  <?php
  while($row = mysqli_fetch_array($resulto8)) {
		echo "<tr>";
        echo "<td>".$row['kategori']."</td>"; 
		echo "<td>".$row['jumlah']."</td>";
		echo "<td>".$row['date']."</td>";
		echo "</tr>";
		}
    ?>
</table> <br><br>

<h1>September</h1>
  <table id="customers">
  <tr>
	<th>Pemasukan</th>
  </tr>
  <tr>
    <th>Kategori</th>
    <th>Jumlah</th>
	<th>Date</th>
  </tr>
  <?php
  while($row = mysqli_fetch_array($resulti9)) {
		echo "<tr>";
        echo "<td>".$row['kategori']."</td>"; 
		echo "<td>".$row['jumlah']."</td>";
		echo "<td>".$row['date']."</td>";
		echo "</tr>";
		}
    ?>
</table><br>
<table id="customers">
  <tr>
	<th>Pengeluaran</th>
  </tr>
  <tr>
    <th>Kategori</th>
    <th>Jumlah</th>
	<th>Date</th>
  </tr>
  <?php
  while($row = mysqli_fetch_array($resulto9)) {
		echo "<tr>";
        echo "<td>".$row['kategori']."</td>"; 
		echo "<td>".$row['jumlah']."</td>";
		echo "<td>".$row['date']."</td>";
		echo "</tr>";
		}
    ?>
</table> <br><br>

<h1>Oktober</h1>
  <table id="customers">
  <tr>
	<th>Pemasukan</th>
  </tr>
  <tr>
    <th>Kategori</th>
    <th>Jumlah</th>
	<th>Date</th>
  </tr>
  <?php
  while($row = mysqli_fetch_array($resulti10)) {
		echo "<tr>";
        echo "<td>".$row['kategori']."</td>"; 
		echo "<td>".$row['jumlah']."</td>";
		echo "<td>".$row['date']."</td>";
		echo "</tr>";
		}
    ?>
</table><br>
<table id="customers">
  <tr>
	<th>Pengeluaran</th>
  </tr>
  <tr>
    <th>Kategori</th>
    <th>Jumlah</th>
	<th>Date</th>
  </tr>
  <?php
  while($row = mysqli_fetch_array($resulto10)) {
		echo "<tr>";
        echo "<td>".$row['kategori']."</td>"; 
		echo "<td>".$row['jumlah']."</td>";
		echo "<td>".$row['date']."</td>";
		echo "</tr>";
		}
    ?>
</table> <br><br>

<h1>November</h1>
  <table id="customers">
  <tr>
	<th>Pemasukan</th>
  </tr>
  <tr>
    <th>Kategori</th>
    <th>Jumlah</th>
	<th>Date</th>
  </tr>
  <?php
  while($row = mysqli_fetch_array($resulti11)) {
		echo "<tr>";
        echo "<td>".$row['kategori']."</td>"; 
		echo "<td>".$row['jumlah']."</td>";
		echo "<td>".$row['date']."</td>";
		echo "</tr>";
		}
    ?>
</table><br>
<table id="customers">
  <tr>
	<th>Pengeluaran</th>
  </tr>
  <tr>
    <th>Kategori</th>
    <th>Jumlah</th>
	<th>Date</th>
  </tr>
  <?php
  while($row = mysqli_fetch_array($resulto11)) {
		echo "<tr>";
        echo "<td>".$row['kategori']."</td>"; 
		echo "<td>".$row['jumlah']."</td>";
		echo "<td>".$row['date']."</td>";
		echo "</tr>";
		}
    ?>
</table> <br><br>

<h1>Desember</h1>
  <table id="customers">
  <tr>
	<th>Pemasukan</th>
  </tr>
  <tr>
    <th>Kategori</th>
    <th>Jumlah</th>
	<th>Date</th>
  </tr>
  <?php
  while($row = mysqli_fetch_array($resulti12)) {
		echo "<tr>";
        echo "<td>".$row['kategori']."</td>"; 
		echo "<td>".$row['jumlah']."</td>";
		echo "<td>".$row['date']."</td>";
		echo "</tr>";
		}
    ?>
</table><br>
<table id="customers">
  <tr>
	<th>Pengeluaran</th>
  </tr>
  <tr>
    <th>Kategori</th>
    <th>Jumlah</th>
	<th>Date</th>
  </tr>
  <?php
  while($row = mysqli_fetch_array($resulto12)) {
		echo "<tr>";
        echo "<td>".$row['kategori']."</td>"; 
		echo "<td>".$row['jumlah']."</td>";
		echo "<td>".$row['date']."</td>";
		echo "</tr>";
		}
    ?>
</table> <br><br> </div>

	<script src='js/jqueryindex.min.js'></script>
    <script  src="js/index.js"></script>
	<script src="js/jquery.min.js"></script>
</body>
</html>