<?php

	include("../../../lib_db.php");
	include("../../../util.php");

	if(isset($_POST['functionname']))
	{
		$functionname = $_POST['functionname'];

		if ($functionname == "xoancc")
		{
			$table = "nhacungcap";
			$id = $_POST['id'];
			$data['display_ncc'] = "none";
			$kq = exec_update(data_to_sql_update($table,$data,"id_ncc = '".$id."'"));
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
		$qr = "SELECT * FROM nhacungcap where display_ncc = '$display';" ;
		$data =  select_list($qr);
	}



?>