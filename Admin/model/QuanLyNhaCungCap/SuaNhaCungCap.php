
<?php
	include("../../../lib_db.php");
	include("../../../util.php");

	if (isset($_POST['email']))
	{
		$table = "nhacungcap";
		$id_ncc = $_POST['idncc'];
		$data['ten_ncc'] = $_POST['tenncc'];
		$data['Email_ncc'] = $_POST['email'];
		$data['SDT_ncc'] = $_POST['sdt'];
		$data['diachi_ncc'] = $_POST['diachi'];
		$data['display_ncc'] = $_POST['display'];

		$rs = exec_update(data_to_sql_update($table,$data,"id_ncc = '".$id_ncc."'"));
		if($rs == 1){
			echo "1";
		}
		else
		{
			echo "Thất bại";
		}
		
	}
	


	if (isset($_POST['id_nv'])) {
		$sql = "SELECT * From nhacungcap where id_ncc = '".$_POST['id_nv']."'";
		$data = select_one($sql);

		//$data_login = select_one("SELECT * FROM login where id_nv = '".$_POST['id_nv']."'");

	}
?>