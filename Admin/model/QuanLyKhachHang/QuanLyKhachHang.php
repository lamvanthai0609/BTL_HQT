<?php
	 include("../../../lib_db.php");

	
	 if (isset($_POST['datasearch'])) {

	 	$display = $_POST['displaysl'];
	 	$sql = "SELECT * from khanhhang where ten_kh like '%".$_POST['datasearch']."%' and display_kh = '".$display."'";
	 	$data = select_list($sql);
	 }
	 elseif (isset($_POST['display'])) {
	 	$display = $_POST['display'];
	 	$sql = "SELECT * from khanhhang where display_kh = '".$display."'";
	 	$data = select_list($sql);
	 }
	 elseif (isset($_POST['id_kh'])) {

	 	$display = $_POST['displayid'];
	 	if ($display == "block") {

	 		$table = "khanhhang";
	 		$data['display_kh'] = "none";
	 		$where = "id_kh = '".$_POST['id_kh']."'";
	 		$kq = exec_update(data_to_sql_update($table,$data,$where));
	 		if ($kq == 1) {
	 			echo "Thành công";
	 			exit();
	 		}

	 	}
	 	else
	 	{
	 		$table = "khanhhang";
	 		$data['display_kh'] = "block";
	 		$where = "id_kh = '".$_POST['id_kh']."'";
	 		$kq = exec_update(data_to_sql_update($table,$data,$where));
	 		if ($kq == 1) {
	 			echo "Thành công";
	 			exit();
	 		}
	 	}
	 }
	 else
	 {
	 	$display = "block";
	 	$sql = "SELECT * from khanhhang where display_kh = '".$display."'";
	 	$data = select_list($sql);
	 }




	 
?>