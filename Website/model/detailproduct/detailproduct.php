<?php
	include("./lib_db.php"); 
   
    $datavote['vote'] = "0";
    $id = isset($_SESSION['id_kh']) ? $_SESSION['id_kh'] : '';
    
    $idsp = isset($_REQUEST['id_sp'])?$_REQUEST['id_sp']:'';
   
    $sql = "select * from sanpham where id_sp = 1";
    $data = select_one($sql);



    $lienquan = $data['theloai_sp'];
    $sql2 = "select * from sanpham where theloai_sp = '$lienquan' limit 4;";
    $data2= select_list($sql2);



    // $sqlevaluate = "select * from evaluate where idp = $idsp";
    // $evaluate = select_list($sqlevaluate);
   	
?>

