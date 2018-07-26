<?php
include_once("proses/include/koneksi.php");
$result = mysqli_query($db, "SELECT SUM(jumlah) as total FROM pendapatan");
$result1 = mysqli_query($db, "SELECT SUM(jumlah) as total FROM pengeluaran");
$result2 = mysqli_query($db, "SELECT (SELECT SUM(jumlah) FROM pendapatan)-(SELECT SUM(jumlah) FROM pengeluaran) as total");
?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Aplikasi Pengelola Keuangan</title>
      <link rel="stylesheet" href="css/style_box.css">

  
</head>

<body>
      <div class="col-sm-4" style="width:25%;">
      <div class="tile green">
        <h3 class="title">Pendapatan</h3>
        <p><?php while($total = mysqli_fetch_array($result)) { echo "<td>".$total['total']."</td>";}?></p>
      </div>
    </div>
    <div class="col-sm-4" style="width:25%;">
      <div class="tile red">
        <h3 class="title">Pengeluaran</h3>
        <p><?php while($total = mysqli_fetch_array($result1)) { echo "<td>".$total['total']."</td>";}?></p>
      </div>
    </div>
    <div class="col-sm-4" style="width:25%;">
      <div class="tile blue">
        <h3 class="title">Saldo</h3>
        <p><?php while($total = mysqli_fetch_array($result2)) { echo "<td>".$total['total']."</td>";}?></p>
      </div>
    </div>
  
  

</body>

</html>