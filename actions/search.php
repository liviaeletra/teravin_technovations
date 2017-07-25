<?php
include("connection.php");
session_start();

$id = $_POST['search'];
$search = mysql_fetch_array(mysql_query("select * from teravin_technovations where NAMA like '%$id'"));

$nama= $search['NAMA'];
$email= $search['EMAIL'];
if ($id=="") {
	header("location:../index_isi.php");
	die(mysql_error());
}
else 
	{header("location:../index_isisearch.php?nama=$nama&email=$email");
	die(mysql_error());
} 
?>