<?php
	
	include("../../../lib_db.php");

	$table = "khuyenmai";
	$data['id_km'] = "";
	$data['ten_km']= $_POST['ten_km'];
	$data['sotien_km']= $_POST['sotien_km'];
	$data['sotientoithieu']= $_POST['sotientoithieu'];
	$data['timestart']= $_POST['batdautime'];
	$data['timeend']= $_POST['timeend'];
	$data['soluong']= $_POST['soluong'];
	$data['tinhtrang']= "Notstarted";
	$kq = exec_update(data_to_sql_insert($table,$data));
	if ($kq == 1 ) {
		echo "Thành Công";
	}


?>