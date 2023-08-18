<?php 
	require "config.php";
	session_start();
	if(isset($_POST["login"]))
	{
		$us = $_POST["us"];
		$pa =$_POST["pa"];
		$sql ="select * from tbl_user where user_name='".$us."' and pass_word='".$pa."'";
		$result =  mysqli_query($conn, $sql);
		if (mysqli_num_rows($result) > 0) {
			while($row = mysqli_fetch_assoc($result)){
				$_SESSION["ten_dn"] = $us;
			header("location:index.php");
			}
		}
		else
		{
			echo"<h4 style='color:red';>Sai tên đăng nhập hoặc mật khẩu</h4>";
		}
	}
?>
<html>
	<head>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
		<!-- <link rel="stylesheet" href="./css/style.css"> -->
	</head>
	<style>
		body{
			background-image: url("https://tuonglamphotos.com/wp-content/uploads/2020/04/chup-anh-noi-that-tuonglamphotos.com-44.jpg");
			background-size: cover;
			
		}
		#page{
			min-height: 100vh;
			display: flex;
			justify-content: center;
			align-items: center;
		}
		#form-login{
			max-width: 400px;
			background-color: #adb5bd ;
			flex-grow: 1;
			padding: 30px 30px 40px;
			box-shadow: 0px 0px 17px 2px rgba(255, 255, 255,  0.8);
		}
		.form-group{
			border-bottom: 1px solid #fff;
			margin-top:15px;
			margin-bottom: 20px;
			display: flex;
		}
		.form-group i{
			color: #f5f5f5;
			font-size: 15px;
			padding-top: 10px;
		}
		#user{
			background: transparent;
			border: 0;
			outline: 0;
			color: #fff;
			flex-grow: 1;
		}
		.form-submit{
			background: transparent;
			border: 1px solid #f5f5f5;
			color: #fff;
			width: 100%;
			text-transform: uppercase;
			padding: 6px 10px;
		}
		.form-submit:hover{
			border: 1px solid #0099CC;
		}
	</style>
	<body>
	<div id="page">
			<form id="form-login" action="login.php" class="dn" method="post">
			<h1 style="color: #f5f5f5; text-align:center; font-size:30px; margin:20px 0px;">Trang đăng nhập</h1>
				<div class="form-group">
					<i class="far fa-user"></i>
					<input id="user" type="text" class="form-control" name="us" placeholder="Tên đăng nhập" style="border: none; outline: none;">
				</div>
				<div class="form-group">
					<i class="fas fa-key"></i>
					<input id="user" type="password" class="form-control" name="pa" placeholder="Mật khẩu">
				</div>
					<input  type="submit" name="login" value="Đăng nhập" class="form-submit">
			</form>
		
	</div>
	</body>
</html>

