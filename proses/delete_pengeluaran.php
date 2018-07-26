<?php
// include database connection file
include_once("include/koneksi.php");
 
// Get id from URL to delete that user
$id = $_GET['id'];
 
// Delete user row from table based on given id
$result = mysqli_query($db, "DELETE FROM kategori_pengeluaran WHERE id=$id");
 if($result) {
         echo ("<script LANGUAGE='JavaScript'>
    window.alert('Data berhasil dihapus!');
    window.location.href='http://localhost/individu/dashboard.php';
 </script>");}
// After delete redirect to Home, so that latest user list will be displayed.
?>
