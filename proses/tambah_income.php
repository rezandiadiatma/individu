<?php
   require_once("include/koneksi.php");
   $kategori = $_POST['kategori'];
   $jumlah = $_POST['jumlah'];
   $keterangan = $_POST['keterangan'];
   $sql = "SELECT * FROM pendapatan WHERE kategori = '$kategori' and jumlah = '$jumlah' and keterangan = '$keterangan'";
   $query = $db->query($sql);
   /*if($query->num_rows != 0) {
     echo "<div align='center'>Kategori sudah terdaftar! <a href='http://localhost/individu/dashboard.php'>Back</a></div>";
   } else {*/
     if(!$jumlah) {
       echo "<div align='center'>Data masih kosong! <a href='http://localhost/individu/dashboard.php'>Back</a>";
     } else {
       $data = "INSERT INTO pendapatan (id,kategori,jumlah,keterangan,date) VALUES (NULL,'$kategori','$jumlah','$keterangan',now())";
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
?>