<?php
include_once("proses/include/koneksi.php");
$result = mysqli_query($db, "SELECT * FROM pendapatan ORDER BY id ASC");
$result1 = mysqli_query($db, "SELECT * FROM kategori_pendapatan");
?>
<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="UTF-8">
	<title>Pendapatan</title>  
	<link rel="stylesheet" href="css/kategori_style.css">
</head>
<body>
  <div class="form">
    <form class="register-form" method="post" action="proses/tambah_income.php">
	  <select name="kategori">
					<?php while($row1 = mysqli_fetch_array($result1)):;?>
					<option value="<?php echo $row1[1];?>"><?php echo $row1[1];?></option>
					<?php endwhile;?>
	  <input type="number" placeholder="Jumlah" name="jumlah" required />
	  <input type="text" placeholder="Keterangan" name="keterangan" required />
      <button>tambah</button>
    </form>
  </div>
  <table id="customers">
  <tr>
    <th>No</th>
    <th>Kategori</th>
    <th>Jumlah</th>
	<th>Keterangan</th>
	<th>Date</th>
	<th>Action</th>
  </tr>
  <?php
  $no = 1;
  while($user_data = mysqli_fetch_array($result)) {         
		echo "<tr>";
        echo "<td>".$no."</td>";
        echo "<td>".$user_data['kategori']."</td>"; 
		echo "<td>".$user_data['jumlah']."</td>";
		echo "<td>".$user_data['keterangan']."</td>";
		echo "<td>".$user_data['date']."</td>";		
        echo "<td><a href='proses/edit_income.php?id=$user_data[id]'>Edit</a> | <a href='proses/delete_income.php?id=$user_data[id]' onClick=\"return confirm('Apa anda yakin?')\">Delete</a></td></tr>";
    $no++; 
	}
    ?>
</table>
	<script src='js/jqueryindex.min.js'></script>
    <script  src="js/index.js"></script>
</body>
</html>