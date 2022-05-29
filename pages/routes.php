<?php
if(isset($_GET['page'])){
	$page = $_GET ['page'];
	switch($page){
		case '':
			include "dashboard.php";
			break;
		case 'karyawan':
			include "karyawan/karyawan.php";
			break;
		case 'karyawancreate':
			include "karyawan/karyawancreate.php"; 
			break;
		case 'karyawanupdate':
			include "karyawan/karyawanupdate.php"; 
			break;
		case 'karyawandelete':
			include "karyawan/karyawandelete.php"; 
			break;
		case 'barang':
			include "barang/barang.php";
			break;
		case 'barangcreate':
			include "barang/barangcreate.php";
			break;
		case 'barangupdate':
			include "barang/barangupdate.php";
			break;
		case 'barangdelete':
			include "barang/barangdelete.php";
			break;
		default;
			include "dashboard.php";
			break;
	}
}else {
	include "dashboard.php";
}
?>