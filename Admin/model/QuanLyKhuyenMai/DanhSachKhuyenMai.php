<?php
	 include("../../../lib_db.php");

	$tinhtrang = "Notstarted";

	if (isset($_POST['tinhtrang'])) {


	    $tinhtrang = $_POST['tinhtrang'];
		$qr = "SELECT * FROM khuyenmai where tinhtrang = '$tinhtrang';" ;
		$data =  select_list($qr);
	}   
	elseif (isset($_POST['datasearch'])) {
		
		$tinhtrangmoi = $_POST['tinhtrangg'];
		$search = $_POST['datasearch'];
		
		// $sql = "SELECT * from khuyenmai where tinhtrang = '".$tinhtrang."' and ten_km like '%".$_POST['datasearch']."%'";
		
		$sql = "SELECT * from khuyenmai where tinhtrang = '$tinhtrangmoi' and ten_km like '%$search%'";
		

		$data = select_list($sql);
	}
	else{
		
		$qr = "SELECT * FROM khuyenmai where tinhtrang = '$tinhtrang';" ;
		$data =  select_list($qr);
	} 

	if (isset($_POST['functionname'])) {
		$datenow = $_POST['functionname'];
		
		$sql = "select * from khuyenmai where tinhtrang = 'Notstarted'";
		$datetime = select_list($sql);
		
		$datefmnow = date_format(new DateTime($datenow),"Y/m/d H:i:s");
		foreach ($datetime as $key) {
			
			$datefmstart = date_format(new DateTime($key['timestart']),"Y/m/d H:i:s");
			$datefmend = date_format(new DateTime($key['timeend']),"Y/m/d H:i:s");
			if ( $datefmnow >= $datefmstart and $datefmnow < $datefmend) {
				$update = "UPDATE khuyenmai set tinhtrang = 'Happenning' where id_km = ".$key['id_km'];
				exec_update($update);
				
			}
			
			
		}

		$datetime2 = select_list("select * from khuyenmai where tinhtrang = 'Happenning'");
		foreach ($datetime2 as $key) {
			
			$datefmend = date_format(new DateTime($key['timeend']),"Y/m/d H:i:s");
			if ($datefmnow >= $datefmend) {
				exec_update("UPDATE khuyenmai set tinhtrang = 'Finished' where id_km = ".$key['id_km']);
				
			}
	
		}
	}
	
?>