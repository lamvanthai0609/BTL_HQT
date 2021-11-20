<?php
	include("../../../lib_db.php");
	include("../../../util.php");

	if(isset($_POST['functionname']))
	{
		$functionname = $_POST['functionname'];

		if ($functionname == "xoanv")
		{
			$table = "nhanvien";
			$id = $_POST['id'];
			$data['display_nv'] = "none";
			$kq = exec_update(data_to_sql_update($table,$data,"id_nv = '".$id."'"));
			if($kq == 1)
			{
				echo "Thành Công";
			}
			else
			{
				echo "Thất bại";
			}

		}

	}
	else
	{
		$display = "block";
		$qr = "SELECT * FROM nhanvien where display_nv = '$display';" ;
		$data =  select_list($qr);
	}
?>