<?php
include_once("proses/include/koneksi.php");
$result = mysqli_query($db, "SELECT * FROM kategori_pendapatan ORDER BY id ASC");
?>
<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="UTF-8">
	<title>Kategori</title>  
	<link rel="stylesheet" href="css/kategori_style.css">
</head>
<body>
<h3>Pendapatan</h3>
<hr><br>
  <div class="form">
    <form class="register-form" method="post" action="proses/tambah_pendapatan.php">
      <input type="text" placeholder="Kategori" name="kategori" required />
      <button>tambah</button>
    </form>
  </div>
  <table id="customers">
  <tr>
    <th>No</th>
    <th>Kategori</th>
    <th>Action</th>
  </tr>
  <?php
  $no = 1;
  while($user_data = mysqli_fetch_array($result)) {         
		echo "<tr>";
        echo "<td>".$no."</td>";
        echo "<td>".$user_data['kategori']."</td>";   
        echo "<td><a href='proses/edit_pendapatan.php?id=$user_data[id]'>Edit</a> | <a href='proses/delete_pendapatan.php?id=$user_data[id]' onClick=\"return confirm('Apa anda yakin?')\">Delete</a></td></tr>";
    $no++; 
	}
    ?>
</table>
	<script src='js/jqueryindex.min.js'></script>
    <script  src="js/index.js"></script>
</body>
</html>