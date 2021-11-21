<?php
	include("../../../lib_db.php");
	include("../../../util.php");


	$table = "nhacungcap";
	$data['ten_ncc'] = $_POST['tenncc'];
	$data['Email_ncc'] = $_POST['email'];
	$data['SDT_ncc'] = $_POST['sdt'];
	$data['diachi_ncc'] = $_POST['diachi'];
	$data['display_ncc'] = "block";


	if (select_one("SELECT * FROM nhacungcap where SDT_ncc = '".$_POST['sdt']."' or Email_ncc = '".$_POST['email']."'")=="") {
		

		$truyvan = data_to_sql_insert($table,$data);
		$kq = exec_update($truyvan);		
		if($kq == 1) {
			
			echo "Thành Công";

			
		}	
		else {
			echo "Thất bại";
		}
	}
	else
	{
		echo "Nhà cung cấp đã tồn tại";
	}

?>