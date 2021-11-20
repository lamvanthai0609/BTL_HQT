 <?php

 include("../../../lib_db.php");

$display = "block";

if (isset($_POST['display'])) {
    $display = $_POST['display'];
	$qr = "SELECT * FROM nhacungcap where display_ncc = '$display';" ;
	$data =  select_list($qr);
}   
elseif (isset($_POST['datasearch'])) {
	$sql = "SELECT * from nhacungcap where ten_ncc like '%".$_POST['datasearch']."%'";
	$data = select_list($sql);
}
else{
	
	$qr = "SELECT * FROM nhacungcap where display_ncc = '$display';" ;
	$data =  select_list($qr);
} 


?> 