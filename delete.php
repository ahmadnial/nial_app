<?php
 // panggil file koneksi
 include "koneksi.php";
 
 //ambil data id dari parameter
 $IDMhsw=$_GET['id'];

 $sql="DELETE FROM Mhsw WHERE IDMhsw='$IDMhsw'";
 $query=sqlsrv_query($conn,$sql) or die(sqlsrv_errors());
 if ($query) {
  //redirect ke halaman index
  header("Location:index.php");
 }
 
?>