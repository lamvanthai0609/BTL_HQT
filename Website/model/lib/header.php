<?php
	include("./lib_db.php");
	$id_kh = isset($_SESSION['id_kh'])?$_SESSION['id_kh']:"";

	if($id_kh != "")
	{
		$sql_info_kh = "SELECT * from khanhhang where id_kh = '$id_kh'";
		$info_kh = select_one($sql_info_kh);
	}


	if(isset($_POST["logout"]))
    {
        unset($_SESSION['id_kh']);
        setcookie("username", "", time()-3600);
        setcookie("password", "", time()-3600);
        header("location:index.php");
    }
?>