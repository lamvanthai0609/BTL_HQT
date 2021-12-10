<?php
	include("./lib_db.php");
	if(isset($_POST['login_btn']))
	{
		$username = $_REQUEST['username'];
		$password = md5($_REQUEST['password']);
		if($username != "" && $password !="")
		{
			$checkusenamepass = "select * from login where username = '$username' and password = '$password'";
			$data = select_one($checkusenamepass);

           
			if($data != "")
			{

				setcookie("username","$username",time()+3600);
				setcookie("password","$password",time()+3600);
				if($data['chucvu'] == "KhachHang")
				{
					$_SESSION['id_kh']=$data['id_kh'];
					header("location:index.php");
				}
				else{
					$_SESSION['id_nv']=$data['id_nv'];
					$_SESSION['chucvu'] = $data['chucvu'];
					header("location:admin.php");
				}
				
				
			}
			else
			{
				$erro = "Thông tin tài khoản mật khẩu không chính xác";
			}
		}
		else
		{
			$erro = "Bạn chưa nhập đủ thông tin";
		}
	}

	if(isset($_POST['signup']))
	{
		$username = $_REQUEST['username'];
		$password = md5($_REQUEST['password']);
		$fullname = $_REQUEST['fullname'];
		$address = $_REQUEST['address'];
		$numberphone = $_REQUEST['numberphone'];
		$email = $_REQUEST['email'];
		$sex = $_REQUEST['sex'];
		$date = $_REQUEST['date'];
		$repass = md5($_REQUEST['repass']);
		$verify = $_REQUEST['verify'];
		if($username != "" && $password!="" && $fullname!=""&& $address!=""&& $numberphone!="" && $email!="" && $sex!="" && $date!="" && $repass!="")
		{
			if($password == $repass)
			{
				$check = "select * from login where username = '$username'";
				$datacheck = select_one($check);
				if(!isset($datacheck))
				{

					if(1==1)
					{
						$countid =  select_one("SELECT COUNT(id_kh) as countid from khanhhang");

						$tablesql = 'khanhhang';
						$data['id_kh']="KH".($countid['countid']+1);
						// $data['username']=$username;
						// $data['password']=$password;
						$data['ten_kh']=$fullname;
						$data['gioitinh_kh']=$sex;
						$data['ngaysinh_kh']=$date;
						$data['diachi_kh']=$address;
						$data['SDT_kh']=$numberphone;
						$data['Email_kh']=$email;
						$data['display_kh']="block";

						$insert =  data_to_sql_insert($tablesql,$data);
						exec_update($insert);

						$tablelogin = "login";
						$datalogin['id_login'] = "";
						$datalogin['username'] = $username;
						$datalogin['password'] = $password;
						$datalogin['chucvu'] = "KhachHang";
						$datalogin['id_kh'] = $data['id_kh'];
						$insert2 = exec_update(data_to_sql_insert($tablelogin,$datalogin));
						$checkusenamepass = "select * from login where username = '$username' and password = '$password'";
						$datanew = select_one($checkusenamepass);
						setcookie("username","$username",time()+3600);
						setcookie("password","$password",time()+3600);				
						$_SESSION['id_kh'] = $datanew['id_kh'];
						header("location:index.php");

					}
					else
					{
						$erro = "Mã xác minh không đúng";
					}	
				}
				else
				{
					$erro = "Tài khoản đã tồn tại";
				}
			}
			else
			{
				$erro = "Mật khẩu nhập lại không chính xác";
			}
		}
		else
		{
			$erro = "Bạn chưa nhập đủ thông tin";
		}
		
	}
?>