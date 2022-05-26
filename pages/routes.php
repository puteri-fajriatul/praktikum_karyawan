<?php
if(isset($_GET['page'])){
	$page = $_GET ['page'];
	switch($page){
		case '':
			include "dashboard.php";
			break;
		case 'karyawan':
			include "karyawan.php";
			break;
		case 'karyawancreate':
			include "karyawancreate.php"; 
			break;
		case 'barang':
			include "barang.php";
			break;
		case 'barangcreate':
			include "barangcreate.php";
			break;
		default;
			include "dashboard.php";
			break;
	}
}else {
	include "dashboard.php";
}
?>