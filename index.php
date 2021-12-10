<?php

	function show_404(){
	    header('HTTP/1.1 Not Found 404', true, 404);
	    require('404.php');
	    exit();
	}

	session_start();
	// $_SESSION['id_nv'] = "NV1";
	// $_SESSION['chucvu'] = "Admin";

	$controller = isset($_GET['controller'])?$_GET['controller']:"home";
	$action =  isset($_GET['action'])?$_GET['action']:"index";
	$file = 'Website/controllers/'.$controller.'/'.$action.'.php';
	if (file_exists($file)) {
	    require($file);
	} else {
	    show_404();
	}

?>