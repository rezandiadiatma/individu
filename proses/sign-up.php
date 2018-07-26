<?php
   require_once("include/koneksi.php");
   $nama = $_POST['nama'];
   $password = $_POST['password'];
   $email = $_POST['email']; 	
   $sql = "SELECT * FROM user WHERE email = '$email'";
   $query = $db->query($sql);
   if($query->num_rows != 0) {
     echo "<div align='center'>Email sudah terdaftar! <a href='http://localhost/individu'>Back</a></div>";
   } else {
     if(!$nama || !$password || !$email) {
       echo "<div align='center'>Masih ada data yang kosong! <a href='http://localhost/individu'>Back</a>";
     } else {
       $data = "INSERT INTO user VALUES (NULL,'$nama', '$password', '$email')";
       $simpan = $db->query($data);
       if($simpan) {
         echo ("<script LANGUAGE='JavaScript'>
    window.alert('Pendaftaran berhasil!');
    window.location.href='http://localhost/individu';
    </script>");
       } else {
         echo ("<script LANGUAGE='JavaScript'>
    window.alert('Proses gagal!');
    window.location.href='http://localhost/individu';
    </script>");
       }
     }
   }
?>