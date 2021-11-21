<?php


	include("../../../lib_db.php");
	if (isset($_POST['id_km'])) {
		$sql = "SELECT * From khuyenmai where id_km = '".$_POST['id_km']."'";
		$data = select_one($sql);



	}
	if (isset($_POST['id_kmm'])) {
		


		$table = "khuyenmai";
		$id_km = $_POST['id_kmm'];
		$data['ma_km']= $_POST['ma_km'];
		$data['ten_km']= $_POST['ten_km'];
		$data['sotien_km']= $_POST['sotien_km'];
		$data['sotientoithieu']= $_POST['sotientoithieu'];
		if (isset($_POST['batdautime'])) {
			$data['timestart']= $_POST['batdautime'];
		}
		
		$data['timeend']= $_POST['timeend'];
		$data['soluong']= $_POST['soluong'];
		
		$where = 'id_km = '.$id_km;

		$sql = data_to_sql_update($table,$data,$where);
		
		$kq = exec_update($sql);
		if ($kq == 1 ) {
			echo "Thành Công";
		}
	}
?>