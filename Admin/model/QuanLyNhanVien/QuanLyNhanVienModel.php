<?php

 include("../../../lib_db.php");

$display = "block";

if (isset($_POST['display'])) {
    $display = $_POST['display'];
	$qr = "SELECT * FROM nhanvien where display_nv = '$display';" ;
	$data =  select_list($qr);
}   
elseif (isset($_POST['datasearch'])) {
	$sql = "SELECT * from nhanvien where ten_nv like '%".$_POST['datasearch']."%'";
	$data = select_list($sql);
}
else{
	
	$qr = "SELECT * FROM nhanvien where display_nv = '$display';" ;
	$data =  select_list($qr);
} 


?> 