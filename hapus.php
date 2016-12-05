<?php ob_start();
include "koneksi.php";

$NIM=$_POST['NIM'];

mysql_query("DELETE FROM data WHERE NIM='$NIM'") or die (mysql_error());

header("location:http://localhost/PEMWEB/template/index.php?page=tabel");
?>