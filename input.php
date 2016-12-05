<?php ob_start();
include "koneksi.php";

$NIM=$_POST['NIM'];
$Nama=$_POST['Nama'];
$Jurusan=$_POST['Jurusan'];
$Prodi=$_POST['Prodi'];

mysql_query("INSERT INTO data(NIM, Nama, Jurusan, Prodi) VALUES ('$NIM','$Nama','$Jurusan','$Prodi')") or die (mysql_error());
header("location:http://localhost/PEMWEB/template/index.php?page=tabel");
 
    /*echo"<a href='index.php'>Input Lagi</a></br>";*/
?>