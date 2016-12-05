<?php ob_start();
include "koneksi.php";

$NIM=$_POST['NIM'];
$Nama=$_POST['Nama'];
$Jurusan=$_POST['Jurusan'];
$Prodi=$_POST['Prodi'];

mysql_query("UPDATE data SET Nama='$Nama',Jurusan='$Jurusan',Prodi='$Prodi' WHERE NIM='$NIM'");

header("location:http://localhost/PEMWEB/template/index.php?page=tabel");
?>