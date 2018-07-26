<?php
// include database connection file
include_once("include/koneksi.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$kategori=$_POST['kategori'];
	$jumlah=$_POST['jumlah'];
	$keterangan=$_POST['keterangan'];
	// update user data
	$result = mysqli_query($db, "UPDATE pengeluaran SET kategori='$kategori',jumlah='$jumlah',keterangan='$keterangan' WHERE id=$id");
	 if($result) {
         echo ("<script LANGUAGE='JavaScript'>
    window.alert('Data berhasil diupdate!');
    window.location.href='http://localhost/individu/dashboard.php';
 </script>");}
	// Redirect to homepage to display updated user in list
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($db, "SELECT * FROM pengeluaran WHERE id=$id");
$result1 = mysqli_query($db, "SELECT * FROM kategori_pengeluaran");

while($user_data = mysqli_fetch_array($result))
{
	$kategori = $user_data['kategori'];
	$jumlah = $user_data['jumlah'];
	$keterangan = $user_data['keterangan'];
	$date = $user_data['date'];
}
?>
<html>
<head>	
	<title>Edit Pengeluaran</title>
	<link rel="stylesheet" href="http://localhost/individu/css/kategori_style.css">
			<link rel="stylesheet" type="text/css" href="http://localhost/individu/css/jquery.jscrollpane.custom.css" />
		<link rel="stylesheet" type="text/css" href="http://localhost/individu/css/bookblock.css" />
		<link rel="stylesheet" type="text/css" href="http://localhost/individu/css/custom.css" />
		<script src="http://localhost/individu/js/modernizr.custom.79639.js"></script>
</head>
 
<body>
<div id="container" class="container">
	<div class="content">
	<div class="scroller">
	<h2>Pengeluaran</h2>
<hr><br>
  <div class="form">
    <form class="register-form" method="post" action="edit_expense.php">
	  <select name="kategori" value="<?php echo $kategori;?>">
					<?php while($row1 = mysqli_fetch_array($result1)):;?>
					<option value="<?php echo $row1[1];?>"><?php echo $row1[1];?></option>
					<?php endwhile;?>
	  <input type="number" placeholder="Jumlah" name="jumlah" value="<?php echo $jumlah;?>" required />
	  <input type="text" placeholder="Keterangan" name="keterangan" value="<?php echo $keterangan;?>" required />
	  <input type="date" placeholder="Date" name="date" value="<?php echo $date;?>" readonly />
	  <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
      <button name="update">update</button><a href="http://localhost/individu/dashboard.php">batal</a>
    </form>
  </div></div></div></div>
</body>
</html>