<?php
// include database connection file
include_once("include/koneksi.php");
 
// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$kategori=$_POST['kategori'];
	// update user data
	$result = mysqli_query($db, "UPDATE kategori_pendapatan SET kategori='$kategori' WHERE id=$id");
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
$result = mysqli_query($db, "SELECT * FROM kategori_pendapatan WHERE id=$id");
 
while($user_data = mysqli_fetch_array($result))
{
	$kategori = $user_data['kategori'];
}
?>
<html>
<head>	
	<title>Edit Kategori</title>
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
	<h2>Kategori</h2>
<h3>Pendapatan</h3>
<hr><br>
  <div class="form">
    <form class="register-form" method="post" action="edit_pendapatan.php">
      <input type="text" placeholder="Kategori" name="kategori" value="<?php echo $kategori;?>" required />
	  <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
      <button name="update">update</button><a href="http://localhost/individu/dashboard.php">batal</a>
    </form>
  </div></div></div></div>
</body>
</html>