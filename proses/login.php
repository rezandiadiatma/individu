<?php
   session_start();
   require_once("include/koneksi.php");
   $email = $_POST['email'];
   $password = $_POST['password'];   
   $sql = "SELECT * FROM user WHERE email = '$email'";
   $query = $db->query($sql);
   $hasil = $query->fetch_assoc();
   if($query->num_rows == 0) {
     echo ("<script LANGUAGE='JavaScript'>
    window.alert('Email tidak terdaftar!');
    window.location.href='http://localhost/individu';
    </script>");
   } else {
     if($password <> $hasil['password']) {
       echo ("<script LANGUAGE='JavaScript'>
    window.alert('Password salah!');
    window.location.href='http://localhost/individu';
    </script>");
     } else {
       $_SESSION['id'] = $hasil['email'];
       header('location:http://localhost/individu/dashboard.php');
     }
   }
?>