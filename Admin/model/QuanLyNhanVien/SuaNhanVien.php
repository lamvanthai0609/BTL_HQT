
<?php
	include("../../../lib_db.php");
	include("../../../util.php");

	if (isset($_POST['email']))
	{
		$table = "nhanvien";
		$id_nv = $_POST['id_nv'];
		$data['ten_nv'] = $_POST['lastname']." ".$_POST['firstname'];
		$data['anh_nv'] = upload_file_by_name('img_file');
		$data['ngaysinh_nv'] = $_POST['ngaysinh'];
		$data['gioitinh_nv'] = $_POST['gioitinh'];
		$data['Email_nv'] = $_POST['email'];
		$data['SDT_nv'] = $_POST['sdt'];
		$data['chucvu_nv'] = $_POST['chucvu'];
		$data['diachi_nv'] = $_POST['diachi'];
		$data['display_nv'] = $_POST['display'];

		$rs = exec_update(data_to_sql_update($table,$data,"id_nv = '".$id_nv."'"));
		if($_POST['password'] != "")
		{
			$data_login['password'] = $_POST['password'];
			exec_update(data_to_sql_update("login",$data_login,"id_nv = '".$id_nv."'"));
		}

		if($rs == 1){
			echo "Thay Đổi Thành Công";
		}
		
	}
	


	if (isset($_POST['id_nv'])) {
		$sql = "SELECT * From nhanvien where id_nv = '".$_POST['id_nv']."'";
		$data = select_one($sql);

		$data_login = select_one("SELECT * FROM login where id_nv = '".$_POST['id_nv']."'");

	}
?>