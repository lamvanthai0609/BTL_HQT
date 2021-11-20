<?php



include("../../../lib_db.php");
include("../../../util.php");


$table = "nhanvien";
$data['id_nv'] = "NV".(select_one("SELECT COUNT(id_nv) as id from nhanvien")['id']+1);
$data['ten_nv'] = $_POST['lastname']." ".$_POST['firstname'];
$data['anh_nv'] = upload_file_by_name('img_file');
$data['ngaysinh_nv'] = $_POST['ngaysinh'];
$data['gioitinh_nv'] = $_POST['gioitinh'];
$data['Email_nv'] = $_POST['email'];
$data['SDT_nv'] = $_POST['sdt'];
$data['chucvu_nv'] = $_POST['chucvu'];
$data['diachi_nv'] = $_POST['diachi'];
$data['display_nv'] = $_POST['display'];
$data_login['id_login'] = "";
$data_login['username'] = $_POST['username'];


if (select_one("SELECT * FROM login where username = '".$_POST['username']."'")=="")
{
	$data_login['password'] = md5($_POST['password']);
	$data_login['chucvu'] = "NhanVien";
	$data_login['id_nv'] = $data['id_nv'];
	$truyvan = data_to_sql_insert($table,$data);
	$kq = exec_update($truyvan);		
	if($kq == 1) {
		$kq2 = exec_update(data_to_sql_insert("login",$data_login));
		if($kq2 == 1)
		{
			echo "Thành Công";

		}
	}	
	else {
		echo "Thất bại";
	}


}
else
{
	echo "Tài khoản đã tồn tại";
}




?>


