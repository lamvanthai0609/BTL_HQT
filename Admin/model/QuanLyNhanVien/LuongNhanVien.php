<?php
	include("../../../lib_db.php");


	// UPDATE luong SET tongtimelam = HOUR(datetimeend_lg)-HOUR(datetimestart_lg)
	// UPDATE luong SET tongtien = tongtimelam * luong1h + thuong - phat;
	if (isset($_POST['id_nv'])) {

		$rerus =  thongtinluongnv($_POST['id_nv']);
		echo $rerus;
		exit();

		
	}
	elseif (isset($_POST['datasearch'])) {

		
		$sql = "SELECT id_nv,SUM(tongtimelam) as tongtime,SUM(tongtien) as tongtien 
				from luong 
				group by id_nv having id_nv in (SELECT id_nv From nhanvien where ten_nv like '%".$_POST['datasearch']."%')";
		$data = select_list($sql);
	}
	else
	{
		$sql = "SELECT id_nv,SUM(tongtimelam) as tongtime,SUM(tongtien) as tongtien from luong group by id_nv ";
		$data = select_list($sql);
	}




	function thongtinluongnv($id)
	{
		
		$sql = "SELECT * from luong where id_nv = '".$id."'";
		$data = select_list($sql);


		$chuoi =	'<table class="table">
                      	<thead class=" text-primary">
                        	<th> Giờ bắt đầu </th>
                        	<th> Giờ kết thúc </th>
                        	<th> Thưởng </th>
                        	<th> Phạt </th>
                        	<th class="text-right"> Tổng Tiền </th>
                      	</thead>
                      	<tbody id="">';
                        
                      	
		foreach ($data as $key) {
			  $chuoi .='<tr>
							<td> '.$key['datetimestart_lg'].' </td>
							<td> '.$key['datetimeend_lg'].' </td>
							<td> '.$key['thuong'].' </td>
							<td> '.$key['phat'].' </td>
							<td class="text-right"> '.number_format($key['tongtien']).'.₫ </td>
						</tr>';
		}

		$chuoi .= '</tbody>
                    </table>';
		return $chuoi;
	}

?>