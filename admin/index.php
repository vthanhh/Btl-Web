<?php 
	require "config.php";
	session_start();
	if(!$_SESSION["ten_dn"])
	{
		header("location:login.php");
	}
	else
	{
		echo"<h4 style=''>Xin chào: ".$_SESSION["ten_dn"]."</h4>";
		echo "<a href='index.php?task=logout' class='btn btn-danger'>Đăng xuất</a>";
	}
	if(isset($_GET["task"]) && $_GET["task"]=="logout")
	{
		session_destroy();
		header("location:index.php");
	}
	if(isset($_POST["insert"]))
	{
		$Cate_Name = $_POST["Cate_Name"];
		$Cate_Status = $_POST["Cate_Status"];
		$sql = "insert into tbl_category(Cate_Name,Cate_Status) value(N'".$Cate_Name."',N'".$Cate_Status."')";

			if (mysqli_query($conn, $sql)) 
			{
			  echo "New record created successfully";
			  header("location:index.php");
			} 
			else 
			{
			  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
			}
	}
	//delete
	if(isset($_GET["task"])&& $_GET["task"]=="delete")
	{
		$cate_id = $_GET["ID"];
		$sql = "DELETE FROM tbl_category WHERE Cate_ID=".$cate_id;

		if (mysqli_query($conn, $sql)) {
		  echo "Record deleted successfully";
		} else {
		  echo "Error deleting record: " . mysqli_error($conn);
		}
	}
?>
<html>
	<head>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	</head>
	<style>
		.text a{
			font-size:20px;
			margin:20px 0px;
			text-decoration: none;
			display: inline;
			text-align: center;
			padding:6px 8px 8px 8px;
			border: 1px solid black;
			border-radius: 3px;
		}
	</style>
	<body>
	<div class="container">
		<h1 style="text-align:center; font-size:35px; margin:20px 0px;">Trang quản trị Admin</h1>
		<div class="text" style="padding-bottom: 20px; text-align: center; ">
			<a href="index.php" style="color:#AB6393;">Quản lý danh mục</a>
			<a href="Structures.php">Quản lý công trình</a>
			<a href="News.php">Quản lý tin tức</a>
		</div>
		<div class="row">
			<form action="index.php" class="col-6" method="post">
				Nhập vào tên danh mục
				<input type="text" class="form-control" name="Cate_Name">
				Nhập vào mô tả
				<input type="text" class="form-control" name="Cate_Status">
				<input  type="submit" name="insert" value="Thêm mới" class="btn btn-primary" style="margin-top:5px">
			</form>
		</div>
		<table class="table table-striped">
			<tr>
				<th>Mã danh mục</th>
				<th>Tên danh mục</th>
				<th>Trạng thái</th>
				<th>Hành động</th>
			</tr>
			<?php
				
				
				$sql = "SELECT * FROM tbl_category order by Cate_ID DESC";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
				  // output data of each row
				  while($row = mysqli_fetch_assoc($result)) 
				  {
					echo "<tr>";
					echo "<td>".$row["Cate_ID"]."</td>";
					echo "<td>".$row["Cate_Name"]."</td>";
					echo "<td>".$row["Cate_Status"]."</td>";
					echo "<td><a href='index.php?task=delete&ID=".$row["Cate_ID"]."' class='btn btn-danger'>Xóa</a> <a href='update_cate.php?id=".$row["Cate_ID"]."' class='btn btn-warning'>Sửa</a></td>";
					echo "</tr>";
				  }
				} 
				else 
				{
				  echo "0 results";
				}
				?>
		</table>
		
	</div>
	</body>
</html>

