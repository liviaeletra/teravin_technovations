<?php
session_start();
include ("connection.php");

$nama = $_POST['nama'];
$hp = $_POST['hp'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];

$query = mysql_query("insert into teravin_technovations(NAMA, NO_HP, ALAMAT, EMAIL) 
				values('$nama', '$hp', '$alamat', '$email')");

if ($query) {
		header("location:../index_isi.php?msg=Your data has been added successfully!");}
else {
echo "<br><a href='../index.php?msg=Wrong'>Back</a><br><br>";
		die(mysql_error());
}
?>