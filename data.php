<?php
include "koneksi.php";

if ($_SESSION['leveluser']=='1'){
	
}
if ($_SESSION['leveluser']=='2'){
	
}
if ($_SESSION['leveluser']=='3'){
	if($_GET['module']=="isi token"){
	include "data/isi_token.php";
	}
	else if($_GET['module']=="beli token"){
	include "data/beli_token.php";
	}
	else if($_GET['module']=="cek token"){
	include "data/cek_token.php";
	}
}
?>
	