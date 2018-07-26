<?php
   require_once("include/koneksi.php");
   $kategori = $_POST['kategori'];	
   $sql = "SELECT * FROM kategori_pengeluaran WHERE kategori = '$kategori'";
   $query = $db->query($sql);
   if($query->num_rows != 0) {
     echo "<div align='center'>Kategori sudah terdaftar! <a href='http://localhost/individu/dashboard.php'>Back</a></div>";
   } else {
     if(!$kategori) {
       echo "<div align='center'>Data masih kosong! <a href='http://localhost/individu/dashboard.php'>Back</a>";
     } else {
       $data = "INSERT INTO kategori_pengeluaran VALUES (NULL,'$kategori')";
       $simpan = $db->query($data);
       if($simpan) {
         echo ("<script LANGUAGE='JavaScript'>
    window.alert('Data berhasil dimasukan!');
    window.location.href='http://localhost/individu/dashboard.php';
    </script>");
       } else {
         echo ("<script LANGUAGE='JavaScript'>
    window.alert('Data gagal dimasukan!');
    window.location.href='http://localhost/individu/dashboard.php';
    </script>");
       }
     }
   }
?>